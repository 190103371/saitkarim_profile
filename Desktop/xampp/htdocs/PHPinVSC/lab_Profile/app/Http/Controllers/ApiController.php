<?php

namespace App\Http\Controllers;

use App\Models\ProfileModel;
use Illuminate\Http\Request;


class ApiController extends Controller
{
    /*
        This function returns all post rows
    */

    public function index(Request $request){
        $posts = ProfileModel::all();

        return response($posts, 200); 
    }

    public function get_post(Request $request){
        $post  = ProfileModel::find($request -> post_id);

        if($post == null){
            return response(['message' => 'There is no post with such id'], 404);
        }

        return response($post, 200);
    }
}
