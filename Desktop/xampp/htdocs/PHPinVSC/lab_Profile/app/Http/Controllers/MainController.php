<?php

namespace App\Http\Controllers;

use App\Models\ProfileModel;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function about(){
        return view('about');
    }
    public function experience(){
        return view('experience');
    }
    public function hobbies(){
        return view('hobbies');
    }
    public function post(){
        $posts = new ProfileModel();
        return view('post', ['posts' => $posts->all()]); 
    }

    public function post_check(Request $post){
        $valid = $post->validate([
            'title' => 'required|min:|max:200',
            'body' => 'required|min:10|max:500',
        ]);

        $review = new ProfileModel();
        $review->title = $post->input('title');
        $review->body = $post->input('body');

        $review->save();

        return redirect()->route('post');
    }
}
