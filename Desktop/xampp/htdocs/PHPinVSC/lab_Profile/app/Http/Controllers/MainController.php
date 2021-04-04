<?php

namespace App\Http\Controllers;

use App\Models\ProfileModel;
use Facade\FlareClient\Http\Client;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use App\Models\Acquaintance;
use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Mail;


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

    public function get_post_id($id)
    {
       $post = ProfileModel::find($id);

       if($post == null){
           return response(['message' => 'Post not found']  , 200);
       }

       return view('detail')->with(['post' => $post]);
    }

    public function mailSend(){
        $objDemo = new \stdClass();
        $objDemo -> demo_one = 'Demo one value';
        $objDemo -> demo_two = 'Demo two value';
        $objDemo -> sender = 'Mukhamedali.Saitkarim';
        $objDemo -> receiver = 'Mukhamedali.Saitkarim';

        Mail::to("msaitkarim555@gmail.com")->send(new DemoEmail($objDemo));
    }

}
