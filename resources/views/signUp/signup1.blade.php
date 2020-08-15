@extends('layouts.topNav')
@section('title')
    Sign up 1
@endsection

@section('style')
    <style>

        #signUp1 {
            margin: 150px auto;
        }
        #signUp1 .texts{

            text-align: center;
        }
        #signUp1 .texts h4{
            font-size: 16px;
        }

        #signUp1 .buttons{
            margin: 40px auto 0 auto;
        }
        #signUp1 #btn1{
            margin-bottom: 20px;
        }

        /* Meduim Screen*/
        @media screen and (min-width: 600px) and (max-width:768px) {
            #signUp1 {
                margin: 280px auto;
            }
            #signUp1 .wrapper{
                max-width: 100vw;
            }

            #signUp1 .buttons{
                display: flex;
                margin-top: 60px;
                margin-left: 30px;
            }
            #signUp1 #btn1{
                margin-right: 20px;
            }

        }

        /* LARGE SCREEN */
        @media (min-width: 769px) {
            #signUp1 {
                margin: 280px auto;
            }

            #signUp1 .buttons{
                display: flex;
                margin-top: 60px;
                margin-left: 30px;
            }
           #signUp1 #btn1{
                margin-bottom: 20px;
            }

        }

    </style>
@endsection

@section('content')
    <div id="signUp1" class="container">
        <div class="row justify-content-center ">
            <div class="wrapper col-md-8">
                <div class="texts">
                    <h4 >
                        Select if you want to apply for <strong>BPO Jobs</strong> or <strong>Non BPO Jobs</strong>
                    </h4>
                </div>
                <div class="buttons">
                    <div id="btn1">
                        @component('layouts.components.button', ['text' => "BPO Jobs", 'btnClass' => 'btn-add'])
                        @endcomponent
                    </div>

                    <div id="btn2">
                        @component('layouts.components.button', ['text' => "Non BPO Jobs", 'btnClass' => 'btn-add'])
                        @endcomponent
                    </div>
                </div>
            </div>

        </div>

        @component('layouts.components.modal',[
                'form' => 'true',
                'divId' => 'formModal',

                'formMethod' => 'POST',
                'formId' => 'modalForm',
                'formName' => 'modalForm',
                'class' => 'form-horizontal',
                'formHeader' => 'multipart/form-data',
                'title' => "Login and find Jobs",
                'subtitle'=>'Sign in with'
            ])
        @endcomponent
    </div>
@endsection
