<?php

namespace App\Http\Controllers;

use App\Models\Feed;
use App\Models\Comment;
use App\Models\LikeDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FeedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $likedetails = LikeDetail::where('user_id', auth()->user()->id)->get();

        return view('index', [
            "title" => "Home",
            "feed" => Feed::orderBy('created_at', 'desc')->get(),
            "comment" => Comment::all(),
            "like_details" => LikeDetail::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('feed.create', [
            "title" => "Post Feed",
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|integer',
            'caption' => 'required',
            'picture_path' => 'required|image',
        ]);

        if ($request->file('picture_path')) {
            $name_picture_path = $request->file('picture_path')->store('feed_picture', 'public');
            $validatedData['picture_path'] = $name_picture_path;
        }

        $validatedData['picture_path'] = $name_picture_path;

        Feed::create($validatedData);

        // $request->session()->flash('success', 'Data barang berhasil ditambahkan');

        return redirect('/feed')->with('Success upload!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Feed  $feed
     * @return \Illuminate\Http\Response
     */
    public function show(Feed $feed)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Feed  $feed
     * @return \Illuminate\Http\Response
     */
    public function edit(Feed $feed)
    {
        return view('feed.edit', [
            "title" => "Edit Feed"
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Feed  $feed
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Feed $feed)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Feed  $feed
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feed $feed)
    {
        //
    }
}
