@extends('layouts.main')
@section('content')
<section class="container">
    @foreach ($liked as $l)

    <div class="box-notifications my-2 shadow-sm">
        <div class="d-flex justify-content-between px-5 py-2 ">
            <div class="notif-desc my-auto">
                <h5 class="card-title">{{ $l->user->name }}</h5>
                <p class="card-text">liked your post on {{ $l->updated_at }} </p>
            </div>
            <div class="notif-image" style="width: auto;">
                <img class="" src="{{ asset('storage/'.$l->picture_path)}}" style="width: 100px;" alt="Card image cap">
            </div>
        </div>
    </div>

    @endforeach
</section>

<style>

</style>
@endsection