<html>
<head>
    <meta charset="UTF-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ url('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js')}}" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <title>
        @if( View::hasSection('title')) @yield('title') @else {{ 'MyGlit' }}@endif
    </title>

    {{-- Style --}}
    <style>
        *{
            box-sizing: border-box;
        }
        body{
            font-family: 'Poppins', sans-serif;
            font-style: normal;
            font-weight: 500;
            background-color: #fff;
            color: #666666;
        }
        h5, h6{
            color: #333333;
        }

        #candidate-dashboard header{
            position: fixed;
            top: 0;
            width: 100%;
            padding: 10px;
            border-bottom: 1px solid #DDDDDD;
            background-color: #fff;
            z-index: 3;
        }

        #candidate-dashboard a{
            text-decoration: none;
            font-size: 12px;
            line-height: 19px;
        }

        #candidate-dashboard .bottom-header-btn a{
            background-color: #E33D47;
            color: #ffffff;
            border-radius: 5px;
            padding: 7px;
            text-decoration: none;
            font-size: 10px;
        }
        #candidate-dashboard .bottom-header-btn{
            margin-top: 7px;
            padding-left: 90px;
        }
        #candidate-dashboard ul, p{
            margin: 0;
            padding: 0;
            list-style: none;
        }
        #candidate-dashboard .top_nav{
            background-color: #212D56;
            height: 100%;
        }

        #candidate-dashboard .top_nav-1, #candidate-dashboard .top_nav-2{
            /*height: 50vh;*/
            font-size: 1.8rem;
            padding: 20px;

        }
        #candidate-dashboard .btn-line{
            width: 15px;
            height: 2px;
            padding: 0;
            margin: 2px;
        }
        #candidate-dashboard .items a{
            color: #ffffff;
            text-transform: uppercase;
        }

        /* Meduim Screen*/
        @media screen and (min-width: 600px) and (max-width:768px) {
            body{
                overflow-x: hidden;
            }

            #candidate-dashboard{
                padding: 0;
                margin: 0;
            }
            #candidate-dashboard a{
                font-size: 11px;
                margin: 0;
            }
            #candidate-dashboard .menu-btn{
                display: none;
            }
            #candidate-dashboard header{
                width: 100%;
                padding: 0;
                margin: 0;
            }
            #candidate-dashboard .top_nav{
                display: flex;
                position: static;
                visibility: visible;
                justify-content: space-between;
                padding-top: 0;
                height: 40px;
                left: 0;
            }

            #candidate-dashboard .top_nav-1,  #candidate-dashboard .top_nav-2{
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 0;
                font-size: 0;
            }
            #candidate-dashboard .top_nav-1{
                margin: 5px 0 0 10px;
                padding-top: 5px;

            }
            #candidate-dashboard .top_nav-2{
                margin: 9px 20px 0 0;
            }

            #candidate-dashboard .top_nav_item1,.top_nav_item2{
                padding: 0 5px 0 5px;
                font-size: 14px;
            }

            #candidate-dashboard .bottom_nav{
                justify-content: space-between;
                padding: 15px;
            }

            #candidate-dashboard .bottom-header-btn a{
                padding: 10px;
                font-size: 14px;
            }

            #candidate-dashboard .bottom-header-img img{
                width: 100px;
            }

        }

        /* LARGE SCREEN */
        @media (min-width: 769px) {
            #candidate-dashboard{
                padding: 0;
                margin: 0;
            }
            #candidate-dashboard header{
                width: 100%;
                margin: 0 0 50px 0;
                padding: 0;

            }

            #candidate-dashboard .menu-btn{
                display: none;
            }

            #candidate-dashboard .top_nav{
                display: flex;
                position: static;
                visibility: visible;
                justify-content: space-between;
                padding-top: 0;
                height: 40px;
                left: 0;
            }
            #candidate-dashboard .top_nav-1,  #candidate-dashboard .top_nav-2{
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 0;
                font-size: 0;
            }
            #candidate-dashboard .top_nav-1{
                margin: 5px 0 0 20px;

            }
            #candidate-dashboard .top_nav-2{
                margin: 9px 20px 0 0;
            }

            #candidate-dashboard .top_nav_item1,.top_nav_item2{
                padding: 0 10px 0 10px;
                font-size: 16px;
            }

            #candidate-dashboard .bottom_nav{
                justify-content: space-between;
                padding: 20px 30px 20px 30px;
            }

            #candidate-dashboard .bottom-header-btn a{
                padding: 10px;
                font-size: 14px;
            }

            #candidate-dashboard .bottom-header-img img{
                width: 100px;
            }
        }
    </style>
    @yield('style')
</head>
<body>
    <div id="candidate-dashboard">
        <header>
            {{--   begins menu icon  --}}
            <div class="menu-btn">
                <div class="btn-line"></div>
                <div class="btn-line"></div>
                <div class="btn-line"></div>
            </div>

            {{--     ends menu icon    --}}

            <nav class=" top_nav ">
                <div class="top-header-nav1">
                    <ul class="top_nav-1">
                        <li class="top_nav_item1 items ">
                            <a  href="#" target="_blank">
                                Jobs
                            </a>

                        </li>
                        <li class="top_nav_item1 items">
                            <a  href="#" target="_blank">
                                Search
                            </a>
                        </li>
                        <li class="top_nav_item1 items">
                            <a  href="#" target="_blank">
                                My Account
                            </a>
                        </li>
                        <li class="top_nav_item1 items">
                            <a  href="#" target="_blank">
                                Blogs
                            </a>
                        </li>
                        <li class="top_header-item1 items">
                            <a  href="#" target="_blank">
                                Interview Tips
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="top-header-nav1">
                    <ul class="top_nav-2">
                        <li class="top_nav_item2" >
                            <a href="#" target="_blank" style="color: #fff">
                                support@myglit.com
                            </a>

                        </li>
                        <li class="top_header top_nav_item2 items">
                            <a  href="#" target="_blank">
                                Contact Us
                            </a>
                        </li>
                        <li class="top_header top_nav_item2 items">
                            <a  href="#" target="_blank">
                                India
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <nav class="bottom_nav d-flex">
                <div class="bottom-header-img">
                    <a class="navbar-brand" href="#">
                        <img src="http://freeversion.myglit.com/images/myglit-banner.png" class="img-fluid" alt="" width="70">
                    </a>
                </div>

                <div class="bottom-header-btn">
                    <a href="#"> Employer Zone</a>
                </div>

            </nav>
        </header>

        <main class="main">
            @yield('content')
        </main>
    </div>

    <script src=" {{ url('https://code.jquery.com/jquery-3.3.1.slim.min.js') }} " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src=" {{ url('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js') }} " integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="{{url('https://cdn.jsdelivr.net/npm/chart.js@2.8.0')}}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

</body>
</html>
