@extends('layout')
@section('title', 'AJC-Internet')
@section('content')

{{-- SIR Thom... Dito ka lagay nung pang landing page sir.
wala na header ha? na include ko na kasi.
no header and footer pls. Thanks.. --}}

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


@include('footer')
@endsection
