@extends('layouts.main')
@section('content')

<section class="container">
    <h2>Post Feed</h2>

    <form action="/feed" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" id="id" name="user_id" value="{{ auth()->user()->id }}">
        <label for="caption">Caption</label><br>
        <textarea type="text" class="form-control" name="caption"></textarea>
        <label for="picture_path" class="form-label mt-3">Picture</label>
        <input class="form-control @error('picture_path') is-invalid @enderror" type="file" id="picture_path"
            name="picture_path" required onchange="previewImage()">
        <label for="img-preview" class="mt-3">Preview Picture</label>
        <img class="img-preview img-fluid mt-1" id="img-preview"><br>
        <input type="submit" class="btn btn-primary mt-3" value="Upload">
    </form>
</section>


<script>
    function previewImage() {
        const image = document.querySelector('#picture_path');
        const imgPreview = document.querySelector('.img-preview')

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>
@endsection