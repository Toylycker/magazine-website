<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function go_to_instagram($name){
        return redirect()->away('https://instagram.com/' . $name);
    }
}
