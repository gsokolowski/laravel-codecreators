<?php

namespace App\Http\Controllers;

use App\Page;
use App\Message;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class PageController extends Controller
{

    public function about(Page $page) {

        $page = $page->findBySlug('about');
        return view('pages.about', ['page'=>$page]);
    }

    public function contact(Request $request, Page $page) {

        $posted = Input::all();

        if($posted) {

            $this->validate($request, [
                'name' => 'required|max:50',
                'email' => 'required',
                'message' => 'required|max:5000',
            ]);


            $message = new Message();

            if (Input::has('name'))
            {
                $message->name = Input::get('name');
            }

            if (Input::has('email'))
            {
                $message->email = Input::get('email');
            }

            if (Input::has('message'))
            {
                $message->message = Input::get('message');
            }

            $message->save();
        }

        $page =  $page->findBySlug('contact');
        return view('pages.contact', [
            'page'=>$page,
            'posted'=>$posted
        ]);
    }

    public static function gallery(Page $page) {

        //$page =  $page->findBySlug('gallery');
        $page = 'page';
        return view('pages.gallery', ['page'=>$page]);
    }

}
