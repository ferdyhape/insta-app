<!DOCTYPE html>
<html lang="en">

<head>

    @include('layouts.head')

</head>

<body>

    @if (!Route::is('login', 'register'))
    @include('layouts.navbar')
    @endif

    @yield('content')

    @include('layouts.script')

</body>

</html>