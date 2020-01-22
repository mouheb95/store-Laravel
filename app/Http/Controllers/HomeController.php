<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Entity\Post;
use App\Entity\PhotoProduit;
use App\Entity\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $categorys = Category::all();
        $posts = Post::where('verified', '=', 1)->get();
        
        $photos = PhotoProduit::all();

        return view('Post.showAllPost', compact('posts','photos','categorys'));
    }
}
