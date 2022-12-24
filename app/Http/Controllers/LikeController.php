<?php

namespace App\Http\Controllers;

use App\Models\Feed;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\LikeDetail;

class LikeController extends Controller
{
    public function like($id)
    {
        Feed::where('id', $id)->increment('like');

        $likedetail = new LikeDetail;
        $likedetail->feed_id = $id;
        $likedetail->user_id = auth()->user()->id;
        $likedetail->save();

        return redirect()->route('home');
    }
}
