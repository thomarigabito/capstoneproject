









































{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

       <style>
            @import url('https://fonts.googleapis.com/css2?family=Bree+Serif&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap');

*{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: 'Bree Serif';
    background:#F3F3F3;
}

.header{
    display: flex;
    place-items: center;
    width: 100%;
    background-color: #EFEFEF;
    padding: 0 15px;
}
.logocont{
    background: transparent;
}
.logo{
    margin-left: 35px;
    width:150px;
    background: transparent;
}

.header_link{
    width: 75%;
    background: transparent;
}

.headerlink{
    display: flex;
    background: transparent;
    text-transform: uppercase;
    font-weight: 400;
    margin-left: 50px;
}

.headerlink li{
    text-decoration: none;
    background: transparent;
    list-style: none;
    margin-right: 15px;
}
.headbtn{
    display: flex;
    background: transparent;
    width: 25%;
    align-items: center;
    justify-content: center;
}
.headbtn a{
    background: transparent;
    margin-right: 10px;
    width: 25%;
    text-decoration: none;
    color: black;

}
.btn_acc{
    padding: .50em .30em ;
    margin-right: 35px;
    font-size: 16px;
    border-radius: 25px;
    width:175px;
    border: none;
    outline: none;
    background-color: #c43a3c;
    color:#EFEFEF
}
.fa-user{
    margin-right: .35em;
    background-color: transparent;
    font-size: 18px;
}



.banner{
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


       </style>
    </head>
    <body class="antialiased">
            <div class="header">
        <div class="logocont">
            <img class="logo" src="./assets/agclogo.png">
        </div>

        <div class="header_link">
            <ul class="headerlink">
                <li>Internet</li>
                <li>Promos</li>
                <li>Support</li>
            </ul>
        </div>
        <div class="headbtn">
            <a href="">Sign up</a>
            <button class="btn_acc"> <i class="fa-solid fa-user"></i>Account Login</button>
        </div>
    </div>

    <section class="title">
        <h1>We’re here to help you.</h1>
    </section>

    <div class="banner">
        <section class="chat">
            <div class="head">
                <h1>Chat with Us !</h1>
                <p>Use our AJC Pisonet FB Messenger for quick and easy assistance.</p>
                <div class="bannerbtn">
                    <button><i class="fa-solid fa-comments btnicon"></i>UJC Chatbot</button>
                </div>
            </div>
        </section>

        <section class="support">
            <div class="head">
                <h1>Support</h1>
                <p>We’ll find the best solution for you.</p>
                <div class="bannerbtn">
                    <button><i class="fa-solid fa-circle-question btnicon"></i>Go to Support</button>
                </div>
            </div>
        </section>
    </div>

    <div>
        <section class="title_info">
            <h1>We’ve got you covered with reliable internet that’s<br/> right for your home.</h1>
        </section>
        <section class="info">
            <div class="infos">
                <img src="./assets/productivity.png">
                <h4>Be more productive than ever</h4>
                <p>with faster speeds that Fiber Unli can provide.</p>
            </div>
            <div class="infos">
                <img src="./assets/stream.png">
                <h4>There’s no limit!</h4>
                <p>Stream to your heart’s content for as low as P899!</p>
            </div>
            <div class="infos">
                <img src="./assets/internet.png">
                <h4>Win more rounds with AUJ Internet</h4>
            </div>
        </section>
    </div>

    <div class="plans_container">
        <section class="promos">
            <div class="promo_title">
                <h1>Check out our high-speed Fiber Unli Plans</h1>
            </div>
            <div class="plans">
                <div class="plan1">
                    <h3 class="mbps">200 Mbps</h3>
                    <p>Fiber Unli Plan 1699</p>
                </div>
                <div class="plan2">
                    <h3 class="mbps">400 Mbps</h3>
                    <p>Fiber Unli Plan 1699</p>
                </div>
                <div class="plan3">
                    <h3 class="mbps">600 Mbps</h3>
                    <p>Fiber Unli Plan 1699</p>
                </div>
                <div class="plan4">
                    <h3 class="mbps">1000 Mbps</h3>
                    <p>Fiber Unli Plan 1699</p>
                </div>
            </div>
        </section>
        <section class="promo_details">
            <div>
                <!-- <img class="plan_img" src="./assets/familyinternet.jpg"> -->
                <h1>200 Mbps</h1>
            </div>
        </section>
    </div>
    </body>
</html> --}}
