<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class PostController extends Controller
{
    public function index() {
        return view('post.create');
    }
    public function postCreatePost(StorePostRequest $request)
    {
        $data = $request->all();
        $response = Post::savePost($data);
        return View('post.create', compact('response'));

    }
}