<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\Post;
use App\Models\User;

class dashboardController extends Controller
{
    public function dashboard()
    {
        $user = Session::get('name');
        $userID = User::where('name',$user)->value('id');
        $posts = Post::where('added_by',$userID)
            ->paginate(100);
        return view('dashboard',compact('posts'));
    }
}
