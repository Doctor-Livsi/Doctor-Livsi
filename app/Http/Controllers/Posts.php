<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
class Posts extends Controller
{
    public function index (){
        return view('posts.index', ['posts'=> Post::all()]);
    }
    public function show ($id){
        return view('posts.show', ['post' => Post::findOrfail($id)]);
    }
    public function create (){
        return view('posts.create');
    }
    public function store (Request $request){
        $data =$request->only(['title','content']);
        Post::create($data);
        return redirect()->route('post.index');
    }

}

//        ddd(Post::findOrFail(1));
//        dd(Post::all());
/*
    public function store (Request $request){
        $args =$request->all();
        $post = new Post();
        $post->title = $args['title'];
        $post->content = $args['content'];
        $post->save();
        return 'Post create';
    }



        $post = new Post();
        $post->title = '333';
        $post->content = '222333';
        $post->save();
*/
