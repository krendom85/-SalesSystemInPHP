<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
     //
    public function index(){
        return view('posts.index',[
            'posts'=>Post::paginate()
        ]);
    }

    public function create(Post $post){
        return view('posts.create',['post'=>$post]);
    }
  
    public function store(Request $request){
        $request->validate(
            [
                'title' => 'required',
                'url' => 'required',
                'post'=> 'required',
            ]
        );

        $post = new Post();
  
        $post->init_at = $request->input('name');
        $post->title = $request->input('title');
        $post->post = $request->input('post');
        $post->url = $request->input('url');
        $post->save();

        return view('posts.index',[
            'posts'=>Post::paginate()
        ]);
    }

    public function edit(Post $post){
        return view('posts.edit',['post'=>$post]);
    }


    public function update(Request $request,Post $post){
        
        $request->validate([
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
       
        $imagen = $request->file('imagen');
        $nombreImagen = $imagen->getClientOriginalName();
        $imagen->move(public_path('storage'), $nombreImagen);
        //dd(public_path('storage') . "\\" . $nombreImagen);

        $post->update(
            [
                'title' => $request->input('title'),
                'post'=> $request->input('post'),
                'url' => "storage/" . $nombreImagen,
            ]
        );

        return redirect()->route('posts.edit',$post);
    }

    public function destroy(Post $post){
        $post->delete();
        return back();
    }

    public function showBlog1(){

        $posts = Post::pluck('id'); 
        return view('Blog',[
            'post'=> Post::find($posts[0])
        ]);
        return view('Blog');
    }

    public function showBlog2(){

        $posts = Post::pluck('id'); 
        return view('Blog',[
            'post'=> Post::find($posts[1])
        ]);
        return view('Blog');
    }

    public function showBlog3(){

        $posts = Post::pluck('id'); 
        return view('Blog',[
            'post'=> Post::find($posts[2])
        ]);
        return view('Blog');
    }
}
