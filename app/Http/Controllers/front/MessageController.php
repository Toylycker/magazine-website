<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(Request $request)
    {
        return view('front.home.contact');
    }

    public function store (Request $request){
        $request->validate([
            'name'=>'required|string|max:32',
            'email'=>'required|string|max:48',
            'company'=>'nullable|string|max:32',
            'phone'=>'required|integer|min:61000000|max:65999999',
            'text'=>'required|string|max:500',]);
        $message = new Message();
        $message->name = $request->name;
        $message->phone = $request->phone;
        $message->text = $request->text;
        $message->email = $request->email;
        $message->company = $request->company?$request->company:0;
        $success = trans('app.success');
        $message->save();

        return redirect()->back()
            ->with([
                'success' => $success,
            ]);
    }
    
}