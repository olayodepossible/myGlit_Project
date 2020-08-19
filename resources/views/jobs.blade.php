<html>
<head>
    <meta charset="UTF-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <link href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ url('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js')}}" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <title>
        Jobs Board
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
        #jobs_board .main-body{
            margin:20px;
        }

        #jobs_board .form-wrapper {
            margin-bottom: 20px;
        }
        #jobs_board .form-recruit-search{
            margin: 5px 0 5px 0;
        }

        #jobs_board .form-recruit-search .form-group {
            margin-bottom: 0 !important;
        }

        #jobs_board .form-recruit-search,  .form-control:focus {
            border: 0 !important;
            outline: 0 !important;
            box-shadow: none;
        }

        #jobs_board .form-recruit-search input {
            padding: 10px 1px;
            width: 100%;
            border: 0 !important;
            font-size: 12px;
            text-align: center;
            border: transparent;
            border-right: 1px solid #ccc;
            outline: 0;
        }
        #jobs_board .form-recruit-search select {
            margin-bottom: 10px;
            border: 0 !important;
        }

        #jobs_board .main-content-card1 button{
            width: 100%;
            padding: 12px 10px;
            line-height: 12px;
            font-size: 14px;
        }

        /*#jobs_board .form-card .sideBar_menu_item{
            margin-top: 10px;
        }*/

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

        #jobs_board .rec-job-items small{
            font-size: 9px;
        }
        #jobs_board .job-title a{
            background-color: #ECF3FF;
            color: #2979FF;
            border-radius: 15px;
            padding: 2px 4px;
            font-size: 5px;
        }
        #jobs_board .job-title span{
            padding-bottom: 5px;
        }


        #jobs_board .job-title, .icons, .job_desc, .job_desc div, .job_desc h6, .recruiter span, .recruiter h6{
            margin-bottom: 5px;
            font-size: 10px;
        }
        #jobs_board .recruiter span{
            padding-left: 5px;
        }
        #jobs_board .recruiter-item-btn{
            padding: 20px 20px 0 67px;
        }
        #jobs_board .recruiter-item-btn button , .main-content-card1 button{
            width: 100px;
            padding: 5px;
            color: #fff;
            background-color: #E33D47;
            border: 0;
            border-radius: 5px;
        }

        #jobs_board .recruiter img{
            width: 25px;
        }

        #jobs_board .job-title{
            display: flex;
            justify-content: space-between;
        }

        #jobs_board .advert img {
            width: 100%;
            margin-bottom: 10px;
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

            #jobs_board .form-wrapper {
                background-color: #fff;
                margin-bottom: 30px;
                border-radius: 5px;
            }
            #jobs_board .form-card{
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 5px;
            }
            #jobs_board .form-card1{
                width: 25%;
            }
            #jobs_board .form-recruit-search input{
                padding: 0 40px;
                text-align: left;
                border-right: 1px solid #ccc !important;
            }
            #jobs_board .location{
                border-right: 1px solid #ccc !important;
                border-left: 1px solid #ccc !important;
            }

            #jobs_board .main-content-card1 h6{
                font-size: 14px;
                line-height: 21px;
                padding: 13px 30px 0 10px;
            }
            #jobs_board .main-content-card1 button{
                width: 120px;
                padding: 10px;
                font-weight: 600;
                font-size: 14px;
                margin: 10px 0 0 20px;

            }

            #jobs_board .job-title a{
                padding: 3px 10px;
                font-size: 10px;
                margin-right: 10px;
            }
            #jobs_board  .job_desc p{
                padding: 8px 0 0 10px;
            }

            #jobs_board .recruiter{
                display: flex;
                justify-content: space-between;
                align-items: baseline;
            }
/*            #jobs_board .recruiter img{
                width: 30px;
            }*/
            #jobs_board .recruiter-item-btn button {
                font-weight: 600;
                font-size: 14px;
                line-height: 21px;
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
                width: 25px;
                height: 25px;
            }
            #jobs_board .bottom_nav-logo .svg_menu1{
                display: none;

           }


            #jobs_board .left-sideBar {
                position: static;
                width: 200px;
                height: 100vh;
                padding: 30px 0 0 20px;
            }
            #jobs_board main{
                margin: 15px 20px 20px 5px;
            }


            #jobs_board .main-wrapper {
                 width: 100vw;
                 height: 100vh;
                margin-top: 110px;
            }

            #jobs_board .form-recruit-search{
                border-radius: 5px;
                background-color: #fff;
            }
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

            #jobs_board .form-wrapper {
                background-color: #fff;
                margin-bottom: 30px;
            }

            #jobs_board .form-recruit-search input{
                padding: 0 40px;
                text-align: left;
                border-right: 1px solid #ccc !important;
            }
            #jobs_board .main-content-card1 h6{
                font-size: 14px;
                line-height: 21px;
                padding: 13px 30px 0 10px;
            }
            #jobs_board .main-content-card1 button{
                width: 125px;
                margin: 10px 0 0 200px;
                padding: 5px;
                font-weight: 600;
                font-size: 14px;
                line-height: 24px;
            }
            #jobs_board .rec-job-items h6 {
                font-size: 14px;
                line-height: 24px;

            }

            #jobs_board .job-title a{
                padding: 5px 20px;
                font-size: 13px;
                margin-right: 10px;
            }
            #jobs_board  .job_desc p{
                padding: 8px 0 0 10px;
            }

            #jobs_board .rec-job-items small, .rec-job-items span, .rec-job-items p {
                font-size: 13px;
                line-height: 19px;
            }
            #jobs_board .rec-job-desc{
                margin: 5px 0;
            }

            #jobs_board .rec-job-items{
                font-size: 10px;
                line-height: 22px;
                margin-bottom: 20px;
            }
            #jobs_board .rec-job-icon{
                margin-right: 50px;
            }
            #jobs_board .rec-job-icon svg, .rec-job-icon img{
                width: 20px;
                height: 20px;
            }

            #jobs_board .rec-job-icon small{
                font-size: 13px;
                line-height: 19px;
            }

            #jobs_board .rec-job-icon span{
                padding-top: 0;
                padding-right: 9px;
            }

            #jobs_board .recruiter{
                display: flex;
                justify-content: space-between;
                align-items: baseline;
            }
            /*#jobs_board .recruiter img{
                width: 30px;
            }*/
            #jobs_board .recruiter-item-btn button {
                font-weight: 600;
                font-size: 14px;
                line-height: 21px;
            }

        }

    </style>
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
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" width="20px" height="20px">
                        <path d="M0 0h24v24H0z" fill="none"/>
                        <path d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.9 2 2 2zm6-6v-5c0-3.07-1.63-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.64 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2zm-2 1H8v-6c0-2.48 1.51-4.5 4-4.5s4 2.02 4 4.5v6z"/>
                    </svg>
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
            <div class="main-body">
                <section class="form-wrapper">
                    <div class="form-inline-wrapper-o">
                        <form class="form-recruit-search">
                            <div class="row">
                                <div class="form-group col-md-3 col-sm-12 col-lg-3 col-xl-3 mt-2">
                                    <input type="text" id="job_title"  class="form-control" placeholder="Name" />
                                </div>
                                <div class="form-group col-md-3 col-sm-12 col-lg-3 col-xl-3 mt-2">
                                    <input
                                        type="text"
                                        id="location"
                                        class="form-control"
                                        placeholder="Location (city, state, Country)"
                                    />
                                </div>
                                <div class="form-group col-md-3 col-sm-12 col-lg-3 col-xl-3 mt-2">
                                    <select name="" class="form-control" id="">
                                        <option>Function</option>
                                        <option >Function</option>
                                        <option >Function</option>
                                    </select>
                                </div>
                                <div class="col-md-3 col-sm-12 col-lg-3 col-xl-3 main-content-card1  ">

                                    <button type="submit" class=""> Find Recruiter </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
                {{--<div class="form-wrapper">
                    <div class=" form-card ">
                        <div class=" form-card1">
                            <input
                                type="text"
                                name="job_title"
                                placeholder="Job Title, Skills"
                            />
                        </div>
                        <div class=" form-card1">
                            <input
                                type="text"
                                name="location"
                                class="location"
                                placeholder="Location(City, State, Country)"
                            />
                        </div>

                            <div  class = "menu_bottom_item" style="border: 0">
                                <div class="dropdown_list">
                                    <a href="#" class=" dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Function
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <a class="dropdown-item" href="#">Function</a>
                                        <a class="dropdown-item" href="#">Function</a>
                                        <a class="dropdown-item" href="#">Function</a>
                                    </div>
                                </div>
                            </div>
                        <div class="main-content-card1">
                            <a  href="#">
                                <button>Find Jobs</button>
                            </a>
                        </div>
                    </div>
                </div>--}}

                <div  class="cards">

                    <div class="rec-job-items">
                        <div class="job-title">
                            <div>
                                <h6 style="color: #333">Frontend Developer</h6>
                                <small>Gratitude India</small>
                            </div>
                            <div>
                                <a href="#">
                                    <span>
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </span>
                                    <span>34061</span>
                                    <span>Views</span>
                                </a>
                                <a href="#">
                                    <span>Posted 2 days ago</span>
                                </a>
                            </div>
                        </div>

                        <div class="d-flex icons">
                            <div class="d-flex justify-content-between rec-job-icon">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                             width="12" height="12"
                                             viewBox="0 0 172 172"
                                             style=" fill:#000000;">
                                            <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="0" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
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
                                        <img src="https://img.icons8.com/carbon-copy/15/000000/place-marker.png" alt=""/>
                                    </span>
                                <small> Mumbai, Maharashtra</small>
                            </div>
                            <div class="d-flex justify-content-between rec-job-icon">
                                    <span>
                                        <img src="https://img.icons8.com/carbon-copy/15/000000/open-envelope.png" alt=""/>
                                    </span>
                                <small>Rs 2 - 6 Lacs p.a</small>
                            </div>
                        </div>

                        <div class="job_desc">
                            <h6 class="rec-job-desc"><strong>Job Description:</strong>
                                <span> Experience in CSS3 and creating wireframes and mockupsExperience in designing for vario...</span>
                            </h6>
                            <div class="d-flex">
                                <h6 class="rec-job-desc"> <strong>Key Skills:</strong>
                                    <span>CSS3 . Jquery . HTML5 . Javascript . PHP . Laravel </span>
                                </h6>

                            </div>
                        </div>

                        <div class="recruiter">
                            <div>
                                <h6 class="rec-job-desc">Posted By:</h6>
                                <img src="/img/userPic.png"  class="rounded-circle">
                                <span>
                                    <strong>Ritu Suruchi  </strong> <span>|</span>
                                    <span>115 Followers</span>
                                </span>
                            </div>
                            <div class="recruiter-item-btn">
                                <a href = "#">
                                    <button>Quick Apply</button>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
                <div  class="cards">

                    <div class="rec-job-items">
                        <div class="job-title">
                            <div>
                                <h6>Frontend Developer</h6>
                                <small>Gratitude India</small>
                            </div>
                            <div>
                                <a href="#">
                                    <span>
                                        <i class="fa fa-eye" aria-hidden="true">
                                    </i>
                                    </span>
                                    <span>34061</span>
                                    <span>Views</span>
                                </a>
                                <a href="#">
                                    <span>Posted 2 days ago</span>
                                </a>
                            </div>
                        </div>

                        <div class="d-flex icons">
                            <div class="d-flex justify-content-between rec-job-icon">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                             width="12" height="12"
                                             viewBox="0 0 172 172"
                                             style=" fill:#000000;">
                                            <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="0" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
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
                                        <img src="https://img.icons8.com/carbon-copy/15/000000/place-marker.png" alt=""/>
                                    </span>
                                <small> Mumbai, Maharashtra</small>
                            </div>
                            <div class="d-flex justify-content-between rec-job-icon">
                                    <span>
                                        <img src="https://img.icons8.com/carbon-copy/15/000000/open-envelope.png" alt=""/>
                                    </span>
                                <small>Rs 2 - 6 Lacs p.a</small>
                            </div>
                        </div>

                        <div class="job_desc">
                            <h6 class="rec-job-desc"><strong>Job Description:</strong>
                                <span> Experience in CSS3 and creating wireframes and mockupsExperience in designing for vario...</span>
                            </h6>
                            <div class="d-flex">
                                <h6 class="rec-job-desc"> <strong>Key Skills:</strong>
                                    <span>CSS3 . Jquery . HTML5 . Javascript . PHP . Laravel </span>
                                </h6>

                            </div>
                        </div>

                        <div class="recruiter">
                            <div>
                                <h6 class="rec-job-desc">Posted By:</h6>
                                <img src="/img/userPic.png"  class="rounded-circle">
                                <span>
                                    <strong>Ritu Suruchi  </strong> <span>|</span>
                                    <span>115 Followers</span>
                                </span>
                            </div>
                            <div class="recruiter-item-btn">
                                <a href = "#" >
                                    <button>Quick Apply</button>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class=" advert">
                    <img src="/img/ads.png"/>
                </div>

                <div  class="cards">

                    <div class="rec-job-items">
                        <div class="job-title">
                            <div>
                                <h6>Frontend Developer</h6>
                                <small>Gratitude India</small>
                            </div>
                            <div>
                                <a href="#">
                                    <span>
                                        <i class="fa fa-eye" aria-hidden="true">
                                    </i>
                                    </span>
                                    <span>34061</span>
                                    <span>Views</span>
                                </a>
                                <a href="#">
                                    <span>Posted 2 days ago</span>
                                </a>
                            </div>
                        </div>

                        <div class="d-flex icons">
                            <div class="d-flex justify-content-between rec-job-icon">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                             width="12" height="12"
                                             viewBox="0 0 172 172"
                                             style=" fill:#000000;">
                                            <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="0" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
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
                                        <img src="https://img.icons8.com/carbon-copy/15/000000/place-marker.png" alt=""/>
                                    </span>
                                <small> Mumbai, Maharashtra</small>
                            </div>
                            <div class="d-flex justify-content-between rec-job-icon">
                                    <span>
                                        <img src="https://img.icons8.com/carbon-copy/15/000000/open-envelope.png" alt=""/>
                                    </span>
                                <small>Rs 2 - 6 Lacs p.a</small>
                            </div>
                        </div>

                        <div class="job_desc">
                            <h6 class="rec-job-desc"><strong>Job Description:</strong>
                                <span> Experience in CSS3 and creating wireframes and mockupsExperience in designing for vario...</span>
                            </h6>
                            <div class="d-flex">
                                <h6 class="rec-job-desc"> <strong>Key Skills:</strong>
                                    <span>CSS3 . Jquery . HTML5 . Javascript . PHP . Laravel </span>
                                </h6>

                            </div>
                        </div>

                        <div class="recruiter">
                            <div>
                                <h6 class="rec-job-desc">Posted By:</h6>
                                <img src="/img/userPic.png"  class="rounded-circle">
                                <span>
                                    <strong>Ritu Suruchi  </strong> <span>|</span>
                                    <span>115 Followers</span>
                                </span>
                            </div>
                            <div class="recruiter-item-btn">
                                <a href = "#">
                                    <button>Quick Apply</button>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
                <div  class="cards">

                    <div class="rec-job-items">
                        <div class="job-title">
                            <div>
                                <h6>Frontend Developer</h6>
                                <small>Gratitude India</small>
                            </div>
                            <div>
                                <a href="#">
                                    <span>
                                        <i class="fa fa-eye" aria-hidden="true">
                                    </i>
                                    </span>
                                    <span>34061</span>
                                    <span>Views</span>
                                </a>
                                <a href="#">
                                    <span>Posted 2 days ago</span>
                                </a>
                            </div>
                        </div>

                        <div class="d-flex icons">
                            <div class="d-flex justify-content-between rec-job-icon">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                             width="12" height="12"
                                             viewBox="0 0 172 172"
                                             style=" fill:#000000;">
                                            <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="0" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
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
                                        <img src="https://img.icons8.com/carbon-copy/15/000000/place-marker.png" alt=""/>
                                    </span>
                                <small> Mumbai, Maharashtra</small>
                            </div>
                            <div class="d-flex justify-content-between rec-job-icon">
                                    <span>
                                        <img src="https://img.icons8.com/carbon-copy/15/000000/open-envelope.png" alt=""/>
                                    </span>
                                <small>Rs 2 - 6 Lacs p.a</small>
                            </div>
                        </div>

                        <div class="job_desc">
                            <h6 class="rec-job-desc"><strong>Job Description:</strong>
                                <span> Experience in CSS3 and creating wireframes and mockupsExperience in designing for vario...</span>
                            </h6>
                            <div class="d-flex">
                                <h6 class="rec-job-desc"> <strong>Key Skills:</strong>
                                    <span>CSS3 . Jquery . HTML5 . Javascript . PHP . Laravel </span>
                                </h6>

                            </div>
                        </div>

                        <div class="recruiter">
                            <div>
                                <h6 class="rec-job-desc">Posted By:</h6>
                                <img src="/img/userPic.png"  class="rounded-circle">
                                <span>
                                    <strong>Ritu Suruchi  </strong> <span>|</span>
                                    <span>115 Followers</span>
                                </span>
                            </div>
                            <div class="recruiter-item-btn">
                                <a href = "#">
                                    <button>Quick Apply</button>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

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
