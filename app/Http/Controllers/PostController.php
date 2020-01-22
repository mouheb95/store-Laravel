<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;

use App\Entity\Post;
use App\Entity\PhotoProduit;
use App\Entity\Category;
use App\Entity\Notification;
use App\Entity\NotifiableEntity;
use App\Entity\NotifiableNotification;

use App\User;

class PostController extends Controller
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
     * Display a listing of the resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        if(Auth::user()->role == 0){

        $users = User::All();
        $categorys = Category::all();
        $posts = Post::all();
        
        $photos = PhotoProduit::all();
 
        return view('admin.Post.index', compact('posts','photos','categorys','users'));
        }

        else
        {
        $categorys = Category::all();
        $posts = Post::where('verified', '=', 1)->get();
        
        $photos = PhotoProduit::all();

        return view('Post.showAllPost', compact('posts','photos','categorys'));
        }
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorys = Category::All();      
        return view('Post.createPost',compact('categorys'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $post = $request->all();
        // dump($post);die();
        Post::create($post);


        

        $posts_photo = Post::All();
        foreach ($posts_photo as $key => $value) {
            $id_post_photo = $value['id'];
        }

        $image_post = new PhotoProduit();
        $image_post->post_id = $id_post_photo;
        if($request->hasFile('image')){
            $image_post->path = $request->image->store('image');
        }
        $image_post->save();

        return redirect('/post');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = Post::All();
        $post = Post::findOrFail($id);
        $photoShow = PhotoProduit::where('post_id' , "=" , $id)->first();
        $photos = PhotoProduit::all();
        //dump($posts);die();
        return view('Post.showPost', compact('post','photos','posts','photoShow'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $object = Post::find($id);
        $categorys = Category::All();
        return view('admin.Post.edit', compact('object','categorys'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $object                 = Post::find($id);
        $object->title          = $request->title;
        $object->description    = $request->description;
        $object->price          = $request->price;
        $object->category_id    = $request->category_id;
        
        $object->save();

        return redirect('/post');
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $object = Post::where('id',$id)->delete();

        return redirect('/post')->with('success', 'Post deleted!');
        
    }

    /**
     * Filter the specified resource from storage.
     *
     * @param  int  $id
     */

    public function filter($id)
    {
         $categorys = Category::all();
        $posts = Post::where('category_id' , "=" , $id)->get();
        $photos = PhotoProduit::all();
 
        return view('Post.showAllPost', compact('posts','photos','categorys'));
    }

    /**
     * Filter the specified resource from storage.
     *
     * @param  int  $id , $verified
     */
    public function verified($id , $verified){

        if($verified == 1){
            $post = POST::findOrFail($id);
            $post->verified = 0 ;
            $post->save();
            return redirect('/post')->with('success', 'post has been disabled');
        } else {
            $post = POST::findOrFail($id);
            $post->verified = 1 ;
            $post->save();
            return redirect('/post')->with('success', 'post has been verified');
        }

    }

   /* public function imageUploadPost()

    {

        request()->validate([

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

  

        $imageName = time().'.'.request()->image->getClientOriginalExtension();

  

        request()->image->move(public_path('images'), $imageName);

  

        return back()

            ->with('success','You have successfully upload image.')

            ->with('image',$imageName);

    }*/

}
