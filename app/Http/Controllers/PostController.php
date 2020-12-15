<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;


class PostController extends Controller
{
    public function index(){

        $data =  Post::paginate(5);

        return view('posts.index', ['data' => $data]);
    }

    public function store(Request $request){


        $validation = $request->validate([

            'body' => 'required',

        ]);

        $data = new Post();

        $data->user_id = auth()->id();
        $data->body = $request->body;

        $data->save();

        return back()->with('result', 'Post submitted successfully');

    }

    public function destroy(Post $post){


        // dd($post->body);

        $post->delete();


        return back()->with("DeletePost", "Post Deleted Successfully");
    }
}
