@extends('layouts.main')
@section('content')
<div class="container ">
    <div class="row">
        <div class="col-8 border">
            <div class="info ">
                <div class="user">
                    <div class="profile-pict"><img src="{{ asset('storage/'. $feed->user->profile_photo_path )}}"
                            alt="">
                    </div>
                    <div class="username">{{$feed->user->name }}</div>
                </div>
                <a href="#" class="options"><i class="fa-solid fa-bars"></i></a>
            </div>
            <a href="feed/{{ $feed->id }}">
                <img src="{{ asset('storage/'.$feed->picture_path)}}" class="post-image mt-2" alt="">
            </a>
            <div class="post-content">
                <div class="reaction-wrapper">
                    @php
                    $liked = $like_details->where('feed_id', '=', $feed->id)->Where('user_id',
                    '=',auth()->user()->id)->first();
                    if($liked!=null)
                    $liked = true;
                    else
                    $liked = false;
                    @endphp

                    @if ($liked == true)
                    <a href="#" class="icon text-danger"><i class="fa-sharp fa-solid fa-heart"></i></a>
                    @else
                    <a href="/like/{{ $feed->id }}" class="icon text-dark"><i class="fa-regular fa-heart"></i></a>
                    @endif

                    <a href="" class="icon text-dark"><i class="fa-regular fa-comment"></i></a>
                </div>
                {{ $liked == true ? "Anda sudah menyukai postingan ini" : "" }}
                <p class="likes mb-0">{{$feed->like }} Likes</p>
                <p class="description"><span>{{$feed->user->name }} </span>{{$feed->caption }}</p>
                <hr class="hr mt-2 mb-2">

            </div>
        </div>
        <div class="col-4">
            <div class="row d-flex justify-content-center">
                <div class="card shadow-0 border" style="background-color: #f0f2f5; position: unset">
                    <div class="card-body p-4">
                        <form method="POST" action="/comment" class="form-outline mb-4">
                            @csrf
                            <input type="hidden" id="user_id" name="user_id" value="{{ auth()->user()->id }}">
                            <input type="hidden" id="feed_id" name="feed_id" value="{{ $feed->id }}">
                            <input type="text" name="content" class="form-control" placeholder="Type comment..." />
                            <button type="submit" class="btn btn-outline-dark py-1 px-2 my-2"
                                data-mdb-ripple-color="dark">Send
                                Comment
                            </button>
                        </form>
                        <div class="overflow-auto" style="width: 265px; height: 524px;">
                            @foreach ($feed->comments as $c)
                            <div class="card mb-2" style="position: unset">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mb-3">
                                        <div class="d-flex flex-row align-items-center">
                                            <img src="{{ asset('storage/'. $c->user->profile_photo_path )}}"
                                                class="rounded-circle" alt="avatar" width="25" height="25" />
                                            <p class="small mb-0 ms-2">{{$c->user->name }} <i
                                                    class="fa-sharp fa-solid fa-comment ms-2"></i></p>
                                        </div>
                                    </div>
                                    <p class="my-1"> {{$c->content }}
                                    </p>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection