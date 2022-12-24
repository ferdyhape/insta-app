@extends('layouts.main')
@section('content')

<section class="ftco-section">
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-7 col-lg-5">
                <div class="wrap">
                    <div class="img" style="background-image: url(assets/images/bg-1.jpg);"></div>
                    <div class="login-wrap p-4 p-md-5">
                        <div class="d-flex">
                            <div class="w-100">
                                <h3 class="mb-4">Sign Up</h3>
                            </div>
                            <div class="w-100">
                                <p class="social-media d-flex justify-content-end">
                                    <a href="#"
                                        class="social-icon d-flex align-items-center justify-content-center"><span
                                            class="fa fa-facebook"></span></a>
                                    <a href="#"
                                        class="social-icon d-flex align-items-center justify-content-center"><span
                                            class="fa fa-twitter"></span></a>
                                </p>
                            </div>
                        </div>
                        <form method="POST" action="/register" class="signin-form" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" id="level" name="level" value="user">
                            <div class="form-group mt-3">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name">
                                <label class="form-control-placeholder" for="name">Name</label>
                                @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control @error('email') is-invalid @enderror"
                                    name="email">
                                <label class="form-control-placeholder" for="email">Email</label>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <input type="number" class="form-control @error('phone') is-invalid @enderror"
                                    name="phone">
                                <label class="form-control-placeholder" for="phone">Phone Number</label>
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group mt-1">
                                <label for="profile_photo_path" class="form-label">Profile Photo</label>
                                <input class="form-control @error('profile_photo_path') is-invalid @enderror"
                                    type="file" id="profile_photo_path" name="profile_photo_path">
                                @error('profile_photo_path')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password">
                                <label class="form-control-placeholder" for="password">Password</label>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign
                                    Up</button>
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-50 text-left">
                                    <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
                                        <input type="checkbox" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="w-50 text-md-right">
                                    <a href="#">Forgot Password</a>
                                </div>
                            </div>
                        </form>
                        <p class="text-center">Have already have an account? <a href="/login" class="fw-bold">Login</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection