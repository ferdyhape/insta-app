@extends('layouts.main')
@section('content')
<section class="container">
    <div class="d-flex align-items-center justify-content-center">
        <div class="left-content col-3 col-xs-4 d-flex justify-content-end">
            <img class="img-profile rounded-circle" src="{{ asset('storage/'. auth()->user()->profile_photo_path )}}"
                alt="image_profile">
        </div>
        <div class="right-content col-7 col-xs-8">
            <div class="d-flex mb-3 d-flex justify-content-between">
                <h3 class="username-profile">{{auth()->user()->name }}</h3>
                <a href="" class="edit-profile border border rounded text-decoration-none text-dark ms-4">Edit
                    profile</a>
            </div>
            <div class="state d-flex justify-content-center row">
                <p class="col-4 text-center my-0">200</p>
                <p class="col-4 text-center my-0">100</p>
                <p class="col-4 text-center my-0">5</p>
                <div class="w-100"></div>
                <p class="col-4 text-center my-0 fw-bold">Follower</p>
                <p class="col-4 text-center my-0 fw-bold">Likes</p>
                <p class="col-4 text-center my-0 fw-bold">Following</p>
            </div>
            <div class="biodata pt-3">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate accusantium beatae soluta placeat
                    expedita illo eius minima natus repellat, magnam tempore alias asperiores qui porro sapiente aut
                    possimus quam itaque!</p>
            </div>
        </div>
    </div>

    <section class="row gallery my-5 justify-content-center">
        @foreach ($feed as $f)
        <div class="card col-sm-3 m-1 border-0 shadow-sm" style="width: 18rem; position: unset;">
            <img class="card-img-top" src="{{ asset('storage/'.$f->picture_path)}}" alt="Card image cap">
        </div>
        @endforeach
    </section>
</section>

@endsection