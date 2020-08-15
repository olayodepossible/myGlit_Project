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
        MyGlit:Company Inbox filter
    </title>

    <style>
        *{
            box-sizing: border-box
        }

        body{
            font-family: 'Poppins', sans-serif;
            font-style: normal;
            color: #333333;
            background-color: #F2F2F2;
        }
        header{
            background-color: #ffffff;
            width: 95%;
            height: 45px;
            margin: 5px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        }
        .left-sideBar {
            position: fixed;
            top: 0;
            width: 50%;
            height: 100%;
            left: 0;
            display: none;
            z-index: 3;
            background-color: #C4C4C4;
        }
        #company-inbox main{
            margin: 15px 5px 5px 5px;
        }
        #company-inbox #filter-icon, input{
            cursor: pointer;
        }
        #company-inbox .filter{
            background: #FFFFFF;
            border: 1px solid #EEEEEE;
            border-radius: 5px;
            margin: 0 10px 0 5px;
            height: 50px;
            width: 95%;
        }
        #company-inbox #filter-icon{
            margin-bottom: 15px;
        }
        #myInput {
            width: 90%;
            font-size: 16px;
            padding: 12px 20px 12px 20px;
            border: 0;
        }
        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }


        /*#myUL li a {*/
        /*    border: 1px solid #ddd;*/
        /*    margin-top: -1px; !* Prevent double borders *!*/
        /*    background-color: #f6f6f6;*/
        /*    padding: 12px;*/
        /*    text-decoration: none;*/
        /*    font-size: 18px;*/
        /*    color: black;*/
        /*    display: block*/
        /*}*/

        /*#myUL li a:hover:not(.header) {*/
        /*    background-color: #eee;*/
        /*}*/

        #company-inbox .dropdown-contents {
            display: none;
            background-color: #fff;
            width: 95%;
            border: 1px solid #ddd;
            margin: 0 10px 15px 5px;
        }
        #company-inbox .dot {
            height: 8px;
            width: 8px;
            background-color: #28C882;
            border-radius: 50%;
            display: inline-block;
            margin-top: 3px;
        }
        #company-inbox .edit{
            transform: rotate(40deg);
        }
        #company-inbox .dropdown .text{
            margin: 13px 10px 10px 0;
            font-size: 13px;
        }
        #company-inbox .dropdown .img{
            margin: 10px 2px 10px 5px;
        }
        #company-inbox .hiring{
            background-color: #ffffff;
            margin: 15px 10px 0 3px;
            font-size: 10px;
            color: #fff;
            border-radius: 20px;
            height: 18px;
            width: 90px;
            padding-left: 10px;
        }
        #company-inbox  .dropdown .edit{
            margin: 14px 10px 0 3px;
            cursor: pointer;
        }
        #company-inbox .dropdown .arrows{
            margin: 12px 10px 0 3px;
            cursor: pointer;
        }
        #company-inbox .table-list h6, .table-list p{
            padding: 0;
            font-size: 10px;
            border: 0;
            margin: 0;
        }
        #company-inbox .lists{
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            line-height: 21px;
            text-align: center;
            margin: 5px;
        }
        #company-inbox .lists li{
            margin-bottom: 20px;

        }
        #company-inbox .address p{
            font-size: 12px;
            padding: 12px;
            margin-bottom: 0;
        }
        #company-inbox .address h6{
            font-size: 12px;
            margin-bottom: 5px;
            font-weight: normal;
        }
        #company-inbox .address {
            margin: 10px;
        }
        #company-inbox .remarks{
            border: 1px solid #333;
            margin: 10px 10px 0 10px;
            border-radius: 3px;
            height: 30px;
        }
        #company-inbox .remarks h6{
            font-size: 12px;
            padding: 7px;
            font-weight: normal;
        }
        #company-inbox .arrow-down{
            padding: 4px;
        }
        #company-inbox .remark-list {
            background-color: #E7E7EB;
            font-size: 10px;
            margin: 10px 10px 5px 10px;
        }
        #company-inbox .remark-list li{
            height: 170px;
        }
        #company-inbox .remark-text{
            margin: 10px;
        }
        #company-inbox .remark-text p{
            margin-top: 0;
            margin-bottom: 0;
            padding: 8px;
            background-color: #ffffff;
            text-align: justify;
        }
        #company-inbox .date{
            margin-bottom: 0;
            padding: 5px 0 0 13px
        }

        /* Meduim Screen*/
        @media screen and (min-width: 600px) and (max-width:768px) {
            #company-inbox .main-wrapper{
                width: 100vw;
                height: 100vh;
            }
            #company-inbox header{
                position: relative;
                width: 100%;
            }

            #company-inbox .left-sideBar{
                position: static;
                width: 300px;
                height: 100vh;
            }
        }


        /* LARGE SCREEN */
        @media (min-width: 769px) {

            #company-inbox .main-wrapper{
                width: 100vw;
                height: 100vh;
            }
            #company-inbox header{
                position: relative;
                width: 100%;
            }

            #company-inbox .left-sideBar{
                position: static;
                width: 300px;
                height: 100vh;
            }
            #company-inbox #filter-icon svg{
                margin-left: 82px;
            }
        }

    </style>
</head>
<body>
    <div id="company-inbox" class="d-flex">
        <div  class="left-sideBar">
            <div>
            </div>
        </div>
        <div class="main-wrapper">
            <header>
                {{--   begins menu icon  --}}
                <div class="menu-btn1">
                    <div class="btnLine"></div>
                    <div class="btnLine"></div>
                    <div class="btnLine"></div>
                </div>
                <div class="bell">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" width="25px" height="25px">
                        <path d="M0 0h24v24H0z" fill="none"/>
                        <path d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.9 2 2 2zm6-6v-5c0-3.07-1.63-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.64 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2zm-2 1H8v-6c0-2.48 1.51-4.5 4-4.5s4 2.02 4 4.5v6z"/>
                    </svg>
                </div>

            </header>
            <main>
                <div class="filter" id="filter-icon">
                        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Inbox">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" width="20px" height="20px">
                            <path d="M0 0h24v24H0z" fill="none"/>
                            <path d="M10 18h4v-2h-4v2zM3 6v2h18V6H3zm3 7h12v-2H6v2z"/>
                        </svg>
                    </div>

                <ul id="mainUL">
                        <li>
                            <div class="content-wrapper">
                                <div class="dropdown dropdown1 filter">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex">
                                            <div class="img">
                                                <img
                                                    src="{{ url('img/flags/india.png') }}"
                                                    style="max-width: 30px;"
                                                    alt="user image"
                                                />
                                            </div>
                                            <div class="text">
                                                <p class="dropbtn" style="padding: 0 0 0 5px; margin: 0">Accenture</p>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="hiring">
                                                <span>7th July 2020</span>
                                                <span class="dot"></span>
                                            </div>
                                            <div class="icons edit">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" width="15px" height="15px">
                                                    <path d="M0 0h24v24H0z" fill="none"/>
                                                    <path d="M13 3h-2v10h2V3zm4.83 2.17l-1.42 1.42C17.99 7.86 19 9.81 19 12c0 3.87-3.13 7-7 7s-7-3.13-7-7c0-2.19 1.01-4.14 2.58-5.42L6.17 5.17C4.23 6.82 3 9.26 3 12c0 4.97 4.03 9 9 9s9-4.03 9-9c0-2.74-1.23-5.18-3.17-6.83z"/>
                                                </svg>
                                            </div>
                                            <div  class="icons arrows ">
                                                <svg class="arrowD" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" width="20px" height="20px">
                                                    <path d="M0 0h24v24H0V0z" fill="none"/>
                                                    <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div  class="dropdown-contents dropdown-content1">
                                    <div class="table-list">
                                        <ul class="lists">
                                            <li>
                                                <div>
                                                    <h6>Country</h6>
                                                    <p>India</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <h6>State</h6>
                                                    <p>Kerala</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <h6>City</h6>
                                                    <p>Kerala City</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <h6>Town</h6>
                                                    <p>Kerala Town</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <h6>Hiring</h6>
                                                    <p>Button</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <h6>Current Bonus</h6>
                                                    <p>132589</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <h6>Sourcing</h6>
                                                    <p>India/Philippines</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <h6>Points</h6>
                                                    <p>1.58</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="address">
                                        <h6>Address</h6>
                                        <div style="background-color: #E7E7EB;">
                                            <p>134, Lorem Ipsum Street, simply dummy Avenue, India.</p>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="remarks d-flex justify-content-between">
                                            <div>
                                                <h6>Remarks</h6>
                                            </div>
                                            <div class="arrow-down">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" width="20px" height="20px">
                                                    <path d="M0 0h24v24H0V0z" fill="none"/>
                                                    <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="remark-list">
                                            <ul>
                                                <li>
                                                    <div>
                                                        <p class="date">7th July 2020</p>
                                                        <div class="remark-text">
                                                            <p>
                                                                Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry. Lorem Ipsum is simply dummy text of
                                                                the printing and typesetting industry.Lorem Ipsum is simply
                                                                dummy text of the printing and typesetting industry.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="content-wrapper">
                                <div class="dropdown dropdown2 filter">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex">
                                            <div class="img">
                                                <img
                                                    src="{{ url('img/flags/india.png') }}"
                                                    style="max-width: 30px;"
                                                    alt="user image"
                                                />
                                            </div>
                                            <div class="text">
                                                <p class="dropbtn" style="padding: 0 0 0 5px; margin: 0">Genpact</p>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class=" hiring">
                                                <span>7th July 2020</span>
                                                <span class="dot"></span>
                                            </div>
                                            <div class="icons edit">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" width="15px" height="15px">
                                                    <path d="M0 0h24v24H0z" fill="none"/>
                                                    <path d="M13 3h-2v10h2V3zm4.83 2.17l-1.42 1.42C17.99 7.86 19 9.81 19 12c0 3.87-3.13 7-7 7s-7-3.13-7-7c0-2.19 1.01-4.14 2.58-5.42L6.17 5.17C4.23 6.82 3 9.26 3 12c0 4.97 4.03 9 9 9s9-4.03 9-9c0-2.74-1.23-5.18-3.17-6.83z"/>
                                                </svg>
                                            </div>
                                            <div  class="icons arrows">
                                                <svg class="arrowD" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" width="20px" height="20px">
                                                    <path d="M0 0h24v24H0V0z" fill="none"/>
                                                    <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown-contents dropdown-content2">
                                    <div class="table-list">
                                        <ul class="lists">
                                            <li>
                                                <div>
                                                    <h6>Country</h6>
                                                    <p>India</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <h6>State</h6>
                                                    <p>Kerala</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <h6>City</h6>
                                                    <p>Kerala City</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <h6>Town</h6>
                                                    <p>Kerala Town</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <h6>Hiring</h6>
                                                    <p>Button</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <h6>Current Bonus</h6>
                                                    <p>132589</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <h6>Sourcing</h6>
                                                    <p>India/Philippines</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <h6>Points</h6>
                                                    <p>1.58</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="address">
                                        <h6>Address</h6>
                                        <div style="background-color: #E7E7EB;">
                                            <p>134, Lorem Ipsum Street, simply dummy Avenue, India.</p>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="remarks d-flex justify-content-between">
                                            <div>
                                                <h6>Remarks</h6>
                                            </div>
                                            <div class="arrow-down">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" width="20px" height="20px">
                                                    <path d="M0 0h24v24H0V0z" fill="none"/>
                                                    <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="remark-list">
                                            <ul>
                                                <li>
                                                    <div>
                                                        <p class="date">7th July 2020</p>
                                                        <div class="remark-text">
                                                            <p>
                                                                Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry. Lorem Ipsum is simply dummy text of
                                                                the printing and typesetting industry.Lorem Ipsum is simply
                                                                dummy text of the printing and typesetting industry.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="content-wrapper">
                                <div class="dropdown dropdown2 filter">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex">
                                            <div class="img">
                                                <img
                                                    src="{{ url('img/flags/india.png') }}"
                                                    style="max-width: 30px;"
                                                    alt="user image"
                                                />
                                            </div>
                                            <div class="text">
                                                <p class="dropbtn" style="padding: 0 0 0 5px; margin: 0">ZerTech</p>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class=" hiring">
                                                <span>7th July 2020</span>
                                                <span class="dot"></span>
                                            </div>
                                            <div class="icons edit">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" width="15px" height="15px">
                                                    <path d="M0 0h24v24H0z" fill="none"/>
                                                    <path d="M13 3h-2v10h2V3zm4.83 2.17l-1.42 1.42C17.99 7.86 19 9.81 19 12c0 3.87-3.13 7-7 7s-7-3.13-7-7c0-2.19 1.01-4.14 2.58-5.42L6.17 5.17C4.23 6.82 3 9.26 3 12c0 4.97 4.03 9 9 9s9-4.03 9-9c0-2.74-1.23-5.18-3.17-6.83z"/>
                                                </svg>
                                            </div>
                                            <div  class="icons arrows">
                                                <svg class="arrowD" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" width="20px" height="20px">
                                                    <path d="M0 0h24v24H0V0z" fill="none"/>
                                                    <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown-contents dropdown-content2">
                                    <div class="table-list">
                                        <ul class="lists">
                                            <li>
                                                <div>
                                                    <h6>Country</h6>
                                                    <p>India</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <h6>State</h6>
                                                    <p>Kerala</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <h6>City</h6>
                                                    <p>Kerala City</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <h6>Town</h6>
                                                    <p>Kerala Town</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <h6>Hiring</h6>
                                                    <p>Button</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <h6>Current Bonus</h6>
                                                    <p>132589</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <h6>Sourcing</h6>
                                                    <p>India/Philippines</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <h6>Points</h6>
                                                    <p>1.58</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="address">
                                        <h6>Address</h6>
                                        <div style="background-color: #E7E7EB;">
                                            <p>134, Lorem Ipsum Street, simply dummy Avenue, India.</p>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="remarks d-flex justify-content-between">
                                            <div>
                                                <h6>Remarks</h6>
                                            </div>
                                            <div class="arrow-down">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" width="20px" height="20px">
                                                    <path d="M0 0h24v24H0V0z" fill="none"/>
                                                    <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="remark-list">
                                            <ul>
                                                <li>
                                                    <div>
                                                        <p class="date">7th July 2020</p>
                                                        <div class="remark-text">
                                                            <p>
                                                                Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry. Lorem Ipsum is simply dummy text of
                                                                the printing and typesetting industry.Lorem Ipsum is simply
                                                                dummy text of the printing and typesetting industry.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="content-wrapper">
                                <div class="dropdown dropdown2 filter">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex">
                                            <div class="img">
                                                <img
                                                    src="{{ url('img/flags/india.png') }}"
                                                    style="max-width: 30px;"
                                                    alt="user image"
                                                />
                                            </div>
                                            <div class="text">
                                                <p class="dropbtn" style="padding: 0 0 0 5px; margin: 0">WNS</p>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class=" hiring">
                                                <span>7th July 2020</span>
                                                <span class="dot"></span>
                                            </div>
                                            <div class="icons edit">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" width="15px" height="15px">
                                                    <path d="M0 0h24v24H0z" fill="none"/>
                                                    <path d="M13 3h-2v10h2V3zm4.83 2.17l-1.42 1.42C17.99 7.86 19 9.81 19 12c0 3.87-3.13 7-7 7s-7-3.13-7-7c0-2.19 1.01-4.14 2.58-5.42L6.17 5.17C4.23 6.82 3 9.26 3 12c0 4.97 4.03 9 9 9s9-4.03 9-9c0-2.74-1.23-5.18-3.17-6.83z"/>
                                                </svg>
                                            </div>
                                            <div  class="icons arrows">
                                                <svg class="arrowD" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" width="20px" height="20px">
                                                    <path d="M0 0h24v24H0V0z" fill="none"/>
                                                    <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown-contents dropdown-content2">
                                    <div class="table-list">
                                        <ul class="lists">
                                            <li>
                                                <div>
                                                    <h6>Country</h6>
                                                    <p>India</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <h6>State</h6>
                                                    <p>Kerala</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <h6>City</h6>
                                                    <p>Kerala City</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <h6>Town</h6>
                                                    <p>Kerala Town</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <h6>Hiring</h6>
                                                    <p>Button</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <h6>Current Bonus</h6>
                                                    <p>132589</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <h6>Sourcing</h6>
                                                    <p>India/Philippines</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <h6>Points</h6>
                                                    <p>1.58</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="address">
                                        <h6>Address</h6>
                                        <div style="background-color: #E7E7EB;">
                                            <p>134, Lorem Ipsum Street, simply dummy Avenue, India.</p>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="remarks d-flex justify-content-between">
                                            <div>
                                                <h6>Remarks</h6>
                                            </div>
                                            <div class="arrow-down">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" width="20px" height="20px">
                                                    <path d="M0 0h24v24H0V0z" fill="none"/>
                                                    <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="remark-list">
                                            <ul>
                                                <li>
                                                    <div>
                                                        <p class="date">7th July 2020</p>
                                                        <div class="remark-text">
                                                            <p>
                                                                Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry. Lorem Ipsum is simply dummy text of
                                                                the printing and typesetting industry.Lorem Ipsum is simply
                                                                dummy text of the printing and typesetting industry.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </li>

                    </ul>
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
