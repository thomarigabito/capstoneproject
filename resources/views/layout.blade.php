<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    {{-- Font-Family --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'AJC')</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: "Roboto", serif;
        }

        h1,
        h2,
        h3,
        h4,
        p {
            background: transparent;
            font-weight: 500;
        }
        nav{
            background: rgba(146, 125, 125, 0.35);
            box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
            backdrop-filter: blur( 20px );
            -webkit-backdrop-filter: blur( 20px );
            border-radius: 10px;
            border: 1px solid rgba( 255, 255, 255, 0.18 );
        }
        .nav-link.active {
            color: red !important;
        }

        .login.active {
            color: red !important;
        }

        .nav-link {
            font-size: 20px;
            text-align: center;
        }

        .nav-link:hover {
            color: rgb(0, 0, 0);
            text-decoration: underline;
        }

        .login {
            text-decoration: none;
            font-size: 20px;
            color: rgb(255, 255, 255);
            background: #e35b53;
            padding: 5px;
            border-radius: 20px;
            width: 100px
        }

        .fa-user {
            font-size: 18px;
            padding-right: 5px
        }

        .login:hover {
            text-decoration: underline;
            color: rgb(0, 0, 0);
        }

        /* .form-control{
        border: none;
    } */


        /* Start homepage.blade CSS style */
        .head {
            width: 100%;
            height: 50vh;
            padding: 55px 0;
            background-image: linear-gradient(rgba(218, 194, 178, 0.719), rgba(111, 78, 82, 0.259)), url(./assets/head.jpg);
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            position: relative;
            color: #fefefe
        }

        .Fiber_Experience {
            background: #e35b53;
            color: #FEFEFE;
            padding: 40px 0;
            font-weight: 600;

        }

        .bundle {
            display: table-cell;
            vertical-align: right;
            width: 4rem;
        }

        .fa-signal,
        .fa-film,
        .fa-wifi {
            font-size: 25px;
        }

        .text {
            font-size: 22px;
            color: #FEFEFE;
            font-weight: 900;
            letter-spacing: 1px;
        }

        .text_title {
            padding: 0;
            background: rgba(226, 225, 223, 0.56);
        }

        .chat {
            background-color: #F8EFE6;
        }

        .support {
            background-color: #F3EED8;
        }

        .plan {
            width: 100%;
            height: 270px;
            padding-top: 40px;
            background: linear-gradient(rgba(111, 78, 82, 0.259), rgba(218, 194, 178, 0.719)), url(./assets/familyinternet.jpg);
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            position: relative;
        }

        .mbps {
            font-size: 32px;
            color: #fefefe;
        }

        .p_mbps {
            color: #fefefe;
        }

        .center_bundle {
            border-right: 1px #fefefe solid;
            border-left: 1px #fefefe solid;
        }

        @media screen and (max-width: 768px) {
            .center_bundle {
                border-right: none;
                border-left: none;
                border-top: 1px #fefefe solid;
                border-bottom: 1px #fefefe solid;
            }
        }

        /* End homepage.blade CSS style */
    </style>
</head>

<body>
    @include('header')
    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
