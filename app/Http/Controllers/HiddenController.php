<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HiddenController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show() {

        $post = 'Hidden Post';
        return view('hidden.show', ['post'=>$post]);
    }

}
