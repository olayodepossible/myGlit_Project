@extends('layouts.jobs')
@section('title')
    Jobs Board
@endsection

@section('style')
    <style>

        #jobBoard{
            padding:20px;
        }

        #jobBoard.form-wrapper {
            padding-bottom: 20px;
        }
        #jobBoard .form-recruit-search{
            padding: 5px 0 5px 0;
        }

        #jobBoard .form-recruit-search .form-group {
            margin-bottom: 0 !important;
        }

        #jobBoard .form-recruit-search,  .form-control:focus {
            border: 0 !important;
            outline: 0 !important;
            box-shadow: none!important;
        }

        #jobBoard .form-recruit-search input {
            padding: 10px 1px;
            width: 100%;
            border: 0 !important;
            font-size: 12px;
            text-align: center;
            border: transparent;
            border-right: 1px solid #ccc;
            outline: 0;
        }
        #jobBoard .form-recruit-search select {
            margin-bottom: 10px;
            border: 0 !important;
        }

        #jobBoard .main-content-card1{
            padding: 10px 20px 0 20px;
        }
        #jobBoard .main-content-card1 button {
            width: 260px;
            padding: 12px 10px;
            line-height: 14px;
            font-size: 14px;
            font-weight: 500;
        }

        #jobBoard .advert {
            margin-bottom:8px ;
        }
        #jobBoard .advert img {
            width: 100%;
            border-radius: 5px;
        }


        /* Meduim Screen*/
        @media screen and (min-width: 600px) and (max-width:768px) {

            #jobBoard .form-wrapper {
                background-color: #fff;
                margin-bottom: 30px;
                border-radius: 5px;
                padding: 0;
            }
            #jobBoard .form-recruit-search input{
                padding: 5px 20px;
                text-align: left;
                border-right: 1px solid #ccc !important;
            }
            #jobBoard .form-recruit-search select {
                margin: 0;
            }
            #jobBoard .main-content-card1 {
                padding: 10px 0 5px 0;
            }
            #jobBoard .main-content-card1 h6{
                font-size: 16px;
                line-height: 21px;
                padding: 13px 30px 0 10px;
            }
            #jobBoard .main-content-card1 button {
                width: 120px;
                padding: 10px;
                font-weight: 600;
                font-size: 14px;
            }

        }


        /* LARGE SCREEN */
        @media screen and (min-width: 769px) {

            #jobBoard .form-recruit-search{
                border-radius: 5px;
                background-color: #fff;
            }

            #jobBoard .form-wrapper {
                background-color: #fff;
                margin-bottom: 30px;
                padding: 0
            }

            #jobBoard .form-recruit-search input {
                padding: 10px 20px;
                text-align: left;
                border-right: 1px solid #ccc !important;
            }

            #jobBoard .main-content-card1 {
                padding: 10px 0 10px 100px;
            }

            #jobBoard .main-content-card1 h6 {
                font-size: 16px;
                line-height: 21px;
                padding: 13px 30px 0 10px;
            }

            #jobBoard .main-content-card1 button {
                width: 150px;
                padding: 10px;
                font-weight: 600;
                font-size: 16px;
                line-height: 24px;
            }


        }
    </style>

@endsection


@section('content')

        <div id="jobBoard">
            <section class="form-wrapper">
                <div class="form-inline-wrapper-o">
                    <form class="form-recruit-search">
                        <div class=" row">
                            <div class="form-group col-md-3 col-sm-12 col-lg-3 col-xl-3 pt-lg-3 pt-sm-2">
                                <input type="text" id="job_title"  class="" placeholder="Name" />
                            </div>
                            <div class="form-group col-md-3 col-sm-12 col-lg-3 col-xl-3 pt-lg-3 pt-sm-2">
                                <input
                                    type="text"
                                    id="location"
                                    class=""
                                    placeholder="Location (city, state, Country)"
                                />
                            </div>
                            <div class="form-group col-md-3 col-sm-12 col-lg-3 col-xl-3 pt-lg-3 pt-sm-2">
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

            @component('layouts.components.jobCard', [
                'jobName' => "Frontend Developer",
                'company' => 'Gratitude India',
                'numView' => '34061',
                'day_posted' => '2',
                'yearsOfExperience' => '0-10',
                'job_location' => 'Mumbai, Maharashtra',
                'job_desc' => 'Experience in CSS3 and creating wireframes and mockupsExperience in designing for vario...',
                'followers'=>'115'
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
                'followers'=>'115'
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
                'followers'=>'115'
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
                'followers'=>'115'
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
                'followers'=>'115'
            ])
            @endcomponent
        </div>


@endsection

