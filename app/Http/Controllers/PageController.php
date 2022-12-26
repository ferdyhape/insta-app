<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Feed;
use App\Models\LikeDetail;
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
    public function notifications()
    {
        // date_default_timezone_set('Asia/Jakarta');
        // $dateNowIndonesia = date('Y-m-d H:i:s');

        $feed_user = Feed::where('user_id', auth()->user()->id)->where('like', '>', '0')->orderBy('created_at', 'desc')->get();
        return view('user.my-notifications', [
            "title" => "My Notification",
            "liked" => $feed_user,
            // "dateNow" => $dateNowIndonesia,
        ]);
    }

    public function auto_redirect()
    {
        return redirect('/feed');
    }
}
