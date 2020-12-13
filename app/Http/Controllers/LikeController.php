<?php

namespace App\Http\Controllers;
use App\Models\Like;
use App\Models\User;
use App\Models\Post;




use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function store($id){

        $data = new Like();

        $p_id = Post::find($id);

        $data->user_id = auth()->id();
        $data->post_id = $p_id->id;


        $data->save();

        return back();

    }

    public function destroy($id){

        $data = Like::where('post_id', $id)->first();

        $data->delete();

        return back();
    }
}
