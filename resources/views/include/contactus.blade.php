@extends('layout')
@section('title', 'AJC-Internet Contacts')

@section('content')
    <h1>This is Contact page</h1>

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    <!-- Your layout content here -->
    @yield('content')

    <!-- Include footer -->
    @include('footer')
</body>
</html>


@endsection
