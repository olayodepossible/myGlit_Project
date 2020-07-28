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
{{--        <script src=" {{ url('https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js') }} "></script>--}}
{{--        <script src="{{ url('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js')}}"></script>--}}
        <title>
            MyGlit:Candidate Dashboard
        </title>

        {{-- Style --}}
        <style>
            body{
                font-family: 'Poppins', sans-serif;
                font-style: normal;
                font-weight: 500;
                background-color: #E5E5E5;
                color: #666666;
            }
            h5, h6{
                color: #333333;
            }

            #candidate-dashboard{
                margin: 10px;
                padding: 5px 0 5px 0;
            }

            #candidate-dashboard header{
                position: fixed;
                top: 0;
                width: 280px;
                padding: 10px;
                background-color: #ffffff;
            }

            #candidate-dashboard .main{
                margin-top: 185px;
            }

           #candidate-dashboard a{
               color: #333;
               text-decoration: none;
               font-size: 13px;
               line-height: 19px;
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
            #candidate-dashboard .top-header-nav1{
                color: #ffffff;
            }
            #candidate-dashboard .items a{
                color: #ffffff;
                text-transform: uppercase;
            }
            #candidate-dashboard .bottom-header-list{
                justify-content: space-between;
                /*padding-right: 45px;*/
                padding-top: 5px;
            }
            #candidate-dashboard .dropdown_list a{
                background-color: transparent;
                color: #333;
                border: 0;
                padding: 0;
                font-size: 13px;
            }
            #candidate-dashboard .menu_bottom_item{
                font-size: 10px;
            }
            #candidate-dashboard .menu_bottom_list{
                padding-right: 120px;
            }
            .dropdown:hover>.dropdown-menu {
                display: block;
            }

            .dropdown>.dropdown-toggle:active {
                /*Without this, clicking will make it sticky*/
                pointer-events: none;
            }
            #candidate-dashboard .bottom-header-bell{
                background-color: #1b1e21;
                width: 10px;
                height: 10px;
            }
            #candidate-dashboard header, .left-side-bar, .main-content, .right-side-bar{
                margin: 0 10px 20px 10px;
            }

            #candidate-dashboard .cards{
                background-color: #ffffff;
                border-radius: 5px;
                border: 1px solid #DDDDDD;
                margin-bottom: 10px;
                padding: 5px;
            }
            #candidate-dashboard .cards li{
                border-top: 1px solid #DDDDDD;
            }
            #candidate-dashboard .cards a{
                color: #333;
                text-decoration: underline;
            }
            #candidate-dashboard .cards:hover{
                border: 2px solid #0074FF;
            }
            #candidate-dashboard .cards_text{
                height: 60px;
                padding: 15px 0 0 15px;
            }
            #candidate-dashboard .profile-pic{
                /*width: 100%;*/
                text-align: center;
                padding: 20px;
            }
            #candidate-dashboard .profile-pic img{
                width: 70px;
            }
            #candidate-dashboard .profile_complete{
                justify-content: center;
                align-items: center;
                height: 100px;
            }
            #candidate-dashboard .profile_complete div{
                border: 0;
            }
            #candidate-dashboard .follower{
                text-align: center;
                border: 0;
            }

            #card1 .main-content div{
                border-bottom: 0;
            }
            #candidate-dashboard .main-content-card1 h6{
                font-size: 10px;
                width: 100%;
                text-align: center;
                padding: 13px 3px 0 5px;
            }
            #candidate-dashboard .main-content-card1 button{
                /*font-size: 9px;*/
                background-color: #E33D47;
                color: #ffffff;
                border-radius: 5px;
                width: 60px;
                padding: 12px;
                /*font-size: 10px;*/
                line-height: 12px;

            }

            #candidate-dashboard .rec-job{
                padding: 13px 5px;
                font-size: 14px;
                text-align: center;
            }
            #candidate-dashboard .rec-job-items{
                font-size: 10px;
                line-height: 22px;
                margin-bottom: 20px;
            }
            #candidate-dashboard .rec-job-items h6{
                margin-top: 10;
                line-height: 12px;
                font-size: 12px;
            }
            #candidate-dashboard .rec-job-items button{
                padding: 10px;
                color: #fff;
                background-color: #E33D47;
                border: 0;
                border-radius: 5px;
            }
            #candidate-dashboard .btn-rec-job{
                margin: 15px;
            }

            #candidate-dashboard .rec-job-icon small{
                font-size: 9px;
            }

            #candidate-dashboard .rec-job-icon span{
                padding-top: 5px;
                padding-right: 3px;
            }

            #candidate-dashboard .recruiter-item{
                font-size: 12px;
                padding-left: 10px;
            }
            #candidate-dashboard .recruiter-item img{
                width: 50px;
            }
            #candidate-dashboard .recruiter-item div{
                margin-top: 5px;
            }
            #candidate-dashboard .recruiter-item a{
                text-decoration: none;
            }

            #candidate-dashboard .recruiter-item span{
                border-bottom: 2px solid #E33D47;
                color: #333333;
            }
            #candidate-dashboard .recruiter-item-btn{
                padding: 20px 20px 0 67px;
            }

            #candidate-dashboard .recruiter-item-btn button{
                width: 100px;
                padding: 5px;
                color: #fff;
                background-color: #E33D47;
                border: 0;
                border-radius: 5px;
            }
            #candidate-dashboard .recruiter-card{
                margin: 20px 10px 20px 10px;
            }
            #candidate-dashboard .pagination_section{
                padding: 10px;
                height: 60px;
            }
            #candidate-dashboard .pagination_section a{
                padding-right: 4px;
                font-size: 12px;
            }


            #candidate-dashboard .right-side-bar img{
                width: 100px;
                height: 120px;
            }
            #candidate-dashboard .right-side-bar .online-user, .premium{
                background-color: #FFFFFF;
                border: 1px solid #DDDDDD;
                border-radius: 3px;
                padding: 13px 10px;
            }
            #candidate-dashboard .premium{
                background-color: #304081;
                color: #ffffff;
                height: 120px;
                text-align: center;
                line-height: 50px;
            }
            #candidate-dashboard .premium span{
                border-bottom: 2px solid #fff;
                color: #ffffff;
            }
            #candidate-dashboard .image img{
                width: 280px;
                height: 200px;
                margin-top: 20px;
            }

            /* Meduim Screen*/
            @media screen and (min-width: 600px) and (max-width:768px) {
                #candidate-dashboard .menu-btn, .svg_menu{
                    display: none;
                }
                #candidate-dashboard .top_nav, .left-side-bar{
                    visibility: visible;
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

                #candidate-dashboard .menu-btn, .svg_menu{
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
                    display: flex;
                    justify-content: space-between;
                    padding: 10px;
                    margin: 5px;
                }
                #candidate-dashboard .bottom-header-img img{
                    width: 120px;
                }
                #candidate-dashboard .bottom-header-list{
                    display: flex;
                    justify-content: space-between;
                    /*padding-right: 45px;*/
                    padding-top: 5px;
                }
                #candidate-dashboard .menu_bottom_item{
                    font-weight: 500;
                    font-size: 13px;
                    line-height: 19px;
                    padding-right: 20px;
                }
                #candidate-dashboard .menu_bottom_list{
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                }
                #candidate-dashboard .bell-logo svg{
                    width: 30px;
                    height: 30px;
                }
                #candidate-dashboard .bell-logo div{
                    padding-top: 15px;
                }

                #candidate-dashboard .main{
                    display: flex;
                    justify-content: center;
                    margin: 170px 40px 40px 40px;
                }
                #candidate-dashboard  .left-side-bar{
                    display: block;
                    visibility: visible;
                    position: static;
                    width: 300px;
                }
                #candidate-dashboard .profile-pic img {
                    width: 100px;
                    height: 100px;
                }
                #candidate-dashboard .main-content{
                    width: 750px;
                }
                #candidate-dashboard .cards{
                    padding: 20px;
                    margin-bottom: 20px;
                }
                #candidate-dashboard .main-content-card1 h6{
                    font-size: 14px;
                    line-height: 21px;
                    padding: 13px 30px 0 10px;
                }
                #candidate-dashboard .main-content-card1 button{
                    width: 150px;
                    padding: 15px;
                    font-weight: 600;
                    font-size: 16px;
                    line-height: 24px;
                    border: 0;
                }

                #candidate-dashboard .rec-job{
                    text-align: left;
                    font-size: 16px;
                    line-height: 24px;
                }
                #candidate-dashboard .rec-job-items h6 {
                    font-size: 16px;
                    line-height: 24px;
                }

                #candidate-dashboard .rec-job-items small, span, p {
                    font-size: 13px;
                    line-height: 19px;
                }
                #candidate-dashboard .rec-job-desc{
                    margin: 5px 0;
                }

                #candidate-dashboard .rec-job-items{
                    font-size: 10px;
                    line-height: 22px;
                    margin-bottom: 20px;
                }
                #candidate-dashboard .rec-job-items button{
                    font-weight: 500;
                    font-size: 14px;
                    line-height: 21px;
                }
                #candidate-dashboard .btn-rec-job{
                    margin: 15px;
                }
                #candidate-dashboard .rec-job-icon{
                    margin-right: 50px;
                }
                #candidate-dashboard .rec-job-icon svg, img{
                    width: 20px;
                    height: 20px;
                }

                #candidate-dashboard .rec-job-icon small{
                    font-size: 13px;
                    line-height: 19px;
                }

                #candidate-dashboard .rec-job-icon span{
                    padding-top: 0;
                    padding-right: 9px;
                }

                #candidate-dashboard .recruiter-item img {
                    width: 50px;
                    height: 50px;
                }
                #candidate-dashboard .recruiter-item {
                    font-size: 13px;
                    padding-left: 19px;
                }
                #candidate-dashboard .recruiter-card{
                    display: flex;
                    justify-content: space-between;
                }
                #candidate-dashboard .recruiter-item-btn button {
                    font-weight: 600;
                    font-size: 14px;
                    line-height: 21px;
                }

                #candidate-dashboard .right-side-bar{
                    width: 350px;
                }
                #candidate-dashboard .right-side-bar .online-user{
                    height: 100px;
                    padding: 20px;
                }

                #candidate-dashboard .premium {
                    height: 150px;
                    padding: 50px;
                }
                #candidate-dashboard .premium p{
                    font-size: 14px;
                    line-height: 21px;
                }#candidate-dashboard .premium span {
                     font-size: 18px;
                     line-height: 27px;
                }

                #candidate-dashboard .image img {
                    width: 350px;
                    height: 250px;
                    margin-top: 20px;
                }
            }
        </style>
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
                <div class="svg_menu">
                    <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -192 512 512" width="30px">
                        <g transform="matrix(0.515137 0 0 0.515137 124.125 31.0312)">
                            <path d="m320 64c0 35.347656-28.652344 64-64 64s-64-28.652344-64-64 28.652344-64 64-64 64 28.652344 64 64zm0 0" data-original="#000000" class="active-path" data-old_color="#000000" fill="#666666"/>
                            <path d="m128 64c0 35.347656-28.652344 64-64 64s-64-28.652344-64-64 28.652344-64 64-64 64 28.652344 64 64zm0 0" data-original="#000000" class="active-path" data-old_color="#000000" fill="#666666"/>
                            <path d="m512 64c0 35.347656-28.652344 64-64 64s-64-28.652344-64-64 28.652344-64 64-64 64 28.652344 64 64zm0 0" data-original="#000000" class="active-path" data-old_color="#000000" fill="#666666"/>
                        </g>
                    </svg>
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

                <nav class="bottom_nav">
                    <div class="bottom-header-img">
                        <a class="navbar-brand" href="#">
                            <img src="http://freeversion.myglit.com/images/myglit-banner.png" class="img-fluid" alt="" width="70">
                        </a>
                    </div>

                    <div class="bottom-header-list">
                        <ul class="menu_bottom_list">
                                <li  class = "menu_bottom_item">
                                    <a href="#">Home</a>
                                </li>
                                <li  class = "menu_bottom_item">
                                    <div class="dropdown_list">
                                        <a href="#" class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Jobs
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <a class="dropdown-item" href="#">My Job</a>
                                            <a class="dropdown-item" href="#">My Job</a>
                                            <a class="dropdown-item" href="#">My Job</a>
                                        </div>
                                    </div>
                                </li>
                                <li class = " menu_bottom_item">
                                    <a href="#">Search</a>
                                </li>
                                <li  class = "menu_bottom_item">
                                    <div class="dropdown_list">
                                        <a href="#" class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Network
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                            <a class="dropdown-item" href="#">My Network</a>
                                            <a class="dropdown-item" href="#">My Network</a>
                                            <a class="dropdown-item" href="#">My Network</a>
                                        </div>
                                    </div>
                                </li>
                                <li  class = "menu_bottom_item">
                                    <a href=""> Messages</a>
                                </li>
                                <li  class = "menu_bottom_item">
                                    <div class="dropdown_list">
                                        <a href="#" class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            My Account
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                            <a class="dropdown-item" href="#">Account</a>
                                            <a class="dropdown-item" href="#">Account</a>
                                            <a class="dropdown-item" href="#">Account</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        <div class="bell-logo">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                     width="20" height="20"
                                     viewBox="0 0 172 172"
                                     style=" fill:#000000;">
                                    <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="10" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                        <path d="M0,172v-172h172v172z" fill="none" stroke="none"></path>
                                        <g id="original-icon" fill="#000000" stroke="none" opacity="0" visibility="hidden">
                                            <path d="M86,0c-7.56531,0 -13.76,6.19469 -13.76,13.76c0,1.77375 0.34938,3.49375 0.9675,5.0525c-19.35,5.02563 -31.9275,21.83594 -31.9275,43.1075c0,26.94219 -6.61125,39.21063 -12.9,46.1175c-3.14437,3.45344 -6.24844,5.54969 -8.9225,7.525c-1.34375,0.98094 -2.56656,1.96188 -3.655,3.225c-1.08844,1.26313 -2.0425,3.06375 -2.0425,5.0525c0,4.73 2.9025,8.74781 6.9875,11.395c4.085,2.64719 9.44656,4.35375 15.91,5.6975c8.385,1.73344 18.73188,2.64719 30.1,3.1175c-0.86,2.28438 -1.3975,4.74344 -1.3975,7.31c0,11.35469 9.28531,20.64 20.64,20.64c11.35469,0 20.64,-9.28531 20.64,-20.64c0,-2.58 -0.52406,-5.03906 -1.3975,-7.31c11.36813,-0.47031 21.715,-1.38406 30.1,-3.1175c6.46344,-1.34375 11.825,-3.05031 15.91,-5.6975c4.085,-2.64719 6.9875,-6.665 6.9875,-11.395c0,-1.98875 -0.95406,-3.78937 -2.0425,-5.0525c-1.08844,-1.26312 -2.31125,-2.24406 -3.655,-3.225c-2.67406,-1.97531 -5.77812,-4.07156 -8.9225,-7.525c-6.28875,-6.90687 -12.9,-19.17531 -12.9,-46.1175c0,-21.25812 -12.60437,-38.055 -31.9275,-43.1075c0.61813,-1.55875 0.9675,-3.27875 0.9675,-5.0525c0,-7.56531 -6.19469,-13.76 -13.76,-13.76zM86,6.88c3.84313,0 6.88,3.03688 6.88,6.88c0,3.84313 -3.03687,6.88 -6.88,6.88c-3.84312,0 -6.88,-3.03687 -6.88,-6.88c0,-3.84312 3.03688,-6.88 6.88,-6.88zM94.0625,24.725c18.34219,3.26531 29.7775,17.44188 29.7775,37.195c0,28.09781 7.14875,42.52969 14.62,50.74c3.73563,4.09844 7.51156,6.665 9.9975,8.4925c1.23625,0.91375 2.16344,1.67969 2.58,2.15c0.41656,0.47031 0.3225,0.43 0.3225,0.5375c0,2.15 -0.99437,3.72219 -3.87,5.59c-2.87562,1.86781 -7.55187,3.60125 -13.545,4.8375c-11.98625,2.48594 -29.05187,3.3325 -47.945,3.3325c-18.89312,0 -35.95875,-0.84656 -47.945,-3.3325c-5.99312,-1.23625 -10.66937,-2.96969 -13.545,-4.8375c-2.87562,-1.86781 -3.87,-3.44 -3.87,-5.59c0,-0.1075 -0.09406,-0.06719 0.3225,-0.5375c0.41656,-0.47031 1.34375,-1.23625 2.58,-2.15c2.48594,-1.8275 6.26188,-4.39406 9.9975,-8.4925c7.47125,-8.21031 14.62,-22.64219 14.62,-50.74c0,-19.73969 11.44875,-33.80875 29.7775,-37.0875c2.28438,1.67969 5.03906,2.6875 8.0625,2.6875c3.05031,0 5.77813,-1.08844 8.0625,-2.795zM74.175,144.265c3.85656,0.08063 7.78031,0.215 11.825,0.215c4.04469,0 7.96844,-0.13437 11.825,-0.215c1.22281,2.06938 1.935,4.515 1.935,7.095c0,7.64594 -6.11406,13.76 -13.76,13.76c-7.64594,0 -13.76,-6.11406 -13.76,-13.76c0,-2.60687 0.68531,-5.02562 1.935,-7.095z"></path>
                                        </g>
                                        <g id="subtracted-icon" fill="#000000" stroke="none">
                                            <path d="M130.72,61.92c0,26.94219 6.61125,39.21063 12.9,46.1175c3.14438,3.45344 6.24844,5.54969 8.9225,7.525c1.34375,0.98094 2.56656,1.96188 3.655,3.225c1.08844,1.26313 2.0425,3.06375 2.0425,5.0525c0,4.73 -2.9025,8.74781 -6.9875,11.395c-4.085,2.64719 -9.44656,4.35375 -15.91,5.6975c-8.385,1.73344 -18.73187,2.64719 -30.1,3.1175c0.87344,2.27094 1.3975,4.73 1.3975,7.31c0,11.35469 -9.28531,20.64 -20.64,20.64c-11.35469,0 -20.64,-9.28531 -20.64,-20.64c0,-2.56656 0.5375,-5.02562 1.3975,-7.31c-11.36812,-0.47031 -21.715,-1.38406 -30.1,-3.1175c-6.46344,-1.34375 -11.825,-3.05031 -15.91,-5.6975c-4.085,-2.64719 -6.9875,-6.665 -6.9875,-11.395c0,-1.98875 0.95406,-3.78937 2.0425,-5.0525c1.08844,-1.26312 2.31125,-2.24406 3.655,-3.225c2.67406,-1.97531 5.77813,-4.07156 8.9225,-7.525c6.28875,-6.90687 12.9,-19.17531 12.9,-46.1175c0,-18.77431 9.79768,-34.07337 25.40192,-40.86208c0.3121,2.33637 0.82159,4.61256 1.511,6.81111c-12.55067,5.84104 -20.03292,18.09301 -20.03292,34.05097c0,28.09781 -7.14875,42.52969 -14.62,50.74c-3.73562,4.09844 -7.51156,6.665 -9.9975,8.4925c-1.23625,0.91375 -2.16344,1.67969 -2.58,2.15c-0.41656,0.47031 -0.3225,0.43 -0.3225,0.5375c0,2.15 0.99438,3.72219 3.87,5.59c2.87563,1.86781 7.55188,3.60125 13.545,4.8375c11.98625,2.48594 29.05188,3.3325 47.945,3.3325c18.89313,0 35.95875,-0.84656 47.945,-3.3325c5.99313,-1.23625 10.66938,-2.96969 13.545,-4.8375c2.87563,-1.86781 3.87,-3.44 3.87,-5.59c0,-0.1075 0.09406,-0.06719 -0.3225,-0.5375c-0.41656,-0.47031 -1.34375,-1.23625 -2.58,-2.15c-2.48594,-1.8275 -6.26187,-4.39406 -9.9975,-8.4925c-7.47125,-8.21031 -14.62,-22.64219 -14.62,-50.74c0,-2.81855 -0.23282,-5.52357 -0.68532,-8.09955c2.19926,-0.90204 4.30501,-1.989 6.29764,-3.24126c0.83254,3.59511 1.26768,7.39095 1.26768,11.3408zM72.24,151.36c0,7.64594 6.11406,13.76 13.76,13.76c7.64594,0 13.76,-6.11406 13.76,-13.76c0,-2.58 -0.71219,-5.02562 -1.935,-7.095c-3.85656,0.08063 -7.78031,0.215 -11.825,0.215c-4.04469,0 -7.96844,-0.13437 -11.825,-0.215c-1.24969,2.06938 -1.935,4.48813 -1.935,7.095z"></path>
                                        </g>
                                        <g stroke="none">
                                            <g id="Layer_9" fill="#f51414">
                                                <path d="M107.6,-18.8c-18.92,0 -34.4,15.48 -34.4,34.4c0,18.92 15.48,34.4 34.4,34.4c18.92,0 34.4,-15.48 34.4,-34.4c0,-18.92 -15.48,-34.4 -34.4,-34.4zM114.824,27.296c-1.72,1.376 -4.472,2.064 -7.568,2.064c-1.72,0 -3.44,-0.344 -5.16,-1.032c-1.72,-0.688 -2.752,-1.72 -3.784,-2.752c-0.688,-1.032 -1.032,-2.408 -1.032,-4.128h6.536c0,0.688 0.344,1.376 1.032,2.064c0.688,0.688 1.72,1.032 2.752,1.032c1.032,0 2.064,-0.344 2.752,-1.032c0.688,-0.688 1.032,-1.376 1.032,-2.408c0,-1.376 -0.344,-2.408 -1.032,-2.752c-0.688,-0.688 -1.72,-0.688 -3.096,-0.688h-3.096v-4.472v0h3.096c2.408,0 3.784,-1.032 3.784,-3.44c0,-1.032 -0.344,-1.72 -1.032,-2.064c-0.688,-0.688 -1.376,-0.688 -2.408,-0.688c-1.032,0 -1.72,0.344 -2.408,0.688c-0.688,0 -1.032,0.688 -1.032,1.376h-6.536c0,-1.376 0.344,-2.752 1.376,-3.784c0.688,-1.032 2.064,-2.064 3.44,-2.752c1.376,-0.688 3.096,-0.688 4.816,-0.688c3.096,0 5.504,0.688 7.568,2.064c1.72,1.376 2.752,3.096 2.752,5.504c0,1.032 -0.344,2.408 -1.032,3.096c-0.688,1.032 -1.72,1.72 -3.096,2.408c1.376,0.344 2.752,1.376 3.44,2.408c0.688,1.032 1.032,2.752 1.032,4.128c0,2.408 -1.032,4.472 -3.096,5.848z"></path>
                                            </g>
                                            <g fill="#000000" opacity="0">
                                                <g id="IOS" font-family="-apple-system, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, &quot;Segoe UI&quot;, &quot;Fira Sans&quot;, Roboto, Oxygen, Ubuntu, &quot;Droid Sans&quot;, Arial, sans-serif" font-weight="400" font-size="16" text-anchor="start" visibility="hidden"></g>
                                                <g id="IOS_copy">
                                                    <path d="M107.6,-25.68c-22.704,0 -41.28,18.576 -41.28,41.28c0,22.704 18.576,41.28 41.28,41.28c22.704,0 41.28,-18.576 41.28,-41.28c0,-22.704 -18.576,-41.28 -41.28,-41.28z"></path>
                                                </g>
                                            </g>
                                        </g>
                                        <path d="M73.2,50v-68.8h68.8v68.8z" id="overlay-drag" fill="#ff0000" stroke="none" opacity="0"></path>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>

                </nav>
            </header>

            <main class="main">
                <aside class="left-side-bar" >
                    <div class="cards">
                        <div class="profile-pic">
                            <img src="{{ url('img/100_3.jpg') }}" alt="" class="rounded-circle">
                            <h6>Ashok Kumar</h6>
                            <h6> Software Developer </h6>
                            <a href="#">
                                +Update Your Status
                            </a>
                        </div>
                        <ul>
                            <li>
                                <div class="profile_complete d-flex">
                                    <div class="profile-status">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 58 58" style="enable-background:new 0 0 58 58;" xml:space="preserve" width="50px" height="50px" class="">
                                        <g>
                                            <g>
                                                <path style="fill:#9191F0" d="M45,29c0,8.837-7.163,16-16,16v13c16.016,0,29-12.984,29-29S45.016,0,29,0v13   C37.837,13,45,20.163,45,29z" data-original="#F0C419" class="active-path" data-old_color="#F0C419"/>
                                                <path style="fill:#E2F4FE" d="M29,58c8.008,0,15.258-3.246,20.506-8.494c-4.542-4.542-5.29-5.29-9.192-9.192   C37.418,43.209,33.418,45,29,45s-8.418-1.791-11.314-4.686l-9.192,9.192C13.742,54.754,20.992,58,29,58z" data-original="#E57E25" class="" data-old_color="#E57E25"/>
                                                <g>
                                                    <path style="fill:#E2F4FE" d="M13,29c0-8.837,7.163-16,16-16V0C12.984,0,0,12.984,0,29c0,8.008,3.246,15.258,8.494,20.506    l9.192-9.192C14.791,37.418,13,33.418,13,29z" data-original="#26B99A" class="" data-old_color="#26B99A"/>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                    </div>
                                    <div style="padding-left: 20px">
                                        <h6>35% Profile Completed</h6>
                                        <a href="#"><h6>Add The Missing Details</h6></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="cards_text">
                                    <a href="#" style=" padding-right:40% ">
                                        <span >Who View Your Profile</span>
                                    </a>
                                    <span>15</span>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex justify-content-between" style="padding: 20px" >
                                    <div class="follower">
                                        <h5>12</h5>
                                        <p>Followers</p>
                                    </div>
                                    <div class="follower">
                                        <h5>5</h5>
                                        <p>Following</p>
                                    </div>
                                </div>
                            </li>
                        </ul>



                    </div>

                    <div class="cards">
                        <div class="cards_text">
                            <h5>Job Overview</h5>
                        </div>
                        <ul>
                            <li>
                                <div>
                                    <div class="d-flex justify-content-between" style="padding: 30px; border: 0">
                                        <div class="follower">
                                            <h5>0</h5>
                                            <p>Applied Job</p>
                                        </div>
                                        <div class="follower">
                                            <h5>0</h5>
                                            <p>Shortlisted</p>
                                        </div>
                                    </div>
                                    <p style="padding: 5px">You have not applied to any jobs yet <a href=""><strong>Start Applying now!</strong></a></p>
                                </div>
                            </li>
                        </ul>


                    </div>
                </aside>

                <div class="main-content">
                    <div class="cards d-flex justify-content-around">
                        <div  class="main-content-card1"><h6>Job Title, Skills</h6></div>
                        <div class="main-content-card1" style="border-left: 1px solid #DDDDDD;"> <h6>Location(City, State, Country)</h6></div>
                        <div class="main-content-card1">
                            <a  href="#">
                                <button>Find Jobs</button>
                            </a>
                        </div>
                    </div>
                    <div  class="cards">
                        <div class="rec-job">
                            <h5>(50) Recommended Jobs</h5>
                        </div>

                        <ul>
                            <li >
                                <div class="rec-job-items">
                                    <h6>Human Resource (HR) Executive</h6>
                                    <small>Gratitude india</small>
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex justify-content-between rec-job-icon">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                     width="12" height="12"
                                                     viewBox="0 0 172 172"
                                                     style=" fill:#000000;">
                                                    <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                                        <path d="M0,172v-172h172v172z" fill="none"></path>
                                                        <g fill="#cccccc">
                                                            <path d="M86,6.88c-8.50594,0 -16.11156,2.51281 -21.715,6.7725c-4.66281,3.53406 -7.94156,8.37156 -8.9225,13.8675h-45.0425c-5.65719,0 -10.32,4.66281 -10.32,10.32v57.835c-0.02687,0.215 -0.02687,0.43 0,0.645v58.48c0,5.65719 4.66281,10.32 10.32,10.32h151.36c5.65719,0 10.32,-4.66281 10.32,-10.32v-58.8025c0,-0.1075 0,-0.215 0,-0.3225v-57.835c0,-5.65719 -4.66281,-10.32 -10.32,-10.32h-45.0425c-0.98094,-5.49594 -4.25969,-10.33344 -8.9225,-13.8675c-5.60344,-4.25969 -13.20906,-6.7725 -21.715,-6.7725zM86,13.76c7.16219,0 13.28969,2.16344 17.5225,5.375c3.14438,2.39188 5.25406,5.21375 6.1275,8.385h-47.3c0.87344,-3.17125 2.98313,-5.99312 6.1275,-8.385c4.23281,-3.21156 10.36031,-5.375 17.5225,-5.375zM10.32,34.4h151.36c1.94844,0 3.44,1.49156 3.44,3.44v57.835c-0.01344,0.14781 -0.01344,0.28219 0,0.43v0.215c0,1.94844 -1.49156,3.44 -3.44,3.44h-58.48c0,-5.65719 -4.66281,-10.32 -10.32,-10.32h-13.76c-5.65719,0 -10.32,4.66281 -10.32,10.32h-58.48c-1.94844,0 -3.44,-1.49156 -3.44,-3.44c0.02688,-0.215 0.02688,-0.43 0,-0.645v-57.835c0,-1.94844 1.49156,-3.44 3.44,-3.44zM79.12,96.32h13.76c1.94844,0 3.44,1.49156 3.44,3.44v2.795c0,0.1075 0,0.215 0,0.3225v0.3225c-0.02687,0.25531 -0.02687,0.49719 0,0.7525v2.6875c0,1.94844 -1.49156,3.44 -3.44,3.44h-13.76c-1.94844,0 -3.44,-1.49156 -3.44,-3.44v-2.795c0.09406,-0.45687 0.09406,-0.94062 0,-1.3975v-2.6875c0,-1.94844 1.49156,-3.44 3.44,-3.44zM6.88,105.995c1.08844,0.38969 2.23063,0.645 3.44,0.645h58.48c0,5.65719 4.66281,10.32 10.32,10.32h13.76c5.65719,0 10.32,-4.66281 10.32,-10.32h58.48c1.20938,0 2.35156,-0.25531 3.44,-0.645v48.805c0,1.94844 -1.49156,3.44 -3.44,3.44h-151.36c-1.94844,0 -3.44,-1.49156 -3.44,-3.44z"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </span>
                                            <small>0-10Years</small>
                                        </div>
                                        <div class="d-flex justify-content-between rec-job-icon">
                                           <span>
                                                <img src="https://img.icons8.com/carbon-copy/15/000000/place-marker.png"/>
                                            </span>
                                           <small> Mumbai, Maharashtra</small>
                                        </div>
                                        <div class="d-flex justify-content-between rec-job-icon">
                                            <span>
                                                <img src="https://img.icons8.com/carbon-copy/15/000000/open-envelope.png"/>
                                            </span>
                                            <small>Rs 2 - 6 Lacs p.a</small>
                                        </div>
                                    </div>

                                    <p class="rec-job-desc"><strong>Job Description:</strong> GREETINGS! New Year offers wid better package & incentives...</p>
                                    <div  class="d-flex justify-content-between">
                                        <p class="rec-job-desc"> <strong>Key Skills:</strong> BPO / ITES  </p>
                                        <p class="rec-job-desc">Posted 2 days ago </p>
                                    </div>
                                </div>
                            </li>
                            <li >
                                <div class="rec-job-items">
                                    <h6>Business Analyst</h6>
                                    <small>Gratitude india</small>
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex justify-content-between  rec-job-icon">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                     width="12" height="12"
                                                     viewBox="0 0 172 172"
                                                     style=" fill:#000000;">
                                                    <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="10" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                                        <path d="M0,172v-172h172v172z" fill="none"></path>
                                                        <g fill="#cccccc">
                                                            <path d="M86,6.88c-8.50594,0 -16.11156,2.51281 -21.715,6.7725c-4.66281,3.53406 -7.94156,8.37156 -8.9225,13.8675h-45.0425c-5.65719,0 -10.32,4.66281 -10.32,10.32v57.835c-0.02687,0.215 -0.02687,0.43 0,0.645v58.48c0,5.65719 4.66281,10.32 10.32,10.32h151.36c5.65719,0 10.32,-4.66281 10.32,-10.32v-58.8025c0,-0.1075 0,-0.215 0,-0.3225v-57.835c0,-5.65719 -4.66281,-10.32 -10.32,-10.32h-45.0425c-0.98094,-5.49594 -4.25969,-10.33344 -8.9225,-13.8675c-5.60344,-4.25969 -13.20906,-6.7725 -21.715,-6.7725zM86,13.76c7.16219,0 13.28969,2.16344 17.5225,5.375c3.14438,2.39188 5.25406,5.21375 6.1275,8.385h-47.3c0.87344,-3.17125 2.98313,-5.99312 6.1275,-8.385c4.23281,-3.21156 10.36031,-5.375 17.5225,-5.375zM10.32,34.4h151.36c1.94844,0 3.44,1.49156 3.44,3.44v57.835c-0.01344,0.14781 -0.01344,0.28219 0,0.43v0.215c0,1.94844 -1.49156,3.44 -3.44,3.44h-58.48c0,-5.65719 -4.66281,-10.32 -10.32,-10.32h-13.76c-5.65719,0 -10.32,4.66281 -10.32,10.32h-58.48c-1.94844,0 -3.44,-1.49156 -3.44,-3.44c0.02688,-0.215 0.02688,-0.43 0,-0.645v-57.835c0,-1.94844 1.49156,-3.44 3.44,-3.44zM79.12,96.32h13.76c1.94844,0 3.44,1.49156 3.44,3.44v2.795c0,0.1075 0,0.215 0,0.3225v0.3225c-0.02687,0.25531 -0.02687,0.49719 0,0.7525v2.6875c0,1.94844 -1.49156,3.44 -3.44,3.44h-13.76c-1.94844,0 -3.44,-1.49156 -3.44,-3.44v-2.795c0.09406,-0.45687 0.09406,-0.94062 0,-1.3975v-2.6875c0,-1.94844 1.49156,-3.44 3.44,-3.44zM6.88,105.995c1.08844,0.38969 2.23063,0.645 3.44,0.645h58.48c0,5.65719 4.66281,10.32 10.32,10.32h13.76c5.65719,0 10.32,-4.66281 10.32,-10.32h58.48c1.20938,0 2.35156,-0.25531 3.44,-0.645v48.805c0,1.94844 -1.49156,3.44 -3.44,3.44h-151.36c-1.94844,0 -3.44,-1.49156 -3.44,-3.44z"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </span>
                                            <small>0-10Years</small>
                                        </div>
                                        <div class="d-flex justify-content-between rec-job-icon">
                                           <span>
                                                <img src="https://img.icons8.com/carbon-copy/15/000000/place-marker.png"/>
                                            </span>
                                            <small> Mumbai, Maharashtra</small>
                                        </div>
                                        <div class="d-flex justify-content-between rec-job-icon">
                                            <span>
                                                <img src="https://img.icons8.com/carbon-copy/15/000000/open-envelope.png"/>
                                            </span>
                                            <small>Rs 2 - 6 Lacs p.a</small>
                                        </div>
                                    </div>
                                    <p class="rec-job-desc"><strong>Job Description:</strong> GREETINGS! New Year offers wid better package & incentives...</p>
                                    <div class="d-flex justify-content-between">
                                        <p class="rec-job-desc"> <strong>Key Skills:</strong> BPO / ITES  </p>
                                        <p class="rec-job-desc">Posted 2 days ago </p>
                                    </div>
                                    <div class="btn-rec-job">
                                        <a href="#">
                                            <button>View all Recommended Jobs</button>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="cards">
                        <div class="rec-job">
                            <h5>Recruiters that matches with your function</h5>
                        </div>
                        <ul>
                            <li>
                                <div class="recruiter-card">
                                    <div class="d-flex">
                                        <div class="recruiter-item">
                                            <img src="{{ url('img/100_3.jpg') }}" alt="" class="rounded-circle" >
                                        </div>
                                        <div class="recruiter-item">
                                            <h6>John Doe</h6>
                                            <p>HR Consultant at Gratitude India</p>
                                            <p>Mumbai, Maharashtra</p>
                                            <div>
                                                <a href="#"> <span>Send Message</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="recruiter-item-btn">
                                        <a href="">
                                            <button>Follow</button>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="recruiter-card">
                                    <div class="d-flex">
                                        <div class="recruiter-item">
                                            <img src="{{ url('img/100_3.jpg') }}" alt="" class="rounded-circle" >
                                        </div>
                                        <div class="recruiter-item">
                                            <h6>John Doe</h6>
                                            <p>HR Consultant at Gratitude India</p>
                                            <p>Mumbai, Maharashtra</p>
                                            <div>
                                                <a href="#"> <span>Send Message</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="recruiter-item-btn">
                                        <a href="">
                                            <button>Follow</button>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="recruiter-card">
                                    <div class="d-flex">
                                        <div class="recruiter-item">
                                            <img src="{{ url('img/100_3.jpg') }}" alt="" class="rounded-circle" >
                                        </div>
                                        <div class="recruiter-item">
                                            <h6>John Doe</h6>
                                            <p>HR Consultant at Gratitude India</p>
                                            <p>Mumbai, Maharashtra</p>
                                            <div>
                                                <a href="#"> <span>Send Message</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="recruiter-item-btn">
                                        <a href="">
                                            <button>Follow</button>
                                        </a>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <!-- pagination elements -->
                                <div class="pagination_section recruiter-item">

                                    <a href="#"> Previous</a>
                                    <a href="#" title="Algorithm">1</a>
                                    <a href="#" title="DataStructure">2</a>
                                    <a href="#" title="Languages">3</a>
                                    <a href="#">Next </a>
                                    <a href="#"> <span>View all Recruiters</span></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <aside class="right-side-bar">
                    <div class="online-user cards">
                        <h5>(0) Online Users</h5>
                        <a href="#">Click Here To Check</a>
                    </div>
                    <div class="premium">
                        <p>Increase 10x chances to get hired.</p>
                        <a href="#">
                            <h5><span>Go Premium!</span></h5>
                        </a>
                    </div>
                    <div class="image">
                        <img src="{{ url('img/camera-man1.jpg') }}">
                    </div>
                </aside>
            </main>
        </div>

        <script src=" {{ url('https://code.jquery.com/jquery-3.3.1.slim.min.js') }} " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src=" {{ url('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js') }} " integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
    </body>
</html>
