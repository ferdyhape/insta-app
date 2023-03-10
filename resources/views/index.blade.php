@extends('layouts.main')
@section('content')

<section class="main d-flex justify-content-center">
    <div class="wrapper">
        <div class="left-col">
            @foreach ($feed as $f)
            <div class="post rounded">
                <div class="info">
                    <div class="user">
                        <div class="profile-pict"><img src="{{ asset('storage/'. $f->user->profile_photo_path )}}"
                                alt="">
                        </div>
                        <div class="username">{{$f->user->name }}</div>
                    </div>
                    <a href="#" class="options"><i class="fa-solid fa-bars"></i></a>
                </div>
                <a href="feed/{{ $f->id }}">
                    <img src="{{ asset('storage/'.$f->picture_path)}}" class="post-image mt-2" alt="">
                </a>
                <div class="post-content">
                    <div class="reaction-wrapper">
                        @php
                        $liked = $like_details->where('feed_id', '=', $f->id)->Where('user_id',
                        '=',auth()->user()->id)->first();
                        if($liked!=null)
                        $liked = true;
                        else
                        $liked = false;
                        @endphp

                        @if ($liked == true)
                        <a href="#" class="icon text-danger"><i class="fa-sharp fa-solid fa-heart"></i></a>
                        @else
                        <a href="/like/{{ $f->id }}" class="icon text-dark"><i class="fa-regular fa-heart"></i></a>
                        @endif

                        <a href="" class="icon text-dark"><i class="fa-regular fa-comment"></i></a>
                    </div>
                    {{ $liked == true ? "Anda sudah menyukai postingan ini" : "" }}
                    <p class="likes mb-0">{{$f->like }} Likes</p>
                    <p class="description"><span>{{$f->user->name }} </span>{{$f->caption }}</p>
                    <hr class="hr mt-2 mb-2">
                    @foreach ($f->comments as $c)
                    <p class="description-comment"><span class="comment">{{$c->user->name }} </span>{{$c->content }}
                    </p>
                    @endforeach
                </div>
                <div class="comment-wrapper">
                    <p class="icon pt-1 m-0"><i class="fa-sharp fa-solid fa-comment"></i></p>
                    <form method="POST" action="/comment" class="signin-form d-flex justify-content-between"
                        style="width: 95%;">
                        @csrf
                        <input type="hidden" id="user_id" name="user_id" value="{{ auth()->user()->id }}">
                        <input type="hidden" id="feed_id" name="feed_id" value="{{ $f->id }}">
                        <input type="text" class="comment-box" name="content" placeholder="Add a comment..">
                        <button type="submit" class="comment-btn"><i class="fa-solid fa-paper-plane"></i></button>
                    </form>
                    {{-- <a href="" class="comment-btn"><i class="fa-solid fa-paper-plane"></i></a> --}}
                </div>
            </div>
            @endforeach
        </div>
        <div class="right-col"></div>
    </div>
</section>

@endsection