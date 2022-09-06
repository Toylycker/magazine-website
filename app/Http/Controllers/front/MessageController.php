<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'id' => 'nullable|integer|min:1',
            ]);
        $f_id = $request->id ?: null;

        $messages = Message::when($f_id, function ($query, $f_id) {
            return $query->where('id', 'like', '%' . $f_id . '%');
        })
            ->orderBy('id')
            ->orderBy('name')
            ->paginate(20)
            ->withQueryString();

        return view('front.home.contact', [
            'f_id' => $f_id,
            'messages' => $messages,
        ]);
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
    
    public function delete($id)
    {
        $message = Message::where('id', $id)
            ->firstOrFail();
        $success = trans('app.delete-response', ['name' => $message->name]);
        $message->delete();

        return redirect()->route('front.messages.index')
            ->with([
                'success' => $success,
            ]);
    }
}