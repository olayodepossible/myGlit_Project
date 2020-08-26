@extends('layouts.jobs')
@section('title')
    Job Search
@endsection

@section('style')
    <style>
        #jobSearch{
            padding: 20px;
        }
        #jobSearch  .result-text{
            font-size: 13px;
        }

        #jobSearch .jobSearch-wrapper{
            padding-top:  10px;
        }

        #jobSearch .left-filter {
            border-radius: 3px;
            padding: 20px;
            color: #333
        }

        #jobSearch .left-filter .filter_menu{
            padding-top: 20px;
        }
        #jobSearch .form-control {
            border: 0 !important;
            background-color: #F6F6F6;
        }
        #jobSearch .form-control:focus {
            outline: 0;
            box-shadow: none!important;
        }

        /*#jobSearch .sideBar_menu_item {
            border: 0;
            background-color: #F6F6F6;
            margin-bottom: 10px;
            border-radius: 5px;
            padding: 10px;
        }
        #jobSearch .sideBar_menu_item .dropdown-item{
            background-color: #fff;
            margin-bottom: 5px;
        }*/

        #jobSearch .advert{
            padding-bottom: 10px;
        }
        #jobSearch .advert img{
            width: 275px;
            border-radius: 5px;

        }

        #jobSearch .pagination_section{
            padding: 10px 0 0 20px;
            color: #999;
            font-size: 12px;
        }
        #jobSearch .pagination_section a{
            padding: 5px
        }
        #jobSearch .pagination_section  .page{
            background-color: #CCCCCC;
            color: #333333;
        }
        #jobSearch .pagination_section .page-num:focus{
            border: 1px solid #E33D47;
        }


        @media screen and (min-width: 600px) and (max-width: 768px) {
            #jobSearch .advert img{
                width: 100%;
            }
            #jobSearch .pagination_section{
                padding-left: 250px;
                font-size: 14px;
            }
            #jobSearch .pagination_section a{
                padding: 10px
            }

        }


        @media screen and (min-width: 769px){
            #jobSearch  .result-text{
                padding: 30px 0 15px 30px;
            }
            #jobSearch .jobSearch-wrapper{
                display: flex;
                padding: 15px 30px;
            }
            #jobSearch .left-filter {
                width: 300px;
                margin: 0 20px 0 0;
                height: 400px;
                padding: 10px;
                color: #333
            }
            #jobSearch .left-filter h6{
                padding: 15px 10px;
            }
            #jobSearch .form-group{
                margin: 10px;
            }
            #jobSearch .advert img{
                width: 100%;
            }

            #jobSearch .pagination_section{
                padding-left: 330px;
                font-size: 14px;
            }
            #jobSearch .pagination_section a{
                padding: 10px
            }
        }
    </style>
@endsection

@section('content')
    <div id="jobSearch">
        <p class="result-text">Showing 1-5 of over 3000 results for <span style="color: #2979FF;">'frontend developer, mumbai</span></p>

        <div class="jobSearch-wrapper">

            <div  class="cards left-filter">
                <h6 >Filter Your Search</h6>

                <form class="filter_menu">
                    <div class="form-group ">
                        <span>
                            <select name="" class="form-control " id="">
                                <option>Function</option>
                                <option >Function</option>
                                <option >Function</option>
                            </select>
                        </span>


                    </div>
                    <div class="form-group ">
                        <select name="" class=" form-control" id="">
                            <option>Location</option>
                            <option >Location</option>
                            <option >Location</option>
                        </select>
                    </div>
                    <div class="form-group ">
                        <select name="" class=" form-control" id="">
                            <option>Role</option>
                            <option >Role</option>
                            <option >Role</option>
                        </select>
                    </div>
                    <div class="form-group ">
                        <select name="" class=" form-control" id="">
                            <option>Industry</option>
                            <option >Industry</option>
                            <option >Industry</option>
                        </select>
                    </div>
                    <div class="form-group ">
                        <select name="" class=" form-control" id="">
                            <option>Experience</option>
                            <option >Experience</option>
                            <option >Experience</option>
                        </select>
                    </div>
                    <div class="form-group ">

                        <select name="" class=" form-control " id="">
                            <option>Job Type</option>
                            <option >Job Type</option>
                            <option >Job Type</option>
                        </select>
                    </div>
                </form>


                {{--<ul class="filter_menu">

                    <li  class = "sideBar_menu_item">
                        <a href="#function" data-toggle="collapse" class="d-flex justify-content-between">
                            <p>Function</p>
                            <p class="arrowD ">
                                <svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" width="20px" height="20px">
                                    <path d="M0 0h24v24H0V0z" fill="none"/>
                                    <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"/>
                                </svg>
                            </p>
                        </a>
                        <div id="function" class="collapse">
                            <a class="dropdown-item" href="#">Function</a>
                            <a class="dropdown-item" href="#">Function</a>
                            <a class="dropdown-item" href="#">Function</a>
                        </div>

                    </li>
                    <li  class = "sideBar_menu_item">
                        <a href="#location" data-toggle="collapse" class="d-flex justify-content-between">
                            <p>Location</p>
                            <p class="arrowD ">
                                <svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" width="20px" height="20px">
                                    <path d="M0 0h24v24H0V0z" fill="none"/>
                                    <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"/>
                                </svg>
                            </p>
                        </a>
                        <div id="location" class="collapse">
                            <a class="dropdown-item" href="#">Location</a>
                            <a class="dropdown-item" href="#">Location</a>
                            <a class="dropdown-item" href="#">Location</a>
                        </div>

                    </li>
                    <li  class = "sideBar_menu_item">
                        <a href="#role" data-toggle="collapse" class="d-flex justify-content-between">
                            <p>Role</p>
                            <p class="arrowD ">
                                <svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" width="20px" height="20px">
                                    <path d="M0 0h24v24H0V0z" fill="none"/>
                                    <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"/>
                                </svg>
                            </p>
                        </a>
                        <div id="role" class="collapse">
                            <a class="dropdown-item" href="#">Role</a>
                            <a class="dropdown-item" href="#">Role</a>
                            <a class="dropdown-item" href="#">Role</a>
                        </div>

                    </li>
                    <li  class = "sideBar_menu_item">
                        <a href="#industry" data-toggle="collapse" class="d-flex justify-content-between">
                            <p>Industry</p>
                            <p class="arrowD ">
                                <svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" width="20px" height="20px">
                                    <path d="M0 0h24v24H0V0z" fill="none"/>
                                    <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"/>
                                </svg>
                            </p>
                        </a>
                        <div id="industry" class="collapse">
                            <a class="dropdown-item" href="#">Industry</a>
                            <a class="dropdown-item" href="#">Industry</a>
                            <a class="dropdown-item" href="#">Industry</a>
                        </div>

                    </li>
                    <li  class = "sideBar_menu_item">
                        <a href="#experience" data-toggle="collapse" class="d-flex justify-content-between">
                            <p>Experience</p>
                            <p class="arrowD ">
                                <svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" width="20px" height="20px">
                                    <path d="M0 0h24v24H0V0z" fill="none"/>
                                    <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"/>
                                </svg>
                            </p>
                        </a>
                        <div id="experience" class="collapse">
                            <a class="dropdown-item" href="#">Experience</a>
                            <a class="dropdown-item" href="#">Experience</a>
                            <a class="dropdown-item" href="#">Experience</a>
                        </div>

                    </li>
                    <li  class = "sideBar_menu_item">
                        <a href="#job-type" data-toggle="collapse" class="d-flex justify-content-between">
                            <p>Job Type</p>
                            <p class="arrowD ">
                                <svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" width="20px" height="20px">
                                    <path d="M0 0h24v24H0V0z" fill="none"/>
                                    <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"/>
                                </svg>
                            </p>
                        </a>
                        <div id="job-type" class="collapse">
                            <a class="dropdown-item" href="#">Job Type</a>
                            <a class="dropdown-item" href="#">Job Type</a>
                            <a class="dropdown-item" href="#">Job Type</a>
                        </div>

                    </li>

                </ul>--}}
            </div>


            <div class="jobComponent">
                @component('layouts.components.jobCard', [
                'jobName' => "Frontend Developer",
                'company' => 'Gratitude India',
                'numView' => '34061',
                'day_posted' => '2',
                'yearsOfExperience' => '0-10',
                'job_location' => 'Mumbai, Maharashtra',
                'job_desc' => 'Experience in CSS3 and creating wireframes and mockupsExperience in designing for vario...',
                'follower'=>'115'
            ])
            @endcomponent

            @component('layouts.components.jobCard', [
                'jobName' => "Frontend Developer",
                'company' => 'Gratitude India',
                'numView' => '34061',
                'day_posted' => '2',
                'yearsOfExperience' => '0-10',
                'job_location' => 'Mumbai, Maharashtra',
                'job_desc' => 'Experience in CSS3 and creating wireframes and mockupsExperience in designing for vario...',
                'follower'=>'115'
            ])
            @endcomponent

                <div class=" advert">
                    <img src="/img/ads.png"/>
                </div>


             @component('layouts.components.jobCard', [
                'jobName' => "Frontend Developer",
                'company' => 'Gratitude India',
                'numView' => '34061',
                'day_posted' => '2',
                'yearsOfExperience' => '0-10',
                'job_location' => 'Mumbai, Maharashtra',
                'job_desc' => 'Experience in CSS3 and creating wireframes and mockupsExperience in designing for vario...',
                'follower'=>'115'
            ])
            @endcomponent


            @component('layouts.components.jobCard', [
                'jobName' => "Frontend Developer",
                'company' => 'Gratitude India',
                'numView' => '34061',
                'day_posted' => '2',
                'yearsOfExperience' => '0-10',
                'job_location' => 'Mumbai, Maharashtra',
                'job_desc' => 'Experience in CSS3 and creating wireframes and mockupsExperience in designing for vario...',
                'follower'=>'115'
            ])
            @endcomponent


            @component('layouts.components.jobCard', [
                'jobName' => "Frontend Developer",
                'company' => 'Gratitude India',
                'numView' => '34061',
                'day_posted' => '2',
                'yearsOfExperience' => '0-10',
                'job_location' => 'Mumbai, Maharashtra',
                'job_desc' => 'Experience in CSS3 and creating wireframes and mockupsExperience in designing for vario...',
                'follower'=>'115'
            ])
            @endcomponent

                <div class=" advert">
                    <img src="/img/ads.png"/>
                </div>


            @component('layouts.components.jobCard', [
                'jobName' => "Frontend Developer",
                'company' => 'Gratitude India',
                'numView' => '34061',
                'day_posted' => '2',
                'yearsOfExperience' => '0-10',
                'job_location' => 'Mumbai, Maharashtra',
                'job_desc' => 'Experience in CSS3 and creating wireframes and mockupsExperience in designing for vario...',
                'follower'=>'115'
            ])
            @endcomponent

            @component('layouts.components.jobCard', [
                'jobName' => "Frontend Developer",
                'company' => 'Gratitude India',
                'numView' => '34061',
                'day_posted' => '2',
                'yearsOfExperience' => '0-10',
                'job_location' => 'Mumbai, Maharashtra',
                'job_desc' => 'Experience in CSS3 and creating wireframes and mockupsExperience in designing for vario...',
                'follower'=>'115'
            ])
            @endcomponent

            @component('layouts.components.jobCard', [
                'jobName' => "Frontend Developer",
                'company' => 'Gratitude India',
                'numView' => '34061',
                'day_posted' => '2',
                'yearsOfExperience' => '0-10',
                'job_location' => 'Mumbai, Maharashtra',
                'job_desc' => 'Experience in CSS3 and creating wireframes and mockupsExperience in designing for vario...',
                'follower'=>'115'
            ])
            @endcomponent


            @component('layouts.components.jobCard', [
                'jobName' => "Frontend Developer",
                'company' => 'Gratitude India',
                'numView' => '34061',
                'day_posted' => '2',
                'yearsOfExperience' => '0-10',
                'job_location' => 'Mumbai, Maharashtra',
                'job_desc' => 'Experience in CSS3 and creating wireframes and mockupsExperience in designing for vario...',
                'follower'=>'115'
            ])
            @endcomponent

                <!-- pagination elements -->
                    <div class="pagination_section">

                        <a href="/page/prev" class="page"> Previous</a>
                        <a href="/page1" class="page-num" title="pageOne">1</a>
                        <a href="/page2" class="page-num" title="pageTwo">2</a>
                        <a href="/page3" class="page-num"title="pageThree">3</a>
                        <a href="/page4" class="page-num" title="pageFour">4</a>
                        <a href="/page5" class="page-num" title="pageFive">5</a>
                        <a href="/page6" class="page-num"title="pageSix">6</a>
                        <a href="/page/next" class="page">Next </a>
                    </div>
            </div>
        </div>

    </div>
@endsection
