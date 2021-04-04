<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Acquaintance;
use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailNotify;

class AcquaintanceController extends Controller
{
    public function index(){
        return view('acquaintance');
    }
    /*public function acquaintance(){
        $posts = new Acquaintance();
        return view('acquaintance', ['posts' => $posts->all()]); 
    }*/

    public function acquaintance_store(Request $post){
        
        /*$valid = $post->validate([
            'name' => 'required|min:2|max:50',
            'surname' => 'required|min:2|max:50',
            'email' => 'required|min:2|max:150',

        ]);*/
        
        $review = new Acquaintance();
        $review->name = $post->input('name');
        $review->surname = $post->input('surname');
        $review->email = $post->input('email');
        
        Mail::to($review->email)->send(new DemoEmail());

        if($post->hasFile('img')){
            $file = $post->file('img');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images', $filename);
            $review->img = $filename;
        }
        else{
            return $post;
            $review->img = ' ';
        }


        $review->save();

        return redirect()->route('acquaintance');
    }
}
