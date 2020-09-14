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
        #signUp2 .cardWrapper p{
            margin: 20px;
        }

        #signUp2 .cards{
            margin: 40px auto 0 auto;
        }
        #signUp2 .exp_img{
            margin-top: 20px;
        }
        .cardComp a{
            display: inline-block;
            color: #FFF !important;
            background-color: #43CF92 !important;
            padding: 15px 50px;
            width: 280px !important;
            font-size: 16px !important;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
            border-radius: 5px;
        }


        /* Meduim Screen*/
        @media screen and (min-width: 600px) {
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
                display: grid;
                grid-template-columns: repeat(2, 6fr);
            }
            #signUp2 .cardWrapper{
                text-align: center !important;

            }
            #signUp2 #cardWrapper2{
                padding-left: 50px;
            }
            #signUp2 .exp_img {
                margin-top: 0;
            }
            .cardComp a{
                font-size: 18px !important;

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
                display: grid;
                grid-template-columns: repeat(2, 5fr);
            }
            #signUp2 .cardWrapper{
                text-align: center !important;
                width: 400px;
            }
            #signUp2 #cardWrapper1 p{
                width: 300px;
                margin: 20px 50px;
            }
            #signUp2 #cardWrapper2 p{
                width: 230px;
                margin: 20px 50px;
            }

            #signUp2 #cardWrapper2 img{
                margin: 0;
            }
            .cardComp a{
                font-size: 18px!important;
            }
            .cardComp img{
                margin-left: 25px;
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
                        <div class="cardComp">
                            <div>
                                <img src="{{url('/img/bag.png')}}" >
                            </div>
                            <p><span class="text-danger">*</span> I have just graduated / I haven't worked after graduation </p>

                            <a href="#" class="btnDiv" >I am a Fresher</a>
                        </div>
                    </div>

                    <div id="cardWrapper2" class="cardWrapper">
                            <div class="cardComp">
                                <div class="exp_img">
                                    <img src="{{url('/img/portfolio.png')}}" >
                                </div>
                                <p><span class="text-danger">*</span> I have at least 1 month of work experience</p>

                                <a href="#" class="btnDiv" >I am Experienced</a>

                            </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

