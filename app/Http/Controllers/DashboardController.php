<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Portfolio;
use App\Quotes;
use App\About;
use App\Contact;
use App\Service;

class DashboardController extends Controller
{
    public static function index(){
        $posts = Post::orderBy('created_at','desc')->paginate(3, ['*'], 'posts');
        $abouts = About::orderBy('created_at','desc')->paginate(3, ['*'], 'abouts');
        $quotes = Quotes::orderBy('created_at','desc')->paginate(3, ['*'], 'quotes');
        $portfolios = Portfolio::orderBy('created_at','desc')->paginate(3, ['*'], 'portfolios');
        $services = Service::orderBy('created_at','desc')->paginate(3, ['*'], 'services');

        return view('dashboard', compact('posts','abouts','quotes','portfolios','services'));
    }
    //
}
