<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use GuzzleHttp\Client;

class PostController extends Controller
{
    public function index()
    {
        $client = new Client();
        $response = $client->request('GET', 'https://jsonplaceholder.typicode.com/posts');
        $body = $response->getBody();

        $posts = json_decode($body, true);

        foreach($posts as $post){

            Post::updateOrCreate([
                'id' => $post['id']
            ],[
                'id' => $post['id'],
                'userId' => $post['userId'],
                'title' => $post['title'],
                'body' => $post['body']
            ]);

        };
        
        $data = Post::orderBy('id', 'ASC')->paginate(10);

        return response()->json(compact('data'));
    }
}
