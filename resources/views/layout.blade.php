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
    .login.active{
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

    
    /* .banner{
    display: flex;
    align-items: center;
    width: 100%;
    }

    .title{
        padding: 40px 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background-color: rgba(162, 162, 162, 0.134);
    }

    .title h1{
        font-size: 38px;
        color:#c43a3c;
        background-color: transparent;
    }
    .chat{
        width: 50%;
        background-color: #F8EFE6;
    }
    .head {
        padding: 20px 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background-color: transparent;
    }

    .head h1{
        background: transparent;
        font-size: 34px;
        font-weight: 900;
        padding: 50px 0 35px;
    }
    .head p{
        background: transparent;
    }

    .support{
        align-items: center;
        width:50%;
        background-color:#F3EED8
    }

    .bannerbtn{
        background: transparent;
    }

    .bannerbtn button{
        margin:18px 0 0;
        padding: .50em .30em;
        font-size: 16px;
        border-radius: 25px;
        width: 178px;
        border: none;
        outline: none;
        background-color: #c43a3c;
        color:#fff;
        font-size: 17px;
        text-transform: uppercase;
        justify-items: center;
    }

    .btnicon{
    background: transparent;
    padding: 0 .5em 0 0;
    }

    .title_info{
        padding-top: 50px;
        font-size: 25px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    .info{
        display: flex;
        width: 100%;
        justify-content: space-around;
    }

    .infos{
        padding: 20px 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background-color: transparent;
    }
    .infos img{
        padding: 50px;
    }
    .infos p{
        font-weight: lighter;
    }


    .plans_container{
        display: flex;
        width: 100%;
    }
    .promos{
        display: flex;
        flex-direction: column;
        width: 50%;
        border: 1px solid black;
        justify-content: center;
        align-items: center;
    }
    .promo_title{
        padding: 10px 0;
    }
    .plans{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-template-rows: repeat(2, 1fr);
        grid-column-gap: 45px;
        grid-row-gap: 10px;
        padding: 45px;

    }

    .plan1, .plan2, .plan3, .plan4{
    padding: 20px;
    width: 200px;
    background-color: rgba(205, 205, 205, 0.214);
    border: .10em solid rgba(122, 122, 122, 0.426);
    border-radius: 20px;
    }

    .mbps{
        font-size: 30px;
    }

    .promo_details{
    background-image: linear-gradient(rgba(255, 255, 255, 0.5), rgba(22, 21, 25, 0.7)), url(assets/familyinternet.jpg);
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    position: relative;
    width: 50%;
    padding: 20px;
    } */

</style>
</head>
<body>
@include('header')
@yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
