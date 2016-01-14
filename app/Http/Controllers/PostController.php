<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index(){

        $posts = \App\Post::all();

        return view('posts.index', compact('posts'));
    }

    public function detalhe($id){

        $post = \App\Post::find($id);

        return view('posts.detalhe', ['title' => $post->title, 'content' => $post->content]);
    }
}
