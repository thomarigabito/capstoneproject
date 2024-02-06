<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'AJC')</title>
<style>
    .nav-link.active{
        color: red !important;
    }
    .nav-link{
        font-size: 20px;
        text-align: center;
    }
    .nav-link:hover{
        color: white;
        text-decoration: underline;
    }
    .login{
        text-decoration: none;
        font-size: 20px;
        color: rgb(209, 209, 209);
    }
    .login:hover{
        text-decoration: underline;
        color: white;
    }

</style>
</head>
<body>
@include('header')
@yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>