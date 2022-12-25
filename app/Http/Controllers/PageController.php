<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Feed;
use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function relationship_test()
    {
        return view('relationship_tes', [
            "title" => "Relationship Test",
            "feed" => Feed::all(),
            "comment" => Comment::all(),
        ]);
    }
    public function my_profile()
    {
        return view('user.my-profile', [
            "title" => "My Profile",
            "feed" => Feed::where('user_id', auth()->user()->id)->get(),
        ]);
    }
}
