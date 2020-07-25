<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class postController extends Controller
{
    function create(){

        // First Method
        // $newPost =  new Post;
        // $newPost->title = 'helllow world';
        // $newPost->body = 'helllow ';
        // $newPost->category	 = 'Laravek';
        // $newPost->save();

        // Second Method

        $newPost = Post::create(['title'=>'title g','body'=>'body g','category'=>'category g']);
        $newPost->save();//Ab model Post mai ja k protected filable likh denge or column define krdenge jo database mai hai

    }
    public function where(){
        // First Method
        // $post = Post::where('id',2)->first();
        // print_r($post->title);

        // Second Method
        $post = Post::find(2);
        print_r($post->body);
        // Third Method
        $post = Post::find([1,2]);
        foreach($post as $posts){
            print_r('<br>'.$posts->title);
        }

    }
    public function update(){
        // First Method
        // $post = Post::where('id',2)->first();
        // print_r($post->title);

        // Second Method
        $post = Post::find(2);
$post->title = 'updated title g';
$post->save();
        

    }
    public function delete(){
        // First Method
        // $post = Post::where('id',2)->first();
        // print_r($post->title);

        // Second Method
        $post = Post::find(2);
        if ($post->delete()){
            print_r("your record has been deleted");
        }
        

    }
}
