@extends('layout')
@section('title', 'AJC-Internet')
@section('content')

    {{-- SIR Thom... Dito ka lagay nung pang landing page sir.
wala na header ha? na include ko na kasi.
no header and footer pls. Thanks.. --}}
    <div class="head container-fluid px-5">

        <h3 style="font-size:35px;" class="pt-5">A Greater Life Together, at Home</h3>

        <p>A Greater Life Together, at Home
            Get the whole family connected with the greatest deal.</p>


    </div>


    <div class="container-fluid Fiber_Experience px-5 ">
        <h1 class="">Elevate Your Fiber Experience at AJC Internet</h1>
        <div class="row">
            <div class="col-12 col-md-12 col-lg-4 py-5 d-flex">
                <div class="bundle px-1 px-md-2 "><span class="text"><i class="fa-solid fa-wifi"></i></span></div>
                <div>
                    <span class="text text-wrap">Fast & Reliable Unli Plans</span>
                    <p>Get a high-speed fiber connection of up to 1.5 Gbps for all-day streaming, gaming, and working.</p>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 py-5 d-flex center_bundle">
                <div class="bundle px-1 px-md-2 "><span class="text"><i class="fa-solid fa-film"></i></span></div>
                <div><span class="text ">Exclusive Family Bundle</span>
                    <p>Score free access to entertainment, health, and gaming subscriptions to elevate your family’s
                        lifestyle.
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 py-5 d-flex ">
                <div class="bundle px-1 px-md-2 "><span class="text"><i class="fa-solid fa-signal"></i></span></div>
                <div><span class="text">Whole Home Connectivity</span>
                    <p>Experience a better browsing experience for the whole family, with our latest devices powered by WiFi
                        6.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 p-sm-2 p-1 text-center"><a href=''
                    class="btn btn-light rounded-5 text-uppercase plan_btn">View Plans</a></div>
            <div class="col-12 col-md-4 p-sm-2 p-1 text-center"><a href=''
                    class="btn btn-light rounded-5 text-uppercase plan_btn">Apply Plan</a></div>
            <div class="col-12 col-md-4 p-sm-2 p-1 text-center"><a href=''
                    class="btn btn-light rounded-5 text-uppercase plan_btn">Upgrade Plan</a></div>
        </div>
    </div>

    <div class="container-fluid plan">
        <div class="row ">
            <div class="row">
                <div class="col col-md-2"><span></span></div>
                <div class="col col-md-4 px-2 text-center">
                    <h3 class="mbps">200 Mbps</h3>
                    <p class="p_mbps">Fiber Unli Plan 1699</p>
                </div>
                <div class="col col-md-4 px-2 text-center">
                    <h3 class="mbps">400 Mbps</h3>
                    <p class="p_mbps">Fiber Unli Plan 1699</p>
                </div>
                <div class="col col-md-2"><span></span></div>
            </div>
            <div class="row">
                <div class="col col-md-2"><span></span></div>
                <div class="col col-md-4 px-2 text-center">
                    <h3 class="mbps">600 Mbps</h3>
                    <p class="p_mbps">Fiber Unli Plan 1699</p>
                </div>
                <div class="col col-md-4 px-2 text-center">
                    <h3 class="mbps">1000 Mbps</h3>
                    <p class="p_mbps">Fiber Unli Plan 1699</p>
                </div>
                <div class="col col-md-2"><span></span></div>
            </div>
        </div>
    </div>

      </div>
    <div class="container-fluid">
        <h1 class="col-8 text-center align-items-center m-auto p-2  ">We’ve got you covered with reliable internet that’s
            right for your home.</h1>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-4 p-5  justify-content-center text-center">
                <img class="py-4" src="./assets/productivity.png">
                <h4>Be more productive than ever</h4>
                <p>with faster speeds that Fiber Unli can provide.</p>
            </div>
            <div class="col-12 col-md-4 p-5 justify-content-center text-center">
                <img class="py-4" src="./assets/stream.png">
                <h4>There’s no limit!</h4>
                <p>Stream to your heart’s content for as low as P899!</p>
            </div>
            <div class="col-12 col-md-4 p-5 justify-content-center text-center">
                <img class="py-4 " src="./assets/internet.png">
                <h4>Win more rounds with AUJ Internet</h4>
            </div>
        </div>
    </div>



    <div>
      <h1 class="col text-center mb-0 p-5  text_title ">We’re here to help you.</h1>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6 p-2 text-center chat">
                <h1>Chat with Us !</h1>
                <p>Use our AJC Pisonet FB Messenger for quick and easy assistance.</p>
                <button class="btn btn-outline-dark rounded-2"><i class="fa-solid fa-comments btnicon"></i>UJC
                    Chatbot</button>
            </div>
            <div class="col-12 col-md-6 p-2  text-center support">
                <h1>Support</h1>
                <p>We’ll find the best solution for you.</p>
                <button class="btn btn-outline-dark rounded-2"><i class="fa-solid fa-circle-question btnicon"></i>Go to
                    Support</button>




            </div>
        </div>
    </div>



    <div class="container-fluid faq py-5 px-5">
        <h3>FAQ</h3>
        <div class="row accordion" id="accordionFAQ">
            <div class="col-12 col-sm-10 col-md-10">
                <div class="accordion-item col">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            What are included in the AJC Internet plans?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionFAQ">
                        <div class="accordion-body">
                            All our plan offers come with free WiFi modem (DSL, Fibre and LTE bundled plans) and monthly
                            volume allowance. Plans starting at 1299 and above also have a free landline with unlimited
                            calls to any Globe or TM numbers, and 6-month access to Amazon Prime Video.
                        </div>
                    </div>
                </div>
                <div class="accordion-item col">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed accordion-button-fucos-box-shadow:none" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            What is monthly data allowance?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                        <div class="accordion-body">
                            It's the amount of data that you can use according to the broadband plan you subscribed to. Your
                            allowance is measured in gigabytes (GB) and is used up based on how much data your internet
                            activities consume.
                        </div>
                    </div>
                </div>
                <div class="accordion-item col">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed accordion-button-fucos-box-shadow:none " type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            How do you apply the Fair Use Policy to your broadband service?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                        <div class="accordion-body">
                            Globe At Home was designed to provide you consistently fast and reliable broadband service for a
                            steady browsing experience in the convenience of your home. It lets you stream data and download
                            large files, but if you use this service other than its intent as mentioned, you may experience
                            slow browsing.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@include('footer')

@endsection
