<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        return redirect('/dashboard');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $req)
    {
        $user = Session::get('name');
        $userID = User::where('name',$user)->value('id');
        Post::create([
            'title'=>$req->title,
            'category'=>$req->category,
            'description'=>$req->description,
            'added_by'=>$userID,
        ]);

        return redirect('/dashboard')->with('success','Post added successfully');
    }
}
