@extends('layouts.topNav')
@section('title')
    Sign up 1
@endsection

@section('style')
    <style>

        #signUp2 {
            margin: 100px auto;
        }
        #signUp2 .cardWrapper{
            text-align: center;
        }
        #signUp2 .texts h4{
            font-size: 16px;
            text-align: center;
        }

        #signUp2 .cards{
            margin: 40px auto 0 auto;
        }
        #signUp2 #card-btn1{
            margin-bottom: 20px;
        }

        /* Meduim Screen*/
        @media screen and (min-width: 600px) and (max-width:768px) {
            #signUp2 {
                margin: 30% auto;
            }

            #signUp2 .wrapper{
                max-width: 100vw;
            }
            #signUp2 .texts h4{
                font-size: 24px;
            }

            #signUp2 .cards{
                display: flex;
                margin: 60px auto 0 auto
            }
            #signUp2 .cardWrapper{
                text-align: center !important;
                width: 50%;
            }
            #signUp2 #cardWrapper2{
                margin-left: 50px;
            }
            #signUp2 .card-btn{
                margin-top: 20px;
            }
        }

        /* LARGE SCREEN */
        @media (min-width: 769px) {
            #signUp2 {
                margin: 200px auto;
            }
            #signUp2 .texts h4{
                font-size: 24px;
            }

            #signUp2 .cards{
                display: flex;
                margin: 60px auto 0 auto
            }
            #signUp2 .cardWrapper{
                text-align: center !important;
                width: 400px;
            }
            #signUp2 .card2{
                width: 230px;
                margin: 0 20px auto;
            }
            #signUp2 .card-btn{
                margin-top: 20px;
            }
        }

    </style>
@endsection

@section('content')
    <div id="signUp2" class="container">
        <div class="row justify-content-center ">
            <div class="wrapper col-md-8">
                <div class="texts">
                    <h4>
                        Tell us how much experience you have?
                    </h4>
                </div>
                <div class="cards">
                    <div id="cardWrapper1" class="cardWrapper">

                        <div class="card1">
                            @component('layouts.components.card', [
                                'text' => "I have just graduated / I haven't worked after graduation",
                                'imgSrc'=> '/img/Vector.png'
                        ])
                            @endcomponent
                        </div>

                        <div id="card-btn1" class="card-btn">
                            @component('layouts.components.button', ['text' => "I am a Fresher"])
                            @endcomponent
                        </div>
                    </div>

                    <div id="cardWrapper2" class="cardWrapper">

                        <div class="card2">
                            @component('layouts.components.card', [
                                'text' => "I have at least 1 month of work experience",
                                'imgSrc'=> '/img/portfolio.png'
                         ])
                            @endcomponent
                        </div>

                        <div class="card-btn">
                            @component('layouts.components.button', ['text' => "I am Experienced"])
                            @endcomponent
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

