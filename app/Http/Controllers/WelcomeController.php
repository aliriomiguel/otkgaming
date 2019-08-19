<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Portfolio;
use App\Quotes;
use App\About;
use App\Service;

class WelcomeController extends Controller
{
    public static function index(){
        $posts = Post::all();
        $about = About::all();
        $quotes = Quotes::all();
        $portfolios = Portfolio::all();
        $services = Service::all();
        
        return view('welcome', compact('posts','about','quotes','portfolios','services'));
    }
    //
}
