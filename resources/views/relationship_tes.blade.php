@foreach ($feed as $f)
{{$f->caption }}<br>
{{$f->user->name }}<br>
@endforeach