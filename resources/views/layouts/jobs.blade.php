<html>
<head>
    <meta charset="UTF-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,500;0,700;1,300&display=swap" rel="stylesheet">

    <link href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('//cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css') }}" rel="stylesheet">
    <script src="{{ url('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js')}}" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <title>
        @if( View::hasSection('title')) @yield('title') @else {{ 'MyGlit' }}@endif
    </title>

    <style>
        *{
            box-sizing: border-box
        }

        body{
            font-family: 'Poppins', sans-serif;
            font-style: normal;
            color: #666;
            background-color: #F2F2F2;
        }
        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        a, p, h6{
            text-decoration: none;
            padding: 0;
            margin: 0;
        }
        #jobs_board header{
            position: fixed;
            top: 0;
            width: 100%;
            padding: 10px;
            z-index: 5;
            background-color: #ffffff;
        }
        #jobs_board .bottom_nav-logo .userImg{
            display: none;
        }
        #jobs_board .bell, .svg_menu1{
            position: absolute;
        }
        #jobs_board .bell{
           top: 15px;
            right: 45px;
        }
        #jobs_board .svg_menu1{
            top: 10px;
            right: 10px;
            cursor: pointer;
        }
        #jobs_board .bottom-header-img{
            margin-left: 30px;
            margin-top: 2px;
        }
        #jobs_board .menu-btn2 {
            position: absolute;
            left: 14px;
            top: 16px;
            cursor: pointer;
        }

        #jobs_board .menu-btn2 .btnLine2 {
            width: 16px;
            height: 2px;
            margin: 0 0 5px 0;
            background-color: #333333;
        }

        #jobs_board a{
            color: #333;
            text-decoration: none;
            font-size: 13px;
            line-height: 19px;
        }
        #jobs_board .items a{
            color: #ffffff;
            text-transform: uppercase;
        }

        #jobs_board .top_nav{
            background-color: #212D56;
            height: 100%;
        }

        #jobs_board .top_nav-1, #jobs_board .top_nav-2{
            font-size: 1.8rem;
            padding: 20px;
        }
        #jobs_board .main-wrapper{
            margin-top: 40px;
        }

       #jobs_board .left-sideBar {
            position: fixed;
            top: 50px;
            width: 50%;
            height: 100%;
            left: 0;
            display: none;
            z-index: 3;
            background-color: #fff;
           padding: 20px;
        }
       #jobs_board .left-sideBar .sideBar_menu_item {
           padding: 10px;
           font-size: 10px;
           width: 200px;
       }

       #jobs_board main{
           width: 100%;
       }

        #jobs_board .cards{
            background-color: #ffffff;
            border-radius: 5px;
            border: 1px solid #DDDDDD;
            margin-bottom: 10px;
            padding: 10px;
        }
        #jobs_board .cards:hover{
            border: 2px solid #0074FF;
        }




        /* Meduim Screen*/
        @media screen and (min-width: 600px) and (max-width:768px) {
            #jobs_board header{
                width: 100%;
                padding: 0;
                height: 120px;
            }
            #jobs_board .top_nav{
                display: flex;
                position: static;
                visibility: visible;
                justify-content: space-between;
                padding-top: 0;
                height: 40px;
            }

            #jobs_board .top_nav-1,  #jobs_board .top_nav-2{
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 0;
                font-size: 0;
            }
            #jobs_board .top_nav-1{
                margin: 5px 0 0 20px;

            }
            #jobs_board .top_nav-2{
                margin: 9px 20px 0 0;
            }

            #jobs_board .top_nav_item1,.top_nav_item2{
                padding: 0 10px 0 10px;
                font-size: 16px;
            }

            #jobs_board .bottom_nav{
                display: flex;
                justify-content: space-between;
                padding: 10px;
                margin: 5px;
            }
            #jobs_board .bottom_nav-logo{
                margin: 10px 20px 0 20px;
            }
            #jobs_board .bottom_nav-logo .bottom-header-img{
                margin: 0;
                padding-left: 30px;
            }
            #jobs_board .bottom_nav-logo .bottom-header-img img{
                width: 120px;
            }
            #jobs_board .bottom_nav-logo .menu-btn2 {
                cursor: pointer;
                top: 75px;
                left: 18px;
            }
            #jobs_board .menu-btn2 .btnLine2 {
                width: 28px;
                height: 3px;
            }

            #jobs_board .bottom_nav-logo .userImg{
                display: inline;
                margin-right: 20px;

            }
            #jobs_board .bottom_nav-logo .bell{
                position: relative;
                cursor: pointer;
                top: 0;
                left: 0;
            }
            #jobs_board .bottom_nav-logo .bell svg {
                width: 25px;
                height: 25px;
            }
            #jobs_board .bottom_nav-logo .svg_menu1{
                display: none;

            }
            #jobs_board .main-wrapper {
                width: 100vw;
                height: 100vh;
                margin-top: 110px;
            }

            #jobs_board .left-sideBar {
                position: static;
                width: 200px;
                height: 100vh;
                padding: 30px 0 0 20px;
            }
        }


        /* LARGE SCREEN */
        @media (min-width: 769px) {
            #jobs_board header{
                width: 100%;
                padding: 0;
            }
            #jobs_board .top_nav{
                display: flex;
                position: static;
                visibility: visible;
                justify-content: space-between;
                padding-top: 0;
                height: 40px;
            }

            #jobs_board .top_nav-1,  #jobs_board .top_nav-2{
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 0;
                font-size: 0;
            }
            #jobs_board .top_nav-1{
                margin: 5px 0 0 20px;

            }
            #jobs_board .top_nav-2{
                margin: 9px 20px 0 0;
            }

            #jobs_board .top_nav_item1,.top_nav_item2{
                padding: 0 10px 0 10px;
                font-size: 16px;
            }

            #jobs_board .bottom_nav{
                display: flex;
                justify-content: space-between;
                padding: 10px;
                margin: 5px;
            }
            #jobs_board .bottom_nav-logo{
                margin: 10px 20px 0 20px;
            }
            #jobs_board .bottom_nav-logo .bottom-header-img{
                margin: 0;
                padding-left: 30px;
            }
            #jobs_board .bottom_nav-logo .bottom-header-img img{
                width: 120px;
            }
           #jobs_board .bottom_nav-logo .menu-btn2 {
               cursor: pointer;
               top: 75px;
               left: 18px;
            }
            #jobs_board .menu-btn2 .btnLine2 {
                width: 28px;
                height: 3px;
            }

           #jobs_board .bottom_nav-logo .userImg{
               display: inline;
                margin-right: 20px;

           }
            #jobs_board .bottom_nav-logo .bell{
                position: relative;
                cursor: pointer;
                top: 0;
                left: 0;
           }
            #jobs_board .bottom_nav-logo .bell svg {
                width: 30px;
                height: 30px;
            }
            #jobs_board .bottom_nav-logo .svg_menu1{
                display: none;

           }

            #jobs_board .left-sideBar {
                position: static;
                width: 270px;
                height: 55rem;
                padding: 30px 0 0 20px;
            }
            #jobs_board main{
                margin: 20px;
            }

            #jobs_board .main-wrapper {
                margin-top: 110px;
            }

            /*#jobs_board .form-recruit-search{
                border-radius: 5px;
                background-color: #fff;
            }*/
            #jobs_board .sideBar_menu_item{
                font-size: 13px;
                line-height: 19px;
                border-bottom: 1px solid #eee;
                text-align: center;
                color: #999999;
                padding: 15px;
            }
            #jobs_board .cards{
                padding: 20px;
                margin-bottom: 20px;
            }

        }

    </style>
    @yield('style')
</head>
<body>
<div id="jobs_board">
    <header>
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
        <nav class="bottom_nav">

            <div class="bottom_nav-logo d-flex">
                {{--   begins menu icon  --}}
                <div class="menu-btn2">
                    <div class="btnLine2"></div>
                    <div class="btnLine2"></div>
                    <div class="btnLine2"></div>
                </div>
                <div class="bottom-header-img">
                    <a class="navbar-brand" href="#">
                        <img src="http://freeversion.myglit.com/images/myglit-banner.png" class="img-fluid" alt="" width="70">
                    </a>
                </div>
            </div>
            <div class="bottom_nav-logo" >
                <span class="userImg">
                    <img src="/img/user.png">
                </span>
                <span class="bell">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                         width="20" height="20"
                         viewBox="0 0 172 172"
                         style=" fill:#000000; border: 1px" >
                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                            <path d="M0,172v-172h172v172z" fill="none" stroke="none"></path>
                            <g id="original-icon" fill="#000000" stroke="none" opacity="0" visibility="hidden">
                                <path d="M86,14.33333c-5.934,0 -10.75,4.816 -10.75,10.75v4.98307c-18.53885,4.77861 -32.25,21.56799 -32.25,41.60026v43l-14.33333,14.33333v7.16667h44.93164c-1.26198,2.17784 -1.92819,4.64961 -1.93164,7.16667c0,7.91608 6.41725,14.33333 14.33333,14.33333c7.91608,0 14.33333,-6.41725 14.33333,-14.33333c-0.0077,-2.51833 -0.67877,-4.99018 -1.94564,-7.16667h44.94564v-7.16667l-14.33333,-14.33333v-43c0,-20.03227 -13.71115,-36.82165 -32.25,-41.60026v-4.98307c0,-5.934 -4.816,-10.75 -10.75,-10.75zM86,43c15.80967,0 28.66667,12.857 28.66667,28.66667v43v5.9349l1.23177,1.23177h-59.79687l1.23177,-1.23177v-5.9349v-43c0,-15.80967 12.857,-28.66667 28.66667,-28.66667z"></path>
                            </g>
                            <g id="subtracted-icon" fill="#000000" stroke="none">
                                <path d="M129,114.66667l14.33333,14.33333v7.16667h-44.94564c1.26687,2.17649 1.93794,4.64834 1.94564,7.16667c0,7.91608 -6.41725,14.33333 -14.33333,14.33333c-7.91608,0 -14.33333,-6.41725 -14.33333,-14.33333c0.00345,-2.51706 0.66966,-4.98882 1.93164,-7.16667h-44.93164v-7.16667l14.33333,-14.33333v-43c0,-18.44957 11.63018,-34.14845 27.95068,-40.24703c-0.62366,3.15395 -0.95068,6.4131 -0.95068,9.74703c0,2.1848 0.14044,4.33749 0.41277,6.4495c-7.86752,5.1157 -13.07943,13.98463 -13.07943,24.0505v48.9349l-1.23177,1.23177h59.79688l-1.23177,-1.23177l0,-29.56773c1.80654,0.19791 3.64163,0.2995 5.5,0.2995c3.01313,0 5.96505,-0.26706 8.83333,-0.77875z"></path>
                            </g>
                            <g stroke="none">
                                <g id="Filled_3_" fill="#e33d47">
                                    <path d="M120.16667,5.33333c-19.70833,0 -35.83333,16.125 -35.83333,35.83333c0,19.70833 16.125,35.83333 35.83333,35.83333c19.70833,0 35.83333,-16.125 35.83333,-35.83333c0,-19.70833 -16.125,-35.83333 -35.83333,-35.83333zM133.339,55.59317c-0.74533,1.53367 -1.77017,2.82367 -3.0745,3.87c-1.30433,1.04633 -2.84517,1.84183 -4.62967,2.3865c-1.7845,0.54467 -3.71233,0.817 -5.79067,0.817c-1.75583,0 -3.47583,-0.2365 -5.15283,-0.71667c-1.677,-0.48017 -3.17483,-1.21833 -4.48633,-2.2145c-1.3115,-0.99617 -2.365,-2.24317 -3.16767,-3.75533c-0.80267,-1.49783 -1.204,-3.2895 -1.204,-5.3535h8.18433c0,0.78833 0.1505,1.505 0.4515,2.15717c0.301,0.645 0.71667,1.204 1.25417,1.677c0.54467,0.46583 1.17533,0.8385 1.9135,1.11083c0.73817,0.26517 1.54083,0.40133 2.408,0.40133c0.96033,0 1.8275,-0.129 2.6015,-0.40133c0.774,-0.27233 1.43333,-0.65933 1.97083,-1.161c0.5375,-0.50883 0.946,-1.11083 1.23267,-1.81317c0.2795,-0.69517 0.42283,-1.47633 0.42283,-2.3435c0,-1.11083 -0.15767,-2.064 -0.46583,-2.8595c-0.31533,-0.7955 -0.75967,-1.44767 -1.34733,-1.94217c-0.5805,-0.50167 -1.29717,-0.86717 -2.13567,-1.11083c-0.8385,-0.24367 -1.77733,-0.35833 -2.8165,-0.35833h-4.35733v-6.493h4.35733c2.07833,0 3.61917,-0.53033 4.61533,-1.58383c1.00333,-1.0535 1.49783,-2.451 1.49783,-4.19967c0,-0.76683 -0.11467,-1.4835 -0.33683,-2.14283c-0.22933,-0.65217 -0.57333,-1.21833 -1.032,-1.69133c-0.46583,-0.46583 -1.04633,-0.8385 -1.7415,-1.11083c-0.70233,-0.26517 -1.51933,-0.40133 -2.46533,-0.40133c-0.7525,0 -1.46917,0.1075 -2.14283,0.32967c-0.67367,0.22217 -1.25417,0.5375 -1.74867,0.93883c-0.50167,0.40133 -0.89583,0.89583 -1.18967,1.4835c-0.29383,0.5805 -0.43717,1.23983 -0.43717,1.96367h-8.18433c0,-1.72 0.35117,-3.2895 1.06783,-4.70133c0.70233,-1.40467 1.66267,-2.6015 2.881,-3.5905c1.21833,-0.989 2.65167,-1.75583 4.29283,-2.3005c1.64117,-0.54467 3.38983,-0.817 5.26033,-0.817c2.07833,0 3.97033,0.25083 5.676,0.75967c1.70567,0.50883 3.17483,1.2685 4.40033,2.27183c1.2255,1.00333 2.17867,2.25033 2.8595,3.73383c0.68083,1.4835 1.01767,3.2035 1.01767,5.16c0,0.903 -0.13617,1.79167 -0.4085,2.67317c-0.27233,0.8815 -0.67367,1.71283 -1.21117,2.494c-0.5375,0.76683 -1.19683,1.49067 -1.97083,2.15c-0.774,0.65933 -1.66267,1.2255 -2.65883,1.68417c2.322,0.84567 4.05633,2.107 5.19583,3.79117c1.1395,1.69133 1.71283,3.68367 1.71283,5.977c0,1.9565 -0.37983,3.698 -1.118,5.23167z"></path>
                                </g>
                                <g id="Filled_3_" fill="#000000" opacity="0">
                                    <path d="M170.33333,41.16667c0,27.65617 -22.50333,50.16667 -50.16667,50.16667c-27.66333,0 -50.16667,-22.5105 -50.16667,-50.16667c0,-27.65617 22.50333,-50.16667 50.16667,-50.16667c27.66333,0 50.16667,22.5105 50.16667,50.16667z"></path>
                                </g>
                            </g>
                            <path d="M84.33333,77v-71.66667h71.66667v71.66667z" id="overlay-drag" fill="#ff0000" stroke="none" opacity="0"></path>
                        </g>
                    </svg>
{{--                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" width="20px" height="20px">--}}
{{--                        <path d="M0 0h24v24H0z" fill="none"/>--}}
{{--                        <path d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.9 2 2 2zm6-6v-5c0-3.07-1.63-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.64 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2zm-2 1H8v-6c0-2.48 1.51-4.5 4-4.5s4 2.02 4 4.5v6z"/>--}}
{{--                    </svg>--}}
                </span>
                <span class="svg_menu1">
                    <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -192 512 512" width="30px">
                        <g transform="matrix(0.515137 0 0 0.515137 124.125 31.0312)">
                            <path d="m320 64c0 35.347656-28.652344 64-64 64s-64-28.652344-64-64 28.652344-64 64-64 64 28.652344 64 64zm0 0" data-original="#000000" class="active-path" data-old_color="#000000" fill="#666666"/>
                            <path d="m128 64c0 35.347656-28.652344 64-64 64s-64-28.652344-64-64 28.652344-64 64-64 64 28.652344 64 64zm0 0" data-original="#000000" class="active-path" data-old_color="#000000" fill="#666666"/>
                            <path d="m512 64c0 35.347656-28.652344 64-64 64s-64-28.652344-64-64 28.652344-64 64-64 64 28.652344 64 64zm0 0" data-original="#000000" class="active-path" data-old_color="#000000" fill="#666666"/>
                        </g>
                    </svg>
                </span>
            </div>
        </nav>
    </header>
    <div class="main-wrapper d-flex">
        <div  class="left-sideBar">
            <ul class="menu_bottom_list">
                <li  class = "sideBar_menu_item">
                    <a href="#">
                        <i class="fa fa-home ">
                            <span >&nbsp</span>
                        </i>
                        <span>Home</span>
                    </a>
                </li>
                <li  class = "sideBar_menu_item">
                    <a href="#jobs" data-toggle="collapse">
                        <span>
                            <img src="/img/job.png">
                              <span >&nbsp</span>
                        </span>
                        <span>Jobs</span>
                        <span >&nbsp</span>
                        <span class="arrowD ">
                            <svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" width="20px" height="20px">
                                <path d="M0 0h24v24H0V0z" fill="none"/>
                                <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"/>
                            </svg>
                            <span></span>
                        </span>
                    </a>
                    <div id="jobs" class="collapse">
                        <a class="dropdown-item" href="#">My Job</a>
                        <a class="dropdown-item" href="#">My Job</a>
                        <a class="dropdown-item" href="#">My Job</a>
                    </div>

                </li>
                <li class = " sideBar_menu_item">
                    <a href="#">
                        <i class="fa fa-search">
                            <span >&nbsp</span>
                        </i>
                        <span>Search</span>

                    </a>
                </li>
                <li  class = "sideBar_menu_item">
                    <a href="#Network" data-toggle="collapse">
                        <span>
                            <img src="/img/netwrk.png">
                             <span >&nbsp</span>
                        </span>
                        <span>Network</span>
                        <span >&nbsp</span>
                        <span class="arrowD icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" width="20px" height="20px">
                                <path d="M0 0h24v24H0V0z" fill="none"/>
                                <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"/>
                            </svg>
                            <span></span>
                        </span>
                    </a>
                    <div id="Network" class="collapse">
                        <a class="dropdown-item" href="#">My Network</a>
                        <a class="dropdown-item" href="#">My Network</a>
                        <a class="dropdown-item" href="#">My Network</a>
                    </div>

                </li>
                <li  class = "sideBar_menu_item">
                    <a href="#">
                        <span>
                            <img src="/img/msg.png">
                              <span >&nbsp</span>
                        </span>
                        <span>Messages</span>

                    </a>
                </li>
                <li  class = "sideBar_menu_item">
                    <a href="#myAccount" data-toggle="collapse">
                        <i class="fa fa-user">
                            <span >&nbsp</span>
                        </i>
                        <span>My Account</span>
                        <span class="arrowD ">
                             <span ></span>
                            <svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" width="20px" height="20px">
                                <path d="M0 0h24v24H0V0z" fill="none"/>
                                <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"/>
                            </svg>
                            <span></span>
                        </span>
                    </a>
                        <div id="myAccount" class="collapse" >
                            <a class="dropdown-item" href="#">Account</a>
                            <a class="dropdown-item" href="#">Account</a>
                            <a class="dropdown-item" href="#">Account</a>
                        </div>

                </li>
            </ul>
        </div>
        <main>
            @yield('content')
        </main>
    </div>
</div>

<script src=" {{ url('https://code.jquery.com/jquery-3.3.1.slim.min.js') }} " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src=" {{ url('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js') }} " integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="{{ asset('js/app.js') }}" defer></script>

<script>

    function myFunction() {
        let input, filter, ul, li, a, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        ul = document.getElementById("myUL");
        li = ul.getElementsByTagName("li");
        for (i = 0; i < li.length; i++) {
            a = li[i].getElementsByTagName("a")[0];
            txtValue = a.textContent || a.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
            } else {
                li[i].style.display = "none";
            }
        }
    }
</script>
</body>
</html>
