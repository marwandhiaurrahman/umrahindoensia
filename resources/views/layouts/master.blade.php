<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <!-- Favicon -->
    <link href="{{ asset('favicon.ico') }}" rel="icon">

    @include('layouts.partials.css')
    @yield('css')
</head>

<body>
    @include('layouts.partials.topbar')
    @include('layouts.partials.navbar')

    @yield('content')

    @include('layouts.partials.footer')
    @include('layouts.partials.js')
    @yield('js')
</body>

</html>
