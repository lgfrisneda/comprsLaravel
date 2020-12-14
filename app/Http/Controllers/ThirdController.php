<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ThirdController extends Controller
{
    public function index()
    {
        $client = new Client();
    	$response = $client->request('GET', 'https://jsonplaceholder.typicode.com/posts');
    	//$statusCode = $response->getStatusCode();
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

    	return $data;
    }
}
