<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Portfolio;
use App\Quotes;
use App\About;

class WelcomeController extends Controller
{
    public static function index(){
        $posts = Post::all();
        $about = About::all();

        return view('welcome', compact('posts','about'));
    }
    //
}
