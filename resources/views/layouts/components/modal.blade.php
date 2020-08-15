
@if(isset($form) && $form == 'true')
    <style>
        .modal{
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .header-wrapper{
            padding: 50px;
        }
        .modal-header{
            border: 0;
            padding: 0;
            justify-content: center;
            text-align: center;
        }
        .modal-header h3{
            font-size: 17px;
            font-weight: bold;
        }
        .socialBtn{
            justify-content: space-between;
        }
        .closeBtn {
            position: absolute;
            top: 0;
            right: 10px;
            color: #ccc;
            font-size: 30px;
            margin: 0 5px 0 0;
            cursor: pointer;
        }

        .closeBtn:hover,
        .closeBtn:focus {
            color: #333;
            text-decoration: none;

        }
        .modal-content{;
            margin: 50px auto auto auto;
            width: 85vw;
            box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 7px 20px 0 rgba(0, 0, 0, 0.17);
            animation-name: modalOpen;
            animation-duration: 1s;
        }

        .buttons a{
            display: inline-block;
            padding: 5px;
            width: 100px;
            border-radius: 5px;
            text-align: center;
            font-weight: bold;
        }
        .fbk a{
            background-color: #3B5998;
            color: #fff;
        }
        .fbk{
            margin-right: 10px !important;
        }

        .google a{
            background-color: #ffffff;
            color: #333333;
            border: 1px solid #EEEEEE;
        }
        .google img{
            width: 20px;
        }

        .separator{
            align-items: center;
            margin: 0 5px -20px 15px;
        }
        .stick{
            background-color: #cecece;
            width: 50%;
            height: 1px;
        }
        .or{
            flex: 0;
            padding: 20px 10px;
            color: gray;
        }
        .modal-body{
            padding: 10px 20px;
        }
        .form-group input{
            padding: 20px;
        }
        #btn-save {
            background-color: #E33D47;
        }

        .modal-footer{
            text-align: center;
            justify-content: center;
            border: 0;
            margin: 0!important;
        }
        .footer a{
            text-decoration: underline !important;
            color: #666;
        }
        .footer{
            margin-bottom: 20px;
        }
        .f-got a{
            margin-left: 120px;
        }
        .reg a{
            margin-left: 87px;
        }

        @keyframes modalOpen {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        /* Meduim Screen*/
        @media screen and (min-width: 600px) and (max-width:768px) {
            .header-wrapper{
                padding: 20px;
            }
            .modal-header{
                font-weight: bold;
            }
            .socialBtn{
                justify-content: space-around;
            }
            .closeBtn {
                top: 15px;
                right: 30px;
            }
            .modal-content{;
                margin: 200px auto;
                width: 70vw;
                padding: 20px;
            }
            .buttons a{
                padding: 10px;
                width: 200px;
                font-size: 16px!important;
            }

            .modal-body{
                padding: 1rem 3rem 0 3rem;
            }
            .form-group input{
                padding: 25px;
            }
            .f-got a{
                margin-left: 300px;
            }
            .reg a{
                margin-left: 200px;
            }
        }

        /* LARGE SCREEN */
        @media (min-width: 769px) {
            .header-wrapper{
                padding: 20px;
            }
            .modal-header{
                font-weight: bold;
            }
            .socialBtn{
                justify-content: space-around;
            }
            .closeBtn {
                top: 15px;
                right: 30px;
            }
            .modal-content{;
                margin: 15% auto;
                width: 35vw;
                padding: 20px;
            }
            .buttons a{
                padding: 10px;
                width: 200px;
                font-size: 16px!important;
            }

            .modal-body{
                padding: 1rem 3rem 0 3rem;
            }
            .form-group input{
                padding: 25px;
            }
            .f-got a{
                margin-left: 290px;
            }
            .reg a{
                margin-left: 210px;
            }
        }

    </style>
    {{--            This the Modal --}}
    <div class="modal fade" id="{{isset($divId) ? $divId:''}}" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="header-wrapper">
                    <div class="modal-header">
                        <div>
                            <span class="closeBtn">&times;</span>
                            <h3 class="modal-title" id="formModalLabel">{!! isset($title) ? $title : '' !!}</h3>
                            <p class="modal-title" id="formModalLabel">{!! isset($subtitle) ? $subtitle : '' !!}</p>
                        </div>
                    </div>
                    <div class="d-flex socialBtn">
                        <div class="fbk buttons">
                            <a href="#"> Facebook</a>
                        </div>
                        <div class="google buttons">
                            <a href="#" >
                                <img src="{{url('/img/google-logo.png')}}"> Google
                            </a>
                        </div>
                    </div>

                    <div class=" d-flex separator">
                        <div class="stick"></div>
                        <div class="or">OR</div>
                        <div class="stick"></div>
                    </div>
                </div>
                <div class="modal-body">
                    <form action="{{isset($formAction) ? route($formAction) : ''}}" method="{{isset($formMethod)? $formMethod : ''}}"
                          id="{{isset($formId) ? $formId : ''}}" name="{{isset($formName) ? $formName : ''}}" class="{{isset($class) ? $class : ''}}"
                          enctype="{{isset($formHeader) ? $formHeader : ''}}" novalidate="">

                        <div class="form-group">
                            <input type="text" class="form-control" id="title" name="title"
                                   placeholder="Username / Email" value="">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" id="description" name="description"
                                   placeholder="Password" value="">
                        </div>
                        <div class="footer f-got">
                             <a  href="#">Forgot password?</a>
                        </div>
                    </form>
                </div>
                <div>
                    <div class="modal-footer buttons">
                        <a type="button" class="btn text-white" id="btn-save" value="add">Login</a>
                    </div>
                    <div class="footer reg">
                        <a  href="#">Register for Free</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
