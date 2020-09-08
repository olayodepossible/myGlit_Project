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
    <title>
        Recruiter Dashboard
    </title>

    <style>

        *{
            box-sizing: border-box;
        }
        *:focus{
            outline: none;
        }
        body{
            font-family: Poppins, sans-serif;
            font-style: normal;
            font-weight: 500;
            padding: 1rem;
            background-color: #fffefe;
        }
        a{
            text-decoration: none;
        }
        ul{
            list-style: none;
            padding: 0;
        }
        #recruiter-dashboard .top-header img{
            width: 50px;
        }

        #recruiter-dashboard .user-pix{
            margin-bottom: 15px;
        }
        #recruiter-dashboard .user-pix span{
            font-size: 24px;
            padding: 5px 0 0 19px;
        }
        #recruiter-dashboard .userStatusForm{
            margin: 0;
        }
        #recruiter-dashboard .input-group {
            position: relative;
            display: flex;
            flex-wrap: wrap;
            align-items: stretch;
            width: 100%;
        }
        #recruiter-dashboard  .input-group input{
            border-top-left-radius: 20px;
            border-bottom-left-radius: 20px;
            padding: 20px;
            background-color: #f1f1f1;
            border: 0;
        }
        #recruiter-dashboard .input-group ::placeholder{
            color: #333;
            opacity: 0.3;
            font-size: 10px;
            font-weight: 700;
        }
        #recruiter-dashboard .input-group button{
            background-color: #E33D47;
            border: 0;
            color: #fff;
            border-top-right-radius: 20px;
            border-bottom-right-radius: 20px;
            padding: 8px;
        }
        #recruiter-dashboard .btn-create-job{
            margin-top: 20px;
        }
        #recruiter-dashboard .top-header a{
            font-size: 16px;
            color: #fff;
            background-color: #E3342f;
            border-radius: 20px;
            padding: 10px 20px;
        }
        #recruiter-dashboard .cards{
            width: 100%;
            background-color: #ffffff;
            padding: 10px 1.5rem;
            border-radius: 10px;
            margin-bottom: 1em;
            border: 1px solid #DDDDDD;
        }

        #recruiter-dashboard .cards:hover{
            border: 1px solid #4A8CFB;
        }
        #recruiter-dashboard .total {
            background-color: #ECF3FF;
            width: 8rem;
            padding: 4px;
            font-size: 14px;
            color: #4A8CFB;
            border-radius: 15px;
            text-align: center;
        }

        #recruiter-dashboard .nav-pills li{
            display: inline-block;
        }
        #recruiter-dashboard .nav-item a{
            width: 90px;
            font-size: 12px;
            font-weight: 500;
            text-align: center;
            color: #8D9AA7;
            border-radius: 15px;
        }

        #recruiter-dashboard .nav-pills .nav-link.active,
        #recruiter-dashboard .nav-pills .show > .nav-link{
            background-color: #e3342f;
            color: #ffffff;
        }


        #recruiter-dashboard .card-group-wrapper{
            margin-left: auto;
            margin-right: auto;
            padding: 1rem;
        }

        #recruiter-dashboard .card-groups > * {
            padding: 1rem;
        }
        #recruiter-dashboard .lineup{
            padding-top: 2.5rem;
        }
        #recruiter-dashboard .card-groups {
            width: 260px;
            border: 1px solid #DDDDDD;
            border-radius: 10px;
            background-color: #ffffff;
            margin-bottom: 15px;
        }
        #recruiter-dashboard .card-groups:hover {
            border: 1px solid #4A8CFB;
        }

        #recruiter-dashboard .card-groups h5{
            padding: 0;
            margin: 0;
            font-size: 15px;
            color:#4A8CFB ;
        }
        #recruiter-dashboard .mdi-minus,
        #recruiter-dashboard .mdi-plus{
            font-size: 30px;
            color: #4A8CFB;
        }
        #recruiter-dashboard .card-header{
            position: relative;
            padding: 0;
            background-color: rgba(0, 0, 0, 0);
            border: 0;
        }
        #recruiter-dashboard .card-header span{
            position: absolute;
            right: 3px;
            top: -13px;
        }

        #recruiter-dashboard .plus{
            visibility: hidden;
        }

        #recruiter-dashboard .days{
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
        }

        #recruiter-dashboard .card-groups small,
        #recruiter-dashboard .days li{
            border: 0;
            color: #8D9AA7;
        }

        #recruiter-dashboard .days li p:nth-child(2) {
            font-size: 25px;
            font-weight: 300;
            color: #000;
        }
        #recruiter-dashboard .days button {
            font-size: 14px;
            border-radius: 15px;
            border: 0;
            background-color: #e3342f;
            color: #FFFFFF;
        }

        #recruiter-dashboard .lineups li{
            border-bottom: 1px solid rgba(211, 211, 211, 0.9);
            padding-top: 10px;
        }
        #recruiter-dashboard .lineups li:last-child{
            border: 0;
        }
        #recruiter-dashboard .user-info{
            display: flex;
            max-width: 50%;
        }
        #recruiter-dashboard .user h6{
            width: 183px;
            font-size: 10px;
        }
        #recruiter-dashboard .user-info img{
            max-width: 30px;
        }
        #recruiter-dashboard .numbers{
            text-align: right;
        }


        @media screen and (min-width: 600px) {
            #recruiter-dashboard .top-header{
                display: flex;
                align-items: center;
            }
            #recruiter-dashboard .top-header img {
                width: 40px;
            }
            #recruiter-dashboard .user-pix{
                margin-top: 20px !important;
            }
            #recruiter-dashboard .user-pix span {
                font-size: 16px;
                padding: 5px 0 0 10px;

            }
            #recruiter-dashboard .nav-form {
                margin: 0 15px;
            }
            #recruiter-dashboard .input-group input,
            #recruiter-dashboard .input-group button {
                /*height: 35px;*/
            }
            #recruiter-dashboard .top-header a {
                font-size: 12px;
                border-radius: 20px;
                padding: 10px 20px;
            }
            #recruiter-dashboard .btn-create-job {
                margin: 0;
            }

            #recruiter-dashboard .card-1{
                display: flex;
                justify-content: center;
                margin-bottom: 30px;

            }
            #recruiter-dashboard .cards{
                width: 200px;
                margin: 0 20px 0 0;
                padding: 10px;
            }

            #recruiter-dashboard .nav-item a {
                width: 120px;
                font-size: 16px;
                text-align: center;
                padding: 10px;
                border-radius: 30px;
                margin-left: 20px;
            }

            #recruiter-dashboard .card-groups{
                width: 300px;
                margin-right: 15px;
            }
            #recruiter-dashboard .card-groups h5{
                font-size: 20px;
            }
            #recruiter-dashboard .days li{
                width: 120px;
                font-size: 14px;
            }
            #recruiter-dashboard .days button{
                width: 70px;
                font-size: 14px;
                margin:1px ;
            }
            #recruiter-dashboard .company-list{
                font-size: 10px;
            }
            #recruiter-dashboard .company-list span,
            #recruiter-dashboard .site-list span{
                padding-top: 4px;
                font-size: 14px;
            }
            #recruiter-dashboard .numbers h6{
                padding-left: 15px;
            }
            #recruiter-dashboard .user small,
            #recruiter-dashboard .user h6{
                font-size: 14px;
            }

        }
        /* LARGE SCREEN */
        @media (min-width: 769px) {
            #recruiter-dashboard {
                max-width: 1170px;
                margin-left: auto;
                margin-right: auto;
                padding: 1rem;
            }

            #recruiter-dashboard .top-header{
                display: grid;
                grid-template-columns: 2fr 7fr 3fr;
            }

            #recruiter-dashboard .user-pix,
            #recruiter-dashboard .btn-create-job{
                margin: 0 !important;
            }
            #recruiter-dashboard .user-pix span {
                font-size: 24px;
            }
            #recruiter-dashboard .user-pix img {
                width: 50px;
            }
            #recruiter-dashboard .input-group{
                padding: 10px;
            }
            #recruiter-dashboard .input-group ::placeholder{
                font-size: 14px;
                font-weight: normal;
            }
            #recruiter-dashboard  .input-group button{
                font-size: 16px;
                width: 130px;
            }
            #recruiter-dashboard .top-header a{
                font-size: 16px;
                color: #fff;
                background-color: #E3342f;
                border-radius: 20px;
                padding: 10px 20px;
            }

            #recruiter-dashboard .text-left{
                margin-top: 20px;
            }

            #recruiter-dashboard .nav-item a {
                width: 150px;
                font-size: 20px;
                text-align: center;
                border-radius: 30px;
                padding: 15px;
            }
            /*#recruiter-dashboard .recruitment button{
                width: 100%;
                font-size: 20px;
                font-weight: bold;
                border-radius: 15px;
            }*/
            #recruiter-dashboard .card-1{
                display: flex;
                justify-content: space-between;
                margin-bottom: 50px!important;
            }
            #recruiter-dashboard .days button{
                width: 92px;
                height: 33px;
                border: 0;
                border-radius: 50px;
                background-color: #E3342f;
                color: #FFFFFF;
            }
            #recruiter-dashboard .cards{
                width: 100%;
                margin-right: 10px;
            }
            #recruiter-dashboard .card-list,
            #recruiter-dashboard .card-list h6,
            #recruiter-dashboard .user h6{
                font-size: 18px;
            }
            #recruiter-dashboard .card-groups h5{
                font-size: 20px;
            }

            #recruiter-dashboard .card-groups {
                width: 320px;
                margin-right: 20px;
            }

            #recruiter-dashboard .user small{
                font-size: 14px;
            }

        }

    </style>
</head>
<body>
    <div id="recruiter-dashboard">

        <div class="mb-5 top-header">
            <div class="user-pix mt-1">
                    <img src="/img/default_profile_image.png" class="rounded-circle" alt="user image">
                    <span style="color: #000">Hi, John  </span>
            </div>
            <div class="nav-form">
                <form class="userStatusForm " action="#" id="#">
                    <div class="input-group">
                        <input type="text" class="shadow-on-hover  form-control" id="#" name="#" placeholder="Write something about what kind of recruitment are you doing">
                        <span class="input-group-btn">
                            <button type="submit" id="#" style="background-color: #E33D47; border: 0">Update</button>
                        </span>
                    </div>
                </form>
            </div>
            <div class=" ">
                <div class="text-left btn-create-job text-md-right">
                    <a href="#" class=" mr-3 my-3 " target="_blank">Click here to post a job</a>
                </div>
            </div>
        </div>

        <div class=" card-1">
            <div class="cards"  >
                <h5 class="card-text font-weight-bold text-black-50 py-2">ACTIVE USERS</h5>
                <div class="d-flex ">
                    <h1 class="card-title pb-0 mr-2 text-success">15,000</h1>
                    <span class="text-black-50 pt-2"><i class="mdi mdi-arrow-up"></i> </span>
                </div>
            </div>
            <div class="cards" >
                <div class="d-flex justify-content-between">
                    <h5 class="card-text font-weight-bold text-black-50 py-2">LINEUPS</h5>
                    <h6 class="card-text font-weight-bold  py-2">Today</h6>
                </div>
                <div class=" d-flex" style="color: orange">
                    <h1 class="card-title pb-0 mr-2" >15</h1>
                    <span class="tes pt-2" style="color: #e3342f"><i class="mdi mdi-arrow-down"></i></span>
                </div>
            </div>
            <div class="cards" >
                <div class="d-flex justify-content-between">
                    <h5 class="card-text font-weight-bold text-black-50 py-2">JONNES</h5>
                    <h6 class="card-text font-weight-bold  py-2">This Week</h6>
                </div>
                <div class="d-flex ">
                    <h1 class="card-title pb-0 mr-2 text-primary">5</h1>
                    <span class="text-black-50 pt-2"><i class="mdi mdi-arrow-up"></i> </span>
                </div>
                <div class="total">Total Selects 10</div>
            </div>
        </div>
        <div class="easy-tab">
            <ul
                class="nav nav-pills mb-2 pills-red"
                id="pills-tab"
                role="tablist"
            >
                <li class="nav-item">
                    <a
                        class="nav-link active"
                        id="pills-lineups-tab"
                        data-toggle="pill"
                        href="#pills-lineups"
                        role="tab"
                        aria-controls="pills-lineups"
                        aria-selected="true"
                    >Lineups</a
                    >
                </li>
                <li class="nav-item" >
                    <a
                        class="nav-link"
                        id="pills-settings-tab"
                        data-toggle="pill"
                        href="#pills-settings"
                        role="tab"
                        aria-controls="pills-settings"
                        aria-selected="false"
                    >Settings</a
                    >
                </li>
                <li class="nav-item">
                    <a
                        class="nav-link"
                        id="pills-candidates-tab"
                        data-toggle="pill"
                        href="#pills-candidates"
                        role="tab"
                        aria-controls="pills-candidates"
                        aria-selected="false"
                    >Candidates</a
                    >
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div
                    class="tab-pane fade show active"
                    id="pills-lineups"
                    role="tabpanel"
                    aria-labelledby="pills-lineups-tab"
                >
                    <div class=" row card-group-wrapper">

                        <div class="card-accordion">
                            <div
                                class="accordion md-accordion card-groups card-group1"
                                id="accordionEx"
                                role="tablist"
                                aria-multiselectable="false"
                            >
                                <div class="lineup country-info">
                                    <div class="d-flex justify-content-between">
                                        <div><h5>Total Lineups (142709)</h5></div>
                                        <div class="card-header" role="tab" id="topLineup">
                                            <a
                                                data-toggle="collapse"
                                                data-parent="#accordionEx"
                                                href="#topLineups"
                                                aria-expanded="true"
                                                aria-controls="collapseOne1"
                                            >
                                                    <span id="totalLineup-minus">
                                                        <i class="mdi mdi-minus"></i>
                                                    </span>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                                <div
                                    id="topLineups"
                                    class="collapse show"
                                    role="tabpanel"
                                    aria-labelledby="topLineup"
                                    data-parent="#accordionEx"
                                >
                                    <ul class="days">
                                        <li>
                                            <p>Yesterday</p>
                                            <p>1000</p>
                                            <p  style="color: #e3342f"><span><i class="mdi mdi-arrow-down"></i></span>200</p>
                                        </li>
                                        <li>
                                            <p>Today</p>
                                            <p>900</p>
                                            <p  style="color: #03a678"><span><i class="mdi mdi-arrow-up"></i></span>600</p>
                                        </li>
                                        <li>
                                            <p>Tomorrow</p>
                                            <p>1500</p>
                                            <p style="color: #03a678"><span><i class="mdi mdi-arrow-up"></i></span>1000</p>

                                        </li>
                                    </ul>
                                    <div class="lineups country-lineup">
                                        <ul>
                                            <li>
                                                <div class="d-flex justify-content-between">
                                                    <div class="card-list">
                                                        <span>
                                                          <img
                                                              src="/img/flags/india.png"
                                                              style="max-width: 30px;"
                                                              alt="country flag"
                                                          />
                                                        </span>
                                                        <span> India</span>
                                                    </div>
                                                    <div>
                                                        <div class="numbers">
                                                            <h6>106</h6>
                                                        </div>
                                                        <div class="d-flex">
                                                            <span class="text-success">
                                                                <i class="mdi mdi-arrow-down"></i>336&percnt;
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex justify-content-between">
                                                    <div class="card-list">
                                                <span>
                                                  <img
                                                      src="/img/flags/nigeria.png"
                                                      style="max-width: 30px;"
                                                      alt="country flag"
                                                  />
                                                </span>
                                                        <span>Nigeria</span>
                                                    </div>
                                                    <div>
                                                        <div class="numbers">
                                                            <h6>36</h6>
                                                        </div>
                                                        <div class="d-flex">
                                                            <span class="text-success">
                                                                <i class="mdi mdi-arrow-down"></i>336&percnt;
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex justify-content-between">
                                                    <div class="card-list">
                                                <span>
                                                  <img
                                                      src="/img/flags/poland.png"
                                                      style="max-width: 30px;"
                                                      alt="country flag"

                                                  />
                                                </span>
                                                        <span> Poland</span>
                                                    </div>
                                                    <div>
                                                        <div class="numbers">
                                                            <h6>106</h6>
                                                        </div>
                                                        <div class="d-flex">
                                                            <span class="text-success">
                                                                <i class="mdi mdi-arrow-up"></i>3000&percnt;
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex justify-content-between">
                                                    <div class="card-list">
                                                <span>
                                                  <img
                                                      src="/img/flags/libya.png"
                                                      style="max-width: 30px;"
                                                      alt="country flag"
                                                  />
                                                </span>
                                                        <span> Libya</span>
                                                    </div>
                                                    <div>
                                                        <div class="numbers">
                                                            <h6>36</h6>
                                                        </div>
                                                        <div class="d-flex">
                                                            <span class="text-success" style="color: #e3342f">
                                                                <i class="mdi mdi-arrow-down"></i>336&percnt;
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex justify-content-between">
                                                    <div class="card-list">
                                                <span>
                                                  <img
                                                      src="/img/flags/malta.png"
                                                      style="max-width: 30px;"
                                                      alt="country flag"
                                                  />
                                                </span>
                                                        <span> Mali</span>
                                                    </div>
                                                    <div>
                                                        <div class="numbers">
                                                            <h6>106</h6>
                                                        </div>
                                                        <div class="d-flex">
                                                            <span class="text-success">
                                                                <i class="mdi mdi-arrow-up"></i>10016&percnt;
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex justify-content-between">
                                                    <div class="card-list">
                                                <span>
                                                  <img
                                                      src="/img/flags/ghana.png"
                                                      style="max-width: 30px;"
                                                      alt="country flag"
                                                  />
                                                </span>
                                                        <span> Ghana</span>
                                                    </div>
                                                    <div>
                                                        <div class="numbers">
                                                            <h6>36</h6>
                                                        </div>
                                                        <div class="d-flex">
                                                            <span class="text-success">
                                                                <i class="mdi mdi-arrow-up"></i>336&percnt;
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <div
                                class="accordion md-accordion card-groups card-group1"
                                id="accordionEx"
                                role="tablist"
                                aria-multiselectable="false"
                            >
                                <div class="d-flex justify-content-between">
                                    <div><h5>Countries</h5></div>
                                    <div class="card-header" role="tab" id="headingOne1">
                                        <a
                                            data-toggle="collapse"
                                            data-parent="#accordionEx"
                                            href="#countries"
                                            aria-expanded="true"
                                            aria-controls="collapseOne1"
                                        >
                                                <span id="country-minus">
                                                    <i class="mdi mdi-minus"></i>
                                                </span>

                                        </a>
                                    </div>
                                </div>
                                <div
                                    id="countries"
                                    class="collapse show"
                                    role="tabpanel"
                                    aria-labelledby="headingOne1"
                                    data-parent="#accordionEx"
                                >

                                    <ul class="days">
                                        <li>Yesterday</li>
                                        <li>
                                            <button>Today</button>
                                        </li>
                                        <li>Tomorrow</li>
                                    </ul>
                                    <div class="lineups country-lineup">
                                        <ul class="cross-nav">
                                            <li>
                                                <div class="d-flex justify-content-between">
                                                    <div class="card-list">

                                                        <span> India</span>
                                                    </div>
                                                    <div>
                                                        <div class="numbers">
                                                            <h6>36</h6>
                                                        </div>
                                                        <div class="d-flex">
                                                            <span class="text-success" style="color: #03a678">
                                                                <i class="mdi mdi-arrow-up"></i>336&percnt;
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex justify-content-between">
                                                    <div class="card-list">

                                                        <span>Nigeria</span>
                                                    </div>
                                                    <div>
                                                        <div class="numbers">
                                                            <h6>14</h6>
                                                        </div>
                                                        <div class="d-flex">
                                                           <span class="text-success" style="color: #03a678">
                                                                <i class="mdi mdi-arrow-up"></i>180&percnt;
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex justify-content-between">
                                                    <div class="card-list">

                                                        <span> Poland</span>
                                                    </div>
                                                    <div>
                                                        <div class="numbers">
                                                            <h6>11</h6>
                                                        </div>
                                                        <div class="d-flex">
                                                            <span class="text-success" style="color: #03a678">
                                                                <i class="mdi mdi-arrow-up"></i>666&percnt;
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex justify-content-between">
                                                    <div class="card-list">

                                                        <span>Philippines</span>
                                                    </div>
                                                    <div>
                                                        <div class="numbers">
                                                            <h6>11</h6>
                                                        </div>
                                                        <div class="d-flex">
                                                            <span class="text-success" style="color: #03a678">
                                                                <i class="mdi mdi-arrow-up"></i>900&percnt;
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex justify-content-between">
                                                    <div class="card-list">

                                                        <span> Mali</span>
                                                    </div>
                                                    <div>
                                                        <div class="numbers">
                                                            <h6>9</h6>
                                                        </div>
                                                        <div class="d-flex">
                                                            <span class="text-success" style="color: #03a678">
                                                                <i class="mdi mdi-arrow-up"></i>106&percnt;
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex justify-content-between">
                                                    <div class="card-list">

                                                        <span> Ghana</span>
                                                    </div>
                                                    <div>
                                                        <div class="numbers">
                                                            <h6>166</h6>
                                                        </div>
                                                        <div class="d-flex">
                                                            <span class="text-success" style="color: #03a678">
                                                                <i class="mdi mdi-arrow-up"></i>333&percnt;
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-accordion">
                            <div
                                class="accordion md-accordion card-groups card-group2"
                                id="accordionEx"
                                role="tablist"
                                aria-multiselectable="false"
                            >
                                <div class="lineup top-company-info">
                                    <div class="d-flex justify-content-between">
                                        <div><h5>Top Companies</h5></div>
                                        <div class="card-header" role="tab" id="headingTwo2">
                                            <a
                                                data-toggle="collapse"
                                                data-parent="#accordionEx"
                                                href="#top-companies"
                                                aria-expanded="true"
                                                aria-controls="collapseOne1"
                                            >
                                                <span id="top-companies-minus">
                                                    <i class="mdi mdi-minus"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    id="top-companies"
                                    class="collapse show company-lineup"
                                    role="tabpanel"
                                    aria-labelledby="headingTwo2"
                                    data-parent="#accordionEx"
                                >
                                    <ul class="days">
                                        <li>Yesterday</li>
                                        <li>
                                            <button>Today</button>
                                        </li>
                                        <li>Tomorrow</li>
                                    </ul>
                                    <div class="lineups company-lineup">
                                        <ul>
                                            <li>
                                                <div class="company-list d-flex justify-content-between">
                                                    <div class="card-list">
                                                        <h6>Tele-performance</h6>
                                                    </div>
                                                    <div>
                                                        <div class="numbers">
                                                            <h6>36</h6>
                                                        </div>
                                                        <div class="d-flex">
                                                            <span class="text-succes" style="color: #03a678">
                                                                <i class="mdi mdi-arrow-up"></i>336&percnt;
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div
                                                    class="company-list d-flex justify-content-between"
                                                >
                                                    <div class="card-list">
                                                        <h6>FIS</h6>
                                                    </div>
                                                    <div>
                                                        <div class="numbers">
                                                            <h6>14</h6>
                                                        </div>
                                                        <div class="d-flex">
                                                            <span class="text-succes" style="color: #03a678">
                                                                <i class="mdi mdi-arrow-up"></i>180&percnt;
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div
                                                    class="company-list d-flex justify-content-between"
                                                >
                                                    <div class="card-list">
                                                        <h6>WNS</h6>
                                                    </div>
                                                    <div>
                                                        <div class="numbers">
                                                            <h6>11</h6>
                                                        </div>
                                                        <div class="d-flex">
                                                            <span class="text-succes" style="color: #03a678">
                                                                <i class="mdi mdi-arrow-up"></i>666&percnt;
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div
                                                    class="company-list d-flex justify-content-between"
                                                >
                                                    <div class="card-list">
                                                        <h6>Genpact</h6>
                                                    </div>
                                                    <div>
                                                        <div class="numbers">
                                                            <h6>11</h6>
                                                        </div>
                                                        <div class="d-flex">
                                                            <span class="text-succes" style="color: #03a678">
                                                                <i class="mdi mdi-arrow-up"></i>900&percnt;
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div
                                                    class="company-list d-flex justify-content-between"
                                                >
                                                    <div class="card-list">
                                                        <h6>Accenture</h6>
                                                    </div>
                                                    <div>
                                                        <div class="numbers">
                                                            <h6>9</h6>
                                                        </div>
                                                        <div class="d-flex">
                                                            <span class="text-succes" style="color: #e3342f">
                                                                <i class="mdi mdi-arrow-down"></i>106&percnt;
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="accordion md-accordion card-groups card-group2"
                                id="accordionEx"
                                role="tablist"
                                aria-multiselectable="false">
                                <div class="lineup top-company-info">
                                    <div class="d-flex justify-content-between">
                                        <div><h5>Top Recruiter</h5></div>
                                        <div class="card-header" role="tab" id="headingFour4">
                                            <a
                                                data-toggle="collapse"
                                                data-parent="#accordionEx"
                                                href="#top-recruiter"
                                                aria-expanded="true"
                                                aria-controls="collapseOne1"
                                            >
                                                <span id="top-recruiter-minus">
                                                    <i class="mdi mdi-minus"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    id="top-recruiter"
                                    class="collapse show"
                                    role="tabpanel"
                                    aria-labelledby="headingFour4"
                                    data-parent="#accordionEx"
                                >
                                    <ul class="days">
                                        <li>Yesterday</li>
                                        <li>
                                            <button>Today</button>
                                        </li>
                                        <li>Tomorrow</li>
                                    </ul>
                                    <div class="lineups recruiter-lineup">
                                        <ul>
                                            <li>
                                                <div class="d-flex justify-content-between">
                                                    <div class="user-info">
                                                        <div class="mr-1">
                                                            <img src="/img/default_profile_image.png" class="rounded-circle" alt="user image">
                                                        </div>
                                                        <div class="user">
                                                            <h6>Raghu</h6>
                                                            <small>India. Mumbai</small>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="numbers">
                                                            <h6>36</h6>
                                                        </div>
                                                        <div class="d-flex">
                                                            <span class="text-succes" style="color: #03a678">
                                                                <i class="mdi mdi-arrow-up"></i>336&percnt;
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex justify-content-between">
                                                    <div class="user-info">
                                                        <div class="mr-1">
                                                            <img src="/img/default_profile_image.png" class="rounded-circle" alt="user image">
                                                        </div>
                                                        <div class="user">
                                                            <h6>Hemanth Patil</h6>
                                                            <small>India. Mumbai</small>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="numbers">
                                                            <h6>14</h6>
                                                        </div>
                                                        <div class="d-flex">
                                                            <span class="text-succes" style="color: #03a678">
                                                                <i class="mdi mdi-arrow-up"></i>180&percnt;
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex justify-content-between">
                                                    <div class="user-info">
                                                        <div class="mr-1">
                                                            <img
                                                                src="/img/default_profile_image.png"
                                                                class="rounded-circle"
                                                                alt="user image"
                                                            />
                                                        </div>
                                                        <div class="user">
                                                            <h6>Akang Ekaette Helen</h6>
                                                            <small>India. Mumbai</small>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="numbers">
                                                            <h6>11</h6>
                                                        </div>
                                                        <div class="d-flex">
                                                            <span class="text-succes" style="color: #03a678">
                                                                <i class="mdi mdi-arrow-up"></i>666&percnt;
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex justify-content-between">
                                                    <div class="user-info">
                                                        <div class="mr-1">
                                                            <img
                                                                src="/img/default_profile_image.png"
                                                                class="rounded-circle"
                                                                alt="user image"
                                                            />
                                                        </div>
                                                        <div class="user">
                                                            <h6>Hemanth Patil</h6>
                                                            <small>India. Mumbai</small>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="numbers">
                                                            <h6>11</h6>
                                                        </div>
                                                        <div class="d-flex">
                                                            <span class="text-succes" style="color: #03a678">
                                                                <i class="mdi mdi-arrow-up"></i>900&percnt;
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex justify-content-between">
                                                    <div class="user-info">
                                                        <div class="mr-1">
                                                            <img
                                                                src="/img/default_profile_image.png"
                                                                class="rounded-circle"
                                                                alt="user image"
                                                            />
                                                        </div>
                                                        <div class="user">
                                                            <h6>Shaira Maae G.Yunque</h6>
                                                            <small>India. Mumbai</small>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="numbers">
                                                            <h6>9</h6>
                                                        </div>
                                                        <div class="d-flex">
                                                            <span class="text-succes" style="color: #e3342f">
                                                                <i class="mdi mdi-arrow-down"></i>106&percnt;
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-accordion">
                            <div
                                class="accordion md-accordion card-groups card-group2"
                                id="accordionEx"
                                role="tablist"
                                aria-multiselectable="false"
                            >
                                <div class="lineup top-company-info">
                                    <div class="d-flex justify-content-between">
                                        <div><h5>Top Company Site</h5></div>
                                        <div class="card-header" role="tab" id="headingThree3">
                                            <a
                                                data-toggle="collapse"
                                                data-parent="#accordionEx"
                                                href="#top-company-site"
                                                aria-expanded="true"
                                                aria-controls="collapseOne1"
                                            >
                                                <span id="top-company-site-minus">
                                                    <i class="mdi mdi-minus"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>


                                </div>
                                <div
                                    id="top-company-site"
                                    class="collapse show"
                                    role="tabpanel"
                                    aria-labelledby="headingThree3"
                                    data-parent="#accordionEx1"
                                >
                                    <ul class="days">
                                        <li>Yesterday</li>
                                        <li>
                                            <button>Today</button>
                                        </li>
                                        <li>Tomorrow</li>
                                    </ul>
                                    <div class="lineups company-lineup">
                                        <ul>
                                            <li>
                                                <div class="company-list d-flex justify-content-between">
                                                    <div class="card-list">
                                                        <h6>Tele-performance</h6>
                                                    </div>
                                                    <div>
                                                        <div class="numbers">
                                                            <h6>36</h6>
                                                        </div>
                                                        <div class="d-flex">
                                                            <span class="text-succes" style="color: #03a678">
                                                                <i class="mdi mdi-arrow-up"></i>336&percnt;
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div
                                                    class="company-list d-flex justify-content-between"
                                                >
                                                    <div class="card-list">
                                                        <h6>FIS</h6>
                                                    </div>
                                                    <div>
                                                        <div class="numbers">
                                                            <h6>14</h6>
                                                        </div>
                                                        <div class="d-flex">
                                                            <span class="text-succes" style="color: #03a678">
                                                                <i class="mdi mdi-arrow-up"></i>180&percnt;
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div
                                                    class="company-list d-flex justify-content-between"
                                                >
                                                    <div class="card-list">
                                                        <h6>WNS</h6>
                                                    </div>
                                                    <div>
                                                        <div class="numbers">
                                                            <h6>11</h6>
                                                        </div>
                                                        <div class="d-flex">
                                                            <span class="text-succes" style="color: #03a678">
                                                                <i class="mdi mdi-arrow-up"></i>666&percnt;
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div
                                                    class="company-list d-flex justify-content-between"
                                                >
                                                    <div class="card-list">
                                                        <h6>Genpact</h6>
                                                    </div>
                                                    <div>
                                                        <div class="numbers">
                                                            <h6>11</h6>
                                                        </div>
                                                        <div class="d-flex">
                                                            <span class="text-succes" style="color: #03a678">
                                                                <i class="mdi mdi-arrow-up"></i>900&percnt;
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div
                                                    class="company-list d-flex justify-content-between"
                                                >
                                                    <div class="card-list">
                                                        <h6>Accenture</h6>
                                                    </div>
                                                    <div>
                                                        <div class="numbers">
                                                            <h6>9</h6>
                                                        </div>
                                                        <div class="d-flex">
                                                            <span class="text-succes" style="color: #e3342f">
                                                                <i class="mdi mdi-arrow-down"></i>106&percnt;
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div
                    class="tab-pane fade"
                    id="pills-settings"
                    role="tabpanel"
                    aria-labelledby="pills-settings-tab"
                >
                    <div class=" row card-group-wrapper">

                        <div class="card-accordion">

                            <div
                                class="accordion md-accordion card-groups card-group1"
                                id="accordionEx"
                                role="tablist"
                                aria-multiselectable="false"
                            >
                                <div class="d-flex justify-content-between">
                                    <div><h5>Top Countries</h5></div>
                                    <div class="card-header" role="tab" id="headingOne1">
                                        <a
                                            data-toggle="collapse"
                                            data-parent="#accordionEx"
                                            href="#countries"
                                            aria-expanded="true"
                                            aria-controls="collapseOne1"
                                        >
                                                <span id="country-minus">
                                                    <i class="mdi mdi-minus"></i>
                                                </span>

                                        </a>
                                    </div>
                                </div>
                                <div
                                    id="countries"
                                    class="collapse show"
                                    role="tabpanel"
                                    aria-labelledby="headingOne1"
                                    data-parent="#accordionEx"
                                >

                                    <ul class="days">
                                        <li>Yesterday</li>
                                        <li>
                                            <button>Today</button>
                                        </li>
                                        <li>Tomorrow</li>
                                    </ul>
                                    <div class="lineups country-lineup">
                                        <ul class="cross-nav">
                                            <li>
                                                <div class="d-flex justify-content-between">
                                                    <div class="card-list">

                                                        <span> India</span>
                                                    </div>
                                                    <div>
                                                        <div class="numbers">
                                                            <h6>36</h6>
                                                        </div>
                                                        <div class="d-flex">
                                                            <span class="text-success" style="color: #03a678">
                                                                <i class="mdi mdi-arrow-up"></i>336&percnt;
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex justify-content-between">
                                                    <div class="card-list">

                                                        <span>Nigeria</span>
                                                    </div>
                                                    <div>
                                                        <div class="numbers">
                                                            <h6>14</h6>
                                                        </div>
                                                        <div class="d-flex">
                                                           <span class="text-success" style="color: #03a678">
                                                                <i class="mdi mdi-arrow-up"></i>180&percnt;
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex justify-content-between">
                                                    <div class="card-list">

                                                        <span> Poland</span>
                                                    </div>
                                                    <div>
                                                        <div class="numbers">
                                                            <h6>11</h6>
                                                        </div>
                                                        <div class="d-flex">
                                                            <span class="text-success" style="color: #03a678">
                                                                <i class="mdi mdi-arrow-up"></i>666&percnt;
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex justify-content-between">
                                                    <div class="card-list">

                                                        <span>Philippines</span>
                                                    </div>
                                                    <div>
                                                        <div class="numbers">
                                                            <h6>11</h6>
                                                        </div>
                                                        <div class="d-flex">
                                                            <span class="text-success" style="color: #03a678">
                                                                <i class="mdi mdi-arrow-up"></i>900&percnt;
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex justify-content-between">
                                                    <div class="card-list">

                                                        <span> Mali</span>
                                                    </div>
                                                    <div>
                                                        <div class="numbers">
                                                            <h6>9</h6>
                                                        </div>
                                                        <div class="d-flex">
                                                            <span class="text-success" style="color: #03a678">
                                                                <i class="mdi mdi-arrow-up"></i>106&percnt;
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex justify-content-between">
                                                    <div class="card-list">

                                                        <span> Ghana</span>
                                                    </div>
                                                    <div>
                                                        <div class="numbers">
                                                            <h6>166</h6>
                                                        </div>
                                                        <div class="d-flex">
                                                            <span class="text-success" style="color: #03a678">
                                                                <i class="mdi mdi-arrow-up"></i>333&percnt;
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="accordion md-accordion card-groups card-group2"
                                id="accordionEx"
                                role="tablist"
                                aria-multiselectable="false"
                            >
                                <div class="lineup top-company-info">
                                    <div class="d-flex justify-content-between">
                                        <div><h5>Top Company Sites</h5></div>
                                        <div class="card-header" role="tab" id="headingThree3">
                                            <a
                                                data-toggle="collapse"
                                                data-parent="#accordionEx"
                                                href="#top-company-site"
                                                aria-expanded="true"
                                                aria-controls="collapseOne1"
                                            >
                                                <span id="top-company-site-minus">
                                                    <i class="mdi mdi-minus"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>


                                </div>
                                <div
                                    id="top-company-site"
                                    class="collapse show"
                                    role="tabpanel"
                                    aria-labelledby="headingThree3"
                                    data-parent="#accordionEx1"
                                >
                                    <ul class="days">
                                        <li>Yesterday</li>
                                        <li>
                                            <button>Today</button>
                                        </li>
                                        <li>Tomorrow</li>
                                    </ul>
                                    <div class="lineups company-lineup">
                                        <ul>
                                            <li>
                                                <div class="company-list d-flex justify-content-between">
                                                    <div class="card-list">
                                                        <h6>Tele-performance</h6>
                                                    </div>
                                                    <div>
                                                        <div class="numbers">
                                                            <h6>36</h6>
                                                        </div>
                                                        <div class="d-flex">
                                                            <span class="text-succes" style="color: #03a678">
                                                                <i class="mdi mdi-arrow-up"></i>336&percnt;
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div
                                                    class="company-list d-flex justify-content-between"
                                                >
                                                    <div class="card-list">
                                                        <h6>FIS</h6>
                                                    </div>
                                                    <div>
                                                        <div class="numbers">
                                                            <h6>14</h6>
                                                        </div>
                                                        <div class="d-flex">
                                                            <span class="text-succes" style="color: #03a678">
                                                                <i class="mdi mdi-arrow-up"></i>180&percnt;
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div
                                                    class="company-list d-flex justify-content-between"
                                                >
                                                    <div class="card-list">
                                                        <h6>WNS</h6>
                                                    </div>
                                                    <div>
                                                        <div class="numbers">
                                                            <h6>11</h6>
                                                        </div>
                                                        <div class="d-flex">
                                                            <span class="text-succes" style="color: #03a678">
                                                                <i class="mdi mdi-arrow-up"></i>666&percnt;
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div
                                                    class="company-list d-flex justify-content-between"
                                                >
                                                    <div class="card-list">
                                                        <h6>Genpact</h6>
                                                    </div>
                                                    <div>
                                                        <div class="numbers">
                                                            <h6>11</h6>
                                                        </div>
                                                        <div class="d-flex">
                                                            <span class="text-succes" style="color: #03a678">
                                                                <i class="mdi mdi-arrow-up"></i>900&percnt;
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div
                                                    class="company-list d-flex justify-content-between"
                                                >
                                                    <div class="card-list">
                                                        <h6>Accenture</h6>
                                                    </div>
                                                    <div>
                                                        <div class="numbers">
                                                            <h6>9</h6>
                                                        </div>
                                                        <div class="d-flex">
                                                            <span class="text-succes" style="color: #e3342f">
                                                                <i class="mdi mdi-arrow-down"></i>106&percnt;
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-accordion">

                            <div
                                class="accordion md-accordion card-groups card-group2"
                                id="accordionEx"
                                role="tablist"
                                aria-multiselectable="false">
                                <div class="lineup top-company-info">
                                    <div class="d-flex justify-content-between">
                                        <div><h5>Top Recruiters</h5></div>
                                        <div class="card-header" role="tab" id="headingFour4">
                                            <a
                                                data-toggle="collapse"
                                                data-parent="#accordionEx"
                                                href="#top-recruiter"
                                                aria-expanded="true"
                                                aria-controls="collapseOne1"
                                            >
                                                <span id="top-recruiter-minus">
                                                    <i class="mdi mdi-minus"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    id="top-recruiter"
                                    class="collapse show"
                                    role="tabpanel"
                                    aria-labelledby="headingFour4"
                                    data-parent="#accordionEx"
                                >
                                    <ul class="days">
                                        <li>Yesterday</li>
                                        <li>
                                            <button>Today</button>
                                        </li>
                                        <li>Tomorrow</li>
                                    </ul>
                                    <div class="lineups recruiter-lineup">
                                        <ul>
                                            <li>
                                                <div class="d-flex justify-content-between">
                                                    <div class="user-info">
                                                        <div class="mr-1">
                                                            <img src="/img/default_profile_image.png" class="rounded-circle" alt="user image">
                                                        </div>
                                                        <div class="user">
                                                            <h6>Raghu</h6>
                                                            <small>India. Mumbai</small>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="numbers">
                                                            <h6>36</h6>
                                                        </div>
                                                        <div class="d-flex">
                                                            <span class="text-succes" style="color: #03a678">
                                                                <i class="mdi mdi-arrow-up"></i>336&percnt;
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex justify-content-between">
                                                    <div class="user-info">
                                                        <div class="mr-1">
                                                            <img src="/img/default_profile_image.png" class="rounded-circle" alt="user image">
                                                        </div>
                                                        <div class="user">
                                                            <h6>Hemanth Patil</h6>
                                                            <small>India. Mumbai</small>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="numbers">
                                                            <h6>14</h6>
                                                        </div>
                                                        <div class="d-flex">
                                                            <span class="text-succes" style="color: #03a678">
                                                                <i class="mdi mdi-arrow-up"></i>180&percnt;
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex justify-content-between">
                                                    <div class="user-info">
                                                        <div class="mr-1">
                                                            <img
                                                                src="/img/default_profile_image.png"
                                                                class="rounded-circle"
                                                                alt="user image"
                                                            />
                                                        </div>
                                                        <div class="user">
                                                            <h6>Akang Ekaette Helen</h6>
                                                            <small>India. Mumbai</small>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="numbers">
                                                            <h6>11</h6>
                                                        </div>
                                                        <div class="d-flex">
                                                            <span class="text-succes" style="color: #03a678">
                                                                <i class="mdi mdi-arrow-up"></i>666&percnt;
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex justify-content-between">
                                                    <div class="user-info">
                                                        <div class="mr-1">
                                                            <img
                                                                src="/img/default_profile_image.png"
                                                                class="rounded-circle"
                                                                alt="user image"
                                                            />
                                                        </div>
                                                        <div class="user">
                                                            <h6>Hemanth Patil</h6>
                                                            <small>India. Mumbai</small>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="numbers">
                                                            <h6>11</h6>
                                                        </div>
                                                        <div class="d-flex">
                                                            <span class="text-succes" style="color: #03a678">
                                                                <i class="mdi mdi-arrow-up"></i>900&percnt;
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex justify-content-between">
                                                    <div class="user-info">
                                                        <div class="mr-1">
                                                            <img
                                                                src="/img/default_profile_image.png"
                                                                class="rounded-circle"
                                                                alt="user image"
                                                            />
                                                        </div>
                                                        <div class="user">
                                                            <h6>Shaira Maae G.Yunque</h6>
                                                            <small>India. Mumbai</small>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="numbers">
                                                            <h6>9</h6>
                                                        </div>
                                                        <div class="d-flex">
                                                            <span class="text-succes" style="color: #e3342f">
                                                                <i class="mdi mdi-arrow-down"></i>106&percnt;
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-accordion">
                            <div
                                class="accordion md-accordion card-groups card-group2"
                                id="accordionEx"
                                role="tablist"
                                aria-multiselectable="false"
                            >
                                <div class="lineup top-company-info">
                                    <div class="d-flex justify-content-between">
                                        <div><h5>Top Companies</h5></div>
                                        <div class="card-header" role="tab" id="headingTwo2">
                                            <a
                                                data-toggle="collapse"
                                                data-parent="#accordionEx"
                                                href="#top-companies"
                                                aria-expanded="true"
                                                aria-controls="collapseOne1"
                                            >
                                                <span id="top-companies-minus">
                                                    <i class="mdi mdi-minus"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    id="top-companies"
                                    class="collapse show company-lineup"
                                    role="tabpanel"
                                    aria-labelledby="headingTwo2"
                                    data-parent="#accordionEx"
                                >
                                    <ul class="days">
                                        <li>Yesterday</li>
                                        <li>
                                            <button>Today</button>
                                        </li>
                                        <li>Tomorrow</li>
                                    </ul>
                                    <div class="lineups company-lineup">
                                        <ul>
                                            <li>
                                                <div class="company-list d-flex justify-content-between">
                                                    <div class="card-list">
                                                        <h6>Tele-performance</h6>
                                                    </div>
                                                    <div>
                                                        <div class="numbers">
                                                            <h6>36</h6>
                                                        </div>
                                                        <div class="d-flex">
                                                            <span class="text-succes" style="color: #03a678">
                                                                <i class="mdi mdi-arrow-up"></i>336&percnt;
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div
                                                    class="company-list d-flex justify-content-between"
                                                >
                                                    <div class="card-list">
                                                        <h6>FIS</h6>
                                                    </div>
                                                    <div>
                                                        <div class="numbers">
                                                            <h6>14</h6>
                                                        </div>
                                                        <div class="d-flex">
                                                            <span class="text-succes" style="color: #03a678">
                                                                <i class="mdi mdi-arrow-up"></i>180&percnt;
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div
                                                    class="company-list d-flex justify-content-between"
                                                >
                                                    <div class="card-list">
                                                        <h6>WNS</h6>
                                                    </div>
                                                    <div>
                                                        <div class="numbers">
                                                            <h6>11</h6>
                                                        </div>
                                                        <div class="d-flex">
                                                            <span class="text-succes" style="color: #03a678">
                                                                <i class="mdi mdi-arrow-up"></i>666&percnt;
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div
                                                    class="company-list d-flex justify-content-between"
                                                >
                                                    <div class="card-list">
                                                        <h6>Genpact</h6>
                                                    </div>
                                                    <div>
                                                        <div class="numbers">
                                                            <h6>11</h6>
                                                        </div>
                                                        <div class="d-flex">
                                                            <span class="text-succes" style="color: #03a678">
                                                                <i class="mdi mdi-arrow-up"></i>900&percnt;
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div
                                                    class="company-list d-flex justify-content-between"
                                                >
                                                    <div class="card-list">
                                                        <h6>Accenture</h6>
                                                    </div>
                                                    <div>
                                                        <div class="numbers">
                                                            <h6>9</h6>
                                                        </div>
                                                        <div class="d-flex">
                                                            <span class="text-succes" style="color: #e3342f">
                                                                <i class="mdi mdi-arrow-down"></i>106&percnt;
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div
                    class="tab-pane fade"
                    id="pills-candidates"
                    role="tabpanel"
                    aria-labelledby="pills-candidates-tab"
                >
                    <div class=" row card-group-wrapper">

                        <div class="card-accordion">
                            <div
                                class="accordion md-accordion card-groups card-group1"
                                id="accordionEx"
                                role="tablist"
                                aria-multiselectable="false"
                            >
                                <div class="d-flex justify-content-between">
                                    <div><h5>Top Countries</h5></div>
                                    <div class="card-header" role="tab" id="headingOne1">
                                        <a
                                            data-toggle="collapse"
                                            data-parent="#accordionEx"
                                            href="#countries"
                                            aria-expanded="true"
                                            aria-controls="collapseOne1"
                                        >
                                                <span id="country-minus">
                                                    <i class="mdi mdi-minus"></i>
                                                </span>

                                        </a>
                                    </div>
                                </div>
                                <div
                                    id="countries"
                                    class="collapse show"
                                    role="tabpanel"
                                    aria-labelledby="headingOne1"
                                    data-parent="#accordionEx"
                                >

                                    <ul class="days">
                                        <li>Yesterday</li>
                                        <li>
                                            <button>Today</button>
                                        </li>
                                        <li>Tomorrow</li>
                                    </ul>
                                    <div class="lineups country-lineup">
                                        <ul class="cross-nav">
                                            <li>
                                                <div class="d-flex justify-content-between">
                                                    <div class="card-list">

                                                        <span> India</span>
                                                    </div>
                                                    <div>
                                                        <div class="numbers">
                                                            <h6>36</h6>
                                                        </div>
                                                        <div class="d-flex">
                                                            <span class="text-success" style="color: #03a678">
                                                                <i class="mdi mdi-arrow-up"></i>336&percnt;
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex justify-content-between">
                                                    <div class="card-list">

                                                        <span>Nigeria</span>
                                                    </div>
                                                    <div>
                                                        <div class="numbers">
                                                            <h6>14</h6>
                                                        </div>
                                                        <div class="d-flex">
                                                           <span class="text-success" style="color: #03a678">
                                                                <i class="mdi mdi-arrow-up"></i>180&percnt;
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex justify-content-between">
                                                    <div class="card-list">

                                                        <span> Poland</span>
                                                    </div>
                                                    <div>
                                                        <div class="numbers">
                                                            <h6>11</h6>
                                                        </div>
                                                        <div class="d-flex">
                                                            <span class="text-success" style="color: #03a678">
                                                                <i class="mdi mdi-arrow-up"></i>666&percnt;
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex justify-content-between">
                                                    <div class="card-list">

                                                        <span>Philippines</span>
                                                    </div>
                                                    <div>
                                                        <div class="numbers">
                                                            <h6>11</h6>
                                                        </div>
                                                        <div class="d-flex">
                                                            <span class="text-success" style="color: #03a678">
                                                                <i class="mdi mdi-arrow-up"></i>900&percnt;
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex justify-content-between">
                                                    <div class="card-list">

                                                        <span> Mali</span>
                                                    </div>
                                                    <div>
                                                        <div class="numbers">
                                                            <h6>9</h6>
                                                        </div>
                                                        <div class="d-flex">
                                                            <span class="text-success" style="color: #03a678">
                                                                <i class="mdi mdi-arrow-up"></i>106&percnt;
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex justify-content-between">
                                                    <div class="card-list">

                                                        <span> Ghana</span>
                                                    </div>
                                                    <div>
                                                        <div class="numbers">
                                                            <h6>166</h6>
                                                        </div>
                                                        <div class="d-flex">
                                                            <span class="text-success" style="color: #03a678">
                                                                <i class="mdi mdi-arrow-up"></i>333&percnt;
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-accordion">
                            <div
                                class="accordion md-accordion card-groups card-group2"
                                id="accordionEx"
                                role="tablist"
                                aria-multiselectable="false">
                                <div class="lineup top-company-info">
                                    <div class="d-flex justify-content-between">
                                        <div><h5>Top Recruiters</h5></div>
                                        <div class="card-header" role="tab" id="headingFour4">
                                            <a
                                                data-toggle="collapse"
                                                data-parent="#accordionEx"
                                                href="#top-recruiter"
                                                aria-expanded="true"
                                                aria-controls="collapseOne1"
                                            >
                                                <span id="top-recruiter-minus">
                                                    <i class="mdi mdi-minus"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    id="top-recruiter"
                                    class="collapse show"
                                    role="tabpanel"
                                    aria-labelledby="headingFour4"
                                    data-parent="#accordionEx"
                                >
                                    <ul class="days">
                                        <li>Yesterday</li>
                                        <li>
                                            <button>Today</button>
                                        </li>
                                        <li>Tomorrow</li>
                                    </ul>
                                    <div class="lineups recruiter-lineup">
                                        <ul>
                                            <li>
                                                <div class="d-flex justify-content-between">
                                                    <div class="user-info">
                                                        <div class="mr-1">
                                                            <img src="/img/default_profile_image.png" class="rounded-circle" alt="user image">
                                                        </div>
                                                        <div class="user">
                                                            <h6>Raghu</h6>
                                                            <small>India. Mumbai</small>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="numbers">
                                                            <h6>36</h6>
                                                        </div>
                                                        <div class="d-flex">
                                                            <span class="text-succes" style="color: #03a678">
                                                                <i class="mdi mdi-arrow-up"></i>336&percnt;
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex justify-content-between">
                                                    <div class="user-info">
                                                        <div class="mr-1">
                                                            <img src="/img/default_profile_image.png" class="rounded-circle" alt="user image">
                                                        </div>
                                                        <div class="user">
                                                            <h6>Hemanth Patil</h6>
                                                            <small>India. Mumbai</small>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="numbers">
                                                            <h6>14</h6>
                                                        </div>
                                                        <div class="d-flex">
                                                            <span class="text-succes" style="color: #03a678">
                                                                <i class="mdi mdi-arrow-up"></i>180&percnt;
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex justify-content-between">
                                                    <div class="user-info">
                                                        <div class="mr-1">
                                                            <img
                                                                src="/img/default_profile_image.png"
                                                                class="rounded-circle"
                                                                alt="user image"
                                                            />
                                                        </div>
                                                        <div class="user">
                                                            <h6>Akang Ekaette Helen</h6>
                                                            <small>India. Mumbai</small>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="numbers">
                                                            <h6>11</h6>
                                                        </div>
                                                        <div class="d-flex">
                                                            <span class="text-succes" style="color: #03a678">
                                                                <i class="mdi mdi-arrow-up"></i>666&percnt;
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex justify-content-between">
                                                    <div class="user-info">
                                                        <div class="mr-1">
                                                            <img
                                                                src="/img/default_profile_image.png"
                                                                class="rounded-circle"
                                                                alt="user image"
                                                            />
                                                        </div>
                                                        <div class="user">
                                                            <h6>Hemanth Patil</h6>
                                                            <small>India. Mumbai</small>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="numbers">
                                                            <h6>11</h6>
                                                        </div>
                                                        <div class="d-flex">
                                                            <span class="text-succes" style="color: #03a678">
                                                                <i class="mdi mdi-arrow-up"></i>900&percnt;
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex justify-content-between">
                                                    <div class="user-info">
                                                        <div class="mr-1">
                                                            <img
                                                                src="/img/default_profile_image.png"
                                                                class="rounded-circle"
                                                                alt="user image"
                                                            />
                                                        </div>
                                                        <div class="user">
                                                            <h6>Shaira Maae G.Yunque</h6>
                                                            <small>India. Mumbai</small>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="numbers">
                                                            <h6>9</h6>
                                                        </div>
                                                        <div class="d-flex">
                                                            <span class="text-succes" style="color: #e3342f">
                                                                <i class="mdi mdi-arrow-down"></i>106&percnt;
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src=" {{ url('https://code.jquery.com/jquery-3.3.1.slim.min.js') }} " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src=" {{ url('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js') }} " integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

</body>
</html>
