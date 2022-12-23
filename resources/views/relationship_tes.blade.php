@foreach ($feed as $f)
<h5>Nama: {{$f->user->name }}</h5>
<h5>Caption: {{$f->caption }}, {{$f->like }} Likes</h5>

{{-- menampilkan yang like --}}
@if (($f->like) > 0)
<p>disukai oleh:
    @foreach ($f->like_details as $lk)
    {{ $lk->user->name }},
    @endforeach
</p>
@endif

{{-- menampilkan komen --}}
@foreach ($f->comments as $c)
<h5>@ {{$c->user->name}}: {{$c->content}}</h5>
@endforeach
<p>---------------------------------</p>
@endforeach