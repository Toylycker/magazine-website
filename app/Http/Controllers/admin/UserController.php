<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(Request $request){
        $request->validate([
            'username'=>'string|nullable'
        ]);
        $search = $request->username?$request->username:null;

        $users = User::where('boss', 0)->when($search, function ($query) use ($search){
            $query->where('username', 'like', '%'.$search.'%');
        })->get();

        return View('admin.users.index', compact(['users','search']));
    }

    public function destroy($id){
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->back();
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'boss' => 0
        ]);

        // event(new Registered($user));

        // Auth::login($user);

        return redirect()->back();
    }
}
