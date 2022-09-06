<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscription;
use App\Models\Partner;

class SubscriptionController extends Controller
{
    public function index(Request $request){
         $request->validate([
            'search'=>'nullable|string'
        ]);
        $search = $request->search?$request->search:null;
        $partners = Partner::whereHAs("subscriptions")
        ->when($search, function ($query) use ($search){
            $query->where('name','like', '%' . $search . '%');
        })
        ->with("subscriptions")->orderBy("name", 'asc')->get();

        return View('admin.subscriptions.index', ['partners'=>$partners, 'search'=>$search]);
    }

    public function destroy( $id, Request $request){
        $request->validate([
            'mail'=>'required|email'
        ]);

        $partner = Partner::findOrFail($id);
        $subscription = Subscription::where('mail', $request->mail)->where('partner_id', $partner->id);
        $subscription->delete();

        if (!$subscription) {
            return redirect()->back()->with(['message'=>"mail does not exist"]);
        }

        return redirect()->back()->with(['message'=>"success"]);
    }
}
