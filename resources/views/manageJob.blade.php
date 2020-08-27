@extends('layouts.jobs')

@section('title')
    Manage Jobs
@endsection

@section('style')
    <style>
        #manageJob{
            margin: 20px;
        }
        #manageJob h5{
            margin: 40px 0 20px 0;
        }
        #manageJob .wrapper_class{
            width: 100%;
            margin-right: auto;
            margin-left: auto;
        }
        #manageJob .job_table{
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        #manageJob .job_table div{
            border-bottom: 1px solid #ddd;
            padding: 10px;
            width: 100%;
        }
        #manageJob .job_table p{
            font-size: 12px;
        }
        #manageJob .tHead,
        #manageJob .tBody{
            display: grid;
        }
        #manageJob .tHead{
            grid-template-columns: 6fr 2fr 4fr;
            background-color: #F7F7FC;
        }
        #manageJob .tHead p{
            font-weight: 600;
            padding: 0 ;
            margin: 0;
            font-size: 14px;
        }
        #manageJob .hide-small{
            visibility: hidden;
        }

        #manageJob .tBody{
            grid-template-columns: 6fr 1fr 1fr 1fr;
        }

        #manageJob .tBody p:first-child{
            width: 150px;
        }
        #manageJob .tBody span{
            color: #2979FF;
            text-decoration: underline;
        }
        #manageJob .date_class{
        display: none;
        }
        #manageJob .advert img{
            width: 100%;
            height: 200px;
            border-radius: 5px;
            margin-top: 10px;
        }


        /* Medium Screen*/
        @media screen and (min-width: 600px) {
            #manageJob .wrapper_class{
                display: flex;
            }
            #manageJob h5{
               font-size: 24px;
            }
            #manageJob .job_table p{
                font-size: 16px;
            }
            #manageJob .tBody p:first-child {
               width: 290px;
            }
            #manageJob .advert img{
                width: 200px;
                margin: 0 auto 10px 10px;
            }
            #manageJob .hide-small{
                visibility: hidden;
            }
        }


        /* Large Screen*/
        @media screen and (min-width: 992px){

            #manageJob .wrapper_class{
                display: flex;
            }
            #manageJob h5{
                font-size: 24px;
            }
            #manageJob .job_table{
                width: 100%;
            }
            #manageJob .job_table p{
                font-size: 16px;
            }
            #manageJob .tBody{
                grid-template-columns: 6fr 2fr 2fr 1fr 1fr;
            }
            #manageJob .hide-small{
                visibility: visible;
            }
            #manageJob .date_class{
                display: block;
            }
            #manageJob .advert img {
                width: 280px;
                margin: 0 auto 10px 10px;
                height: 250px;
            }
        }
    </style>
@endsection

@section('content')
    <div id="manageJob" >
        <h5>Manage Jobs</h5>
            <div class=" wrapper_class">

                <div class="job_table ">
                    <div class="tHead">
                        <p> Job Title</p>
                        <p class="hide-small">Posted on</p>
                        <p>Responses</p>
                    </div>
                    <div class="tBody">
                        <p>Hiring For Senior Analyst - Finance </p>
                        <p class="date_class">2-3-2020</p>
                        <p><span>20</span></p>
                        <p> <i class="mdi mdi-pencil"></i> </p>
                        <p> <i class="mdi mdi-vector-arrange-below"></i></p>
                    </div>
                    <div class="tBody ">
                        <p>Urgent Opening For Mainframe Developer - Pune</p>
                        <p class="date_class">17-5-2020</p>
                        <p> <span>120</span></p>
                        <p> <i class="mdi mdi-pencil"></i> </p>
                        <p> <i class="mdi mdi-vector-arrange-below"></i></p>
                    </div>
                    <div class="tBody ">
                        <p>Hiring For - SR.Executive - Accounts Payable - Immediate joiners only</p>
                        <p class="date_class">18-8-2020</p>
                        <p><span>600</span></p>
                        <p> <i class="mdi mdi-pencil"></i> </p>
                        <p> <i class="mdi mdi-vector-arrange-below"></i></p>
                    </div>
                    <div class="tBody">
                        <p>Hiring For Senior Analyst - Finance</p>
                        <p class="date_class ">2-3-2020</p>
                        <p><span>20</span></p>
                        <p> <i class="mdi mdi-pencil"></i> </p>
                        <p> <i class="mdi mdi-vector-arrange-below"></i></p>
                    </div>
                    <div class="tBody ">
                        <p>Urgent Opening For Mainframe Developer - Pune</p>
                        <p class="date_class ">17-5-2020</p>
                        <p> <span>120</span></p>
                        <p> <i class="mdi mdi-pencil"></i> </p>
                        <p> <i class="mdi mdi-vector-arrange-below"></i></p>
                    </div>
                    <div class="tBody ">
                        <p>Hiring For - SR.Executive - Accounts Payable - Immediate joiners only</p>
                        <p class="date_class">18-8-2020</p>
                        <p><span>600</span></p>
                        <p> <i class="mdi mdi-pencil"></i> </p>
                        <p> <i class="mdi mdi-vector-arrange-below"></i></p>
                    </div>
                    <div class="tBody">
                        <p>Urgent Opening For Mainframe Developer - Pune</p>
                        <p class="date_class">17-5-2020</p>
                        <p> <span>120</span></p>
                        <p> <i class="mdi mdi-pencil"></i> </p>
                        <p> <i class="mdi mdi-vector-arrange-below"></i></p>
                    </div>
                </div>

                <div class="advert ">
                    <div>
                        <img src="{{ url('img/camera.png') }}" alt="">
                    </div>
                    <div>
                        <img src="{{ url('img/camera.png') }}" alt="">
                    </div>
                </div>

        </div>
    </div>

@endsection

