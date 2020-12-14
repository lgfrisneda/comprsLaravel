<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id', 'ASC')->paginate(10);

        return response()->json(compact('posts'));
    }
}
