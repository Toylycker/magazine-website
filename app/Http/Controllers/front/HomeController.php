<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Partner;
use App\Models\Blog;
use App\Models\Worker;
use App\Models\Magazine;
use Illuminate\Support\Facades\App;
use App\Models\Subject;
use App\Models\Category;
use App\Models\Subscription;
use Illuminate\Support\Facades\Cookie;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $workers = Worker::orderBy('id')
        ->with('links')
        ->get();
        $magazines = Magazine::orderBy('id', 'ASC')->get();

        return view('front.home.index', compact(['workers', 'magazines']));
    }


    public function language(Request $request, $key)
    {
        if ($key == 'ru') {
            session()->put('locale', 'ru');
        } else {
            session()->put('locale', 'tm');
        }
        return redirect()->back();
    }

    public function partners(Request $request){
        $request->validate(
            [
                'c' => 'nullable|integer',
                'search' => 'nullable|string|max:30'
            ]
        );

        $f_category = $request->has('c') ? $request->c : 0;
        $search = $request->search ?: null;
        $categories = Category::orderBy('name')->get();
        $partners =  Partner::when($search, function ($query, $search) {
            return $query->where('name', 'like', '%' . $search . '%');
                
                // where(function ($query) use ($search) {
                // $query->orWhere('name', 'like', '%' . $search . '%');
                // $query->orWhere('description', 'like', '%' . $search . '%');
            // });
        })
        ->when($f_category, function ($query, $f_category) {
            return $query->where('category_id', $f_category);
        })
        ->orderBy('sort_order')
        ->with('images', 'links')
        ->paginate(10)->withQueryString();
        // $f_category = collect($f_category);

        return view('front.home.partners', compact(['partners', 'f_category', 'categories', 'search']));
    }


    public function setBackground(){
        if (Cookie::has('backIsDark')) {
            $cookies = explode(",", Cookie::get('backIsDark'));
            if (in_array('false', $cookies)) {
                Cookie::queue('backIsDark', 'true', 60 * 24);
            }else{
                Cookie::queue('backIsDark', 'false', 60 * 24);
            }
        } else {
            Cookie::queue('backIsDark', 'true', 60 * 24);
        }

        return redirect()->back();
    }

    public function subscribe($id, Request $request){
        $request->validate([
        'mail'=>'email|required',
    ]);

        $partner = Partner::findorFail($id);
        if ($request->mail) {
            Subscription::firstOrCreate(['mail'=>$request->mail, 'partner_id'=>$partner->id]);
        }

        $success = trans('app.success');
        return response()->json([
            'success'=>$success]);
        // return redirect()->back()->with([
        //     'success'=> trans('app.success')
        // ]);

    }
}

