@extends('layouts.jobs')

@section('title')
    Candidate Manage Jobs
@endsection

@section('style')
    <style>
        #candidateManageJob{
            margin: 20px;
        }
        #candidateManageJob h5{
            margin: 40px 0 20px 0;
        }
        #candidateManageJob .wrapper_class{
            width: 100%;
            margin-right: auto;
            margin-left: auto;
        }
        #candidateManageJob .job_table{
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 5px;
            border-top: none;
        }
        #candidateManageJob .job_table div{
            border-top: 1px solid #ddd;
            padding: 10px;
            width: 100%;
        }
        #candidateManageJob .job_table p{
            font-size: 12px;
        }
        #candidateManageJob .tHead,
        #candidateManageJob .tBody{
            display: grid;
        }
        #candidateManageJob .tHead{
            display: flex;
            justify-content: space-between;
            background-color: #F7F7FC;
        }
        #candidateManageJob .tBody{
            display: grid;
            grid-template-columns: repeat(2, auto);
        }
        #candidateManageJob .tHead p{
            font-weight: 600;
            padding: 10px ;
            margin: 0;
            font-size: 14px;
        }
        #candidateManageJob .tBody p:first-child{
            width: 150px;
        }

        #candidateManageJob .tBody p:nth-child(3){
            background-color: #E33D47;
            border-radius: 5px;
            color: #fff;
            width: 80px;
            height: 30px;
            padding: 5px;
            margin: 5px;
            text-align: center;
        }

        #candidateManageJob .advert img{
            width: 100%;
            height: 200px;
            border-radius: 5px;
            margin-top: 10px;
        }


        /* Medium Screen*/
        @media screen and (min-width: 600px) {
            #candidateManageJob .wrapper_class{
                display: flex;
            }
            #candidateManageJob h5{
                font-size: 24px;
            }
            #candidateManageJob .job_table div{
                padding: 10px 10px 10px 25px;
            }
            #candidateManageJob .job_table p{
                font-size: 16px;
            }
            #candidateManageJob .tHead,
            #candidateManageJob .tBody{
                display: grid;
                grid-template-columns: 5fr 3fr 4fr;
            }
            #candidateManageJob .tHead p{
                padding: 0;
            }
            #candidateManageJob .tBody p{
                padding-top: 10px;
            }
            #candidateManageJob .tBody p:first-child {
                width: 200px;
            }
            #candidateManageJob .tBody p:nth-child(3) {
                padding: 5px 10px;
                margin-left: 40px;
                height: 35px;
                width: 100px;
            }
            #candidateManageJob .advert img{
                width: 200px;
                margin: 0 auto 10px 10px;
            }
        }


        /* Large Screen*/
        @media screen and (min-width: 992px){

            #candidateManageJob .wrapper_class{
                display: flex;
            }
            #candidateManageJob h5{
                font-size: 24px;
            }
            #candidateManageJob .job_table{
                width: 100%;
            }
            #candidateManageJob .job_table div{
                padding: 20px 10px 20px 25px;
            }
            #candidateManageJob .job_table p{
                font-size: 16px;
            }
            #candidateManageJob .tHead,
            #candidateManageJob .tBody{
                display: grid;
                grid-template-columns: 6fr 2fr 4fr;
            }
            #candidateManageJob .tHead p{
                padding: 0;
            }

            #candidateManageJob .tBody p{
                padding-top: 10px;
            }
            #candidateManageJob .tBody p:first-child {
                width: 290px;
            }
            #candidateManageJob .tBody p:nth-child(3) {
                padding: 5px 10px;
                margin: 5px 0 auto 200px;
                height: 35px;
            }
            #candidateManageJob .date_class{
                display: block;
            }
            #candidateManageJob .advert img {
                width: 280px;
                margin: 0 auto 10px 10px;
                height: 250px;
            }
        }
    </style>
@endsection

@section('content')
    <div id ="candidateManageJob">
        <h5>Manage Jobs</h5>
        <div class=" wrapper_class">

            <div class="job_table ">
                <div class="tHead">
                    <p> Job Title</p>
                    <p>Applied On</p>
                </div>
                <div class="tBody">
                    <p>Hiring For Senior Analyst - Finance </p>
                    <p class="date_class">2-3-2020</p>
                    <p>Applied</p>
                </div>
                <div class="tBody ">
                    <p>Urgent Opening For Mainframe Developer - Pune</p>
                    <p class="date_class">17-5-2020</p>
                    <p>Applied</p>
                </div>
                <div class="tBody ">
                    <p>Hiring For - SR.Executive - Accounts Payable - Immediate joiners only</p>
                    <p class="date_class">18-8-2020</p>
                    <p>Applied</p>
                </div>
                <div class="tBody">
                    <p>Hiring For Senior Analyst - Finance</p>
                    <p class="date_class ">2-3-2020</p>
                    <p>Applied</p>
                </div>
                <div class="tBody ">
                    <p>Urgent Opening For Mainframe Developer - Pune</p>
                    <p class="date_class ">17-5-2020</p>
                    <p>Applied</p>
                </div>
                <div class="tBody ">
                    <p>Hiring For - SR.Executive - Accounts Payable - Immediate joiners only</p>
                    <p class="date_class">18-8-2020</p>
                    <p>Applied</p>
                </div>
                <div class="tBody">
                    <p>Urgent Opening For Mainframe Developer - Pune</p>
                    <p class="date_class">17-5-2020</p>
                    <p>Applied</p>
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
