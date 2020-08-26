@extends('layouts.jobs')
@section('title')
    Recruiter Profile After Login
@endsection

@section('style')
    <style>
        #recruiterAfterLogin h6{
            font-size: 18px;
            color: #333333;
            font-weight: 600;
        }
        #recruiterAfterLogin{
            margin: 30px 20px 20px 15px;
        }
        #recruiterAfterLogin .user_section{
            background-color: #F2F2F2;
            border: 0;
            margin: 0;
            padding: 0;
        }
        #recruiterAfterLogin .user-profile-cards{
            background-color: #ffffff;
            border-radius: 5px;
            border: 1px solid #DDDDDD;
            margin-bottom: 10px;
            padding: 10px;
        }
        #recruiterAfterLogin .user_section .edit-pen{
            position: absolute;
            top: 80px;
            right: 35px;
        }

        #recruiterAfterLogin .userImg{
            padding-right: 0.5rem;
        }
        #recruiterAfterLogin .userImg img{
            width: 40px;
        }
        #recruiterAfterLogin .user_section p{
            color: #666;
            font-size: 10px;
        }
        #recruiterAfterLogin .status {
            font-size: 10px;
        }
        #recruiterAfterLogin  .view_btn a,
        #recruiterAfterLogin .user-profile-cards .follow-btn a,
        #recruiterAfterLogin .user-profile-cards .send_btn a{
            display: inline-block;
            color: #fff;
            background-color: #E33D47;
            border-radius: 5px;
            text-align: center;
            width: 100px;
            padding: 5px;
            font-weight: 500;
        }
        #recruiterAfterLogin .user-profile-cards .send_btn,
        #recruiterAfterLogin .user-profile-cards .view_btn{
            padding: 10px 0 0 45px;
        }
        #recruiterAfterLogin .user-profile-cards .send_btn a{
            color: #E33D47;
            background-color: #fff;
            border: 1px solid #E33D47;
            width: 110px;
            padding: 4px;
            font-weight: 500;
        }
        #recruiterAfterLogin .view_btn a{
            width: 110px;
            padding: 4px;
        }

        #recruiterAfterLogin .hiring span{
            color: #333;
        }

        #recruiterAfterLogin .hiring p,
        #recruiterAfterLogin .hiring span{
            font-size: 10px;
            text-align: justify;
            line-height: 24px;
        }
        #recruiterAfterLogin .hiring p{
            font-weight: normal;
            padding-top: 5px;

        }
        #recruiterAfterLogin .hiring-items{
            display: flex;
        }
        #recruiterAfterLogin .hiring .key-skill span{
            background-color: #ECF3FF;
            color: #2979FF;
            border-radius: 50px;
            font-size: 9px;
            padding: 2px 5px;
        }
        #recruiterAfterLogin .rec-job-items h6,
        #recruiterAfterLogin .work-exp1 h6,
        #recruiterAfterLogin .user-profile-items h6{
            font-size: 14px;
            font-weight: 500;
        }
        #recruiterAfterLogin .work-exp h6,
        #recruiterAfterLogin .hiring h6{
            margin-bottom: 2px;
        }

        #recruiterAfterLogin .active-jobs img{
            width: 10px;
        }

        #recruiterAfterLogin .active-jobs .rec-job-items li{
            padding: 15px 0;
        }
        #recruiterAfterLogin .active-jobs .rec-job-items .view_btn {
            padding-right: 20px;
        }

        #recruiterAfterLogin .active-jobs .rec-job-items .share-btn{
            padding: 2px;
        }
        #recruiterAfterLogin .active-jobs  .share-btn a{
            color: #2979FF;
            background-color: #fff;
        }

        #recruiterAfterLogin .work-exp1{
            display: flex;
        }
        #recruiterAfterLogin .work-exp1 p,
        #recruiterAfterLogin .work-exp1 h6{
            font-size: 10px;
            width: 50%;
            line-height: 21px;
        }

        #recruiterAfterLogin .user_profile .edit-wrapper {
            margin-left: auto;
        }
        #recruiterAfterLogin .user_profile .edit-wrapper i{
            padding-right: 10px;
        }
        #recruiterAfterLogin .user-profile-list{
            padding-top: 15px;
        }
        #recruiterAfterLogin .user-profile-items{
            display: grid;
            grid-template-columns: 1fr 2fr;
            padding-bottom: 10px;
        }
        #recruiterAfterLogin .user-profile-items h6{
            font-size: 12px;
            padding-left: 20px;
        }
        #recruiterAfterLogin .user-profile-items p{
            font-size: 0.8rem;
        }


        /* Medium Screen*/
        @media screen and (min-width: 600px) and (max-width:768px){
            #recruiterAfterLogin .user-profile-cards{
                background-color: transparent;
                border: 0;
                margin: 0;
                padding: 0;
            }
            #recruiterAfterLogin .user_section{
                display: grid;
                grid-template-columns: repeat(auto-fit,minmax(150px, 1fr));
                background-color: #FFF;
                margin-bottom: 10px;
                padding: 10px;
            }

            #recruiterAfterLogin .user_section .edit-pen {
                position: absolute;
                right: 40px;
                top: 150px;
            }
            #recruiterAfterLogin .user-profile-cards .userImg img{
                width: 4rem;
            }

            #recruiterAfterLogin .user-profile-cards .user-text{
                padding: 8px;
            }
            #recruiterAfterLogin .user_section h6{
                font-size: 14px;
            }

            #recruiterAfterLogin .user_section p{
                font-size: 12px;
            }
            #recruiterAfterLogin .user-profile-cards .status {
                font-size: 12px;
            }

            #recruiterAfterLogin .user-profile-cards .follow-btn a,
            #recruiterAfterLogin .user-profile-cards .view_btn a,
            #recruiterAfterLogin .user-profile-cards .send_btn a,
            #recruiterAfterLogin .card_profile a{
                font-size: 12px;
            }

            #recruiterAfterLogin .user-profile-cards .follow-btn{
                padding-top: 28px;
            }
            #recruiterAfterLogin .user-profile-cards .follow-btn a{
                width: 100px;
                padding: 5px;
            }
            #recruiterAfterLogin .user-profile-cards .send_btn{
                padding: 62px 0 0 0;
            }
            #recruiterAfterLogin .user-profile-cards .send_btn a{
                width: 100px;
                padding:  5px;
            }

            #recruiterAfterLogin .user-profile-cards .view_btn{
                padding: 88px 0 0 25px;
            }

            #recruiterAfterLogin  .user-profile-cards .view_btn a{
                width: 105px;
                padding: 6px 5px;
            }
            #recruiterAfterLogin .user_section .user-details{
                padding: 20px;
            }
            #recruiterAfterLogin .user_section .send-msg{
                width: 155px;
            }
            #recruiterAfterLogin .user_section .send-msg img{
                width: 10px;
            }
            #recruiterAfterLogin .user_section .user-details span{
                font-size: 12px;
            }

            #recruiterAfterLogin .hiring span{
                font-size: 14px;
                color: #000;
            }

            #recruiterAfterLogin .hiring .hiring-items {
                display: grid;
                grid-template-columns: 130px 250px;
                padding-bottom: 15px;
            }
            #recruiterAfterLogin .hiring-items p {
                font-size: 14px;
                width: max-content;
            }
            #recruiterAfterLogin .hiring .key-skill span{
                font-size: 60%;
                padding: 3px 10px;
                line-height: 24px;
            }
            #recruiterAfterLogin .rec-job-items small {
                font-size: 13px;
                line-height: 19px;
            }

            #recruiterAfterLogin  .active-jobs .rec-job-icon small{
                line-height: 19px;
                padding-right: 20px;
            }

            #recruiterAfterLogin .active-jobs .rec-job-icon span{
                padding-top: 0;
                padding-right: 9px;
            }
            #recruiterAfterLogin .work-exp-wrapper {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(200px, auto));
            }
            #recruiterAfterLogin .work-exp1{
                display: block;
                padding-top: 15px;
            }
            #recruiterAfterLogin .work-exp1 p, #recruiterBeforeLogin .work-exp1 h6{
                width: 100%;
                color: #333;
            }
            #recruiterAfterLogin .work-exp1 p{
                font-size: 14px;
                color: #999;
            }
            #recruiterAfterLogin .work-exp1 h6{
                font-size: 16px;
                line-height: 21px;
                width: 100%;
            }

            #recruiterAfterLogin .user_profile .edit-wrapper {
                position: absolute;
                right: 40px;
            }
            #recruiterAfterLogin .user-profile-items p,
            #recruiterAfterLogin .user-profile-items h6{
                font-size: 16px;
                padding: 0 0 10px 0;
            }
        }

        /* LARGE SCREEN */
        @media (min-width: 769px) {
            #recruiterAfterLogin .user_section{
                display: grid;
                position: relative;
                grid-template-columns: repeat(auto-fit,minmax(250px, 1fr));
                background-color: #FFF;
                margin-bottom: 10px;
                padding: 10px;
            }
            #recruiterAfterLogin .user-profile-cards{
                background-color: transparent;
                border: 0;
                margin: 0;
                padding: 0;
            }
            #recruiterAfterLogin .cards{
                padding: 1.5rem;
            }

            #recruiterAfterLogin .user_section .edit-pen {
                position: absolute;
                right: 35px;
                top: 20px;
            }
            #recruiterAfterLogin  .userImg img{
                width: 100px;
            }

            #recruiterAfterLogin .user-profile-cards .user-text{
                padding: 10px;
            }
            #recruiterAfterLogin .user_section h6{
                font-size: 20px;
            }

            #recruiterAfterLogin .user_section p,
            #recruiterAfterLogin .user_section span{
                font-size: 16px;
                padding-top: 10px;
            }
            #recruiterAfterLogin .user_section .status {
                display: inline-block;
                width: 147px;
                font-size: 14px;

            }

            #recruiterAfterLogin .user-profile-cards .follow-btn a,
            #recruiterAfterLogin .user-profile-cards .send_btn a,
            #recruiterAfterLogin .active-jobs .view_btn a,
            #recruiterAfterLogin .active-jobs .share-btn span{
                font-size: 16px;
            }

            #recruiterAfterLogin .user-profile-cards .follow-btn{
                padding-top: 15px;
            }
            #recruiterAfterLogin .user-profile-cards .follow-btn a{
                width: 130px;
                padding: 8px 5px;
            }
            #recruiterAfterLogin .user-profile-cards .send_btn{
                padding: 3rem 0 0 0;
            }
            #recruiterAfterLogin .user-profile-cards .send_btn a{
                width: 130px;
                border: 0;
                font-weight: 600;
                color: #E33D47;
                padding: 8px 0;
            }

            #recruiterAfterLogin .user_section .user-details{
                padding-top: 40px;
            }

            #recruiterAfterLogin .hiring h6,
            #recruiterBeforeLogin .work-exp h6,
            #recruiterAfterLogin .active-jobs h6,
            #recruiterAfterLogin .card_profile h6{
                font-size: 18px;
                font-weight: 600;
            }

            #recruiterAfterLogin .hiring .hiring-items {
                display: grid;
                grid-template-columns: 130px 520px;
                padding-bottom: 15px;
            }
            #recruiterAfterLogin .hiring p{
                padding-top: 10px;
            }
            #recruiterAfterLogin .hiring .key-skill span{
                font-size: 14px;
                padding: 3px 10px;
            }

            #recruiterAfterLogin .hiring p, #recruiterAfterLogin .hiring .hiring-items span{
                font-size: 14px;
                line-height: 24px;

            }
            #recruiterAfterLogin .hiring span{
                color: #000;
            }

            #recruiterAfterLogin .active-jobs img{
                width: 16px;
            }
            #recruiterAfterLogin .active-jobs .view_btn a{
                width: 140px;
                padding: 8px 5px;
            }
            #recruiterAfterLogin .active-jobs .rec-job-items .share-btn {
                padding: 8px;
            }

            #recruiterAfterLogin .active-jobs .rec-job-items{
                margin-top: 15px;
            }

            #recruiterAfterLogin .active-jobs .rec-job-items li{
                width: 40rem;
            }
            #recruiterAfterLogin .active-jobs .rec-job-items h6{
                font-size: 16px;
            }

            #recruiterAfterLogin  .active-jobs .rec-job-items div{
                padding-top: 7px;
            }
            #recruiterAfterLogin .active-jobs .rec-job-icon{
                margin-right: 50px;
            }
            #recruiterAfterLogin .active-jobs .rec-job-icon img{
                width: 25px;
                padding-right: 5px;
            }

            #recruiterAfterLogin  .active-jobs.rec-job-icon small{
                font-size: 14px;
                line-height: 19px;
                padding-right: 20px;
            }

            #recruiterAfterLogin .active-jobs .rec-job-icon span{
                padding-top: 0;
                padding-right: 9px;
            }

            #recruiterAfterLogin .work-exp .work-exp-head{
                font-size: 18px;
                font-weight: 600;
            }

            #recruiterAfterLogin .work-exp .work-exp-wrapper{
                display: grid;
                grid-template-columns: repeat(3, auto);
                grid-template-rows: 5rem;
                padding-top: 20px;
            }
            #recruiterAfterLogin .work-exp-wrapper .current h6{
                width: 20rem;
            }
            #recruiterAfterLogin .work-exp-wrapper .work-exp1{
                display: block;
            }

            #recruiterAfterLogin .work-exp-wrapper .work-exp1 p{
                font-size: 14px;
                color: #999;
            }
            #recruiterAfterLogin .work-exp-wrapper .work-exp1 h6{
                font-size: 16px;
                color: #333;
            }

            #recruiterAfterLogin .user_profile .edit-wrapper{
                position: absolute;
                right: 40px;
            }
            #recruiterAfterLogin .user_profile .edit-wrapper span{
                padding-right: 5px;
            }

            #recruiterAfterLogin .user-profile-list {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                padding-top: 1.5rem;
            }
            #recruiterAfterLogin .user-profile-items {
                display: block;
                width: 18rem;
            }
            #recruiterAfterLogin .user-profile-items p,
            #recruiterAfterLogin .user-profile-items h6{
                font-size: 16px;
                padding: 0 0 10px 0;
            }
        }

    </style>

@endsection


@section('content')
    <div id="recruiterAfterLogin">
        <section class="cards user_section">
            <div class="edit-pen">
                <i class="mdi mdi-pencil"></i>
            </div>
            <div class="user-profile-cards d-flex">
                <div class="userImg">
                    <img src="/img/girl_user.png" alt="User image" class="rounded-circle">
                </div>
                <div class="user-text">
                    <h6>Ritu Suruchi</h6>
                    <p>Manager HR</p>
                    <p>
                        <strong style="text-decoration: underline">115</strong>
                        <span></span> Followers
                    </p>
                    <div>
                        <a href="#" class="status" style="text-decoration: underline">
                            +Update Your Status
                        </a>
                    </div>
                    <div class="follow-btn">
                        <a href="#"  type="button">
                            Follow
                        </a>
                    </div>
                </div>
            </div>

            <div class="user-profile-cards user-details">
                <div class="send-msg">
                   <span>
                        <img src="/img/cal_icon.png" alt=""/>
                    </span> &nbsp;
                    <span> Gratitude India Pvt Ltd</span>
                </div>
                <div class="send-msg">
                   <span>
                       <strong style="text-decoration: underline">11</strong>
                   </span>  &nbsp;
                    <span>Active Jobs</span>
                </div>
                <div class="send_btn">
                    <a href="#"  type="button">
                        Send Message
                    </a>
                </div>
            </div>
            <div class="user-profile-cards user-details">
                <div class="user-loc">
                   <span>
                        <img src="/img/location_icon.png" alt=""/>
                    </span> &nbsp;
                    <span> Mumbai, India </span>
                </div>
                <div class="user-loc">
                   <span>
                       <img src="/img/clock_icon.png" alt=""/>
                   </span> &nbsp;
                    <span>7 Hours Ago</span>
                </div>
            </div>
            <div class="user-profile-cards user-details">
                <div class="view-user">
                   <span>
                        <img src="/img/location_icon.png" alt=""/>
                    </span> &nbsp;
                    <span>948.64 Km Away</span>
                </div>
            </div>
        </section>

        <section class="cards hiring">
            <h6 style="color: #000;">Hiring For</h6>
            <div class="hiring-list">
                <div class="hiring-items">
                    <p>Industry &colon; &nbsp;</p>
                    <p><span style="color: #333">Travel, Hotel, Airlines</span></p>
                </div>
                <div class="hiring-items">
                    <p>Functional Area &colon; &nbsp; </p>
                    <p><span>HR, Recruitment, Administration, IR</span></p>
                </div>
                <div class="hiring-items">
                    <p>Role &colon; &nbsp;</p>
                    <p><span>Accounts Exec./Accountant</span></p>

                </div>
                <div class="hiring-items ">
                    <p>Key Skills &colon; &nbsp;</p>
                    <p class="key-skill" >
                        <span>Human Resource</span>
                        <span>Recruitment</span>
                        <span>Training</span>
                        <span>Placement</span>
                        <span>Selection</span>
                    </p>
                </div>
                <div class="hiring-items">
                    <p>Experience &colon; &nbsp;</p>
                    <p> <span>2 Years 6 months</span></p>

                </div>
                <div class="hiring-items">
                    <p>Salary &colon; &nbsp;</p>
                    <p> <span>Negotiable</span></p>

                </div>
                <div class="hiring-items">
                    <p>Course &colon; &nbsp; </p>
                    <p><span>0</span></p>

                </div>
            </div>

        </section>

        <section class="cards active-jobs">
            <h6 style="color: #000;">Active Jobs</h6>
            <ul class="rec-job-items">
                <li>
                    <h6 style="color: #333;">UI Developer</h6>
                    <small>Gratitude India</small>
                    <div class="d-flex ">
                        <div class="rec-job-icon">
                            <span>
                                <i class="mdi mdi-briefcase-outline"></i>
                            </span>
                            <small>0-10Years</small>
                        </div>
                        <div class=" rec-job-icon">
                            <span>
                   <i class="mdi mdi-map-marker-outline"></i>
                </span>
                            <small> Mumbai, Maharashtra</small>
                        </div>
                        <div class=" rec-job-icon">
                            <img src="/img/purse_icon.png">
                            <small>Rs 2 - 6 Lacs p.a</small>
                        </div>
                    </div>
                    <div class=" d-flex mt-2">
                        <span class="view_btn">
                            <a href="#" type="button"> View and Apply</a>
                        </span>
                        <span class="share-btn">
                            <a href="#">
                                <img src="/img/share_icon.png">
                                <span >Share</span>
                            </a>
                        </span>
                    </div>
                </li>
                <li>
                    <h6 style="color: #333;">UI Developer</h6>
                    <small>Gratitude India</small>
                    <div class="d-flex ">
                        <div class="rec-job-icon">
                            <span>
                                <i class="mdi mdi-briefcase-outline"></i>
                            </span>
                            <small>0-10Years</small>
                        </div>
                        <div class=" rec-job-icon">
                            <span>
                   <i class="mdi mdi-map-marker-outline"></i>
                </span>
                            <small> Mumbai, Maharashtra</small>
                        </div>
                        <div class=" rec-job-icon">
                            <img src="/img/purse_icon.png">
                            <small>Rs 2 - 6 Lacs p.a</small>
                        </div>
                    </div>
                    <div class=" d-flex mt-2">
                        <span class="view_btn">
                            <a href="#" type="button"> View and Apply</a>
                        </span>
                        <span class="share-btn">
                            <a href="#">
                                <img src="/img/share_icon.png">
                                <span >Share</span>
                            </a>
                        </span>
                    </div>
                </li>
            </ul>

        </section>

        <section class="cards work-exp">
            <h6 class="work-exp-head" style="color: #000; ">Work Experience</h6>
            <div class="work-exp-wrapper">
                <div class=" work-exp1 current">
                    <p>Currently with &colon;</p>
                    <h6>The Minimalist (Since Jun-2017)</h6>
                </div>
                <div class=" work-exp1">
                    <p>Current Designation &colon;</p>
                    <h6>HR Executive</h6>
                </div>
                <div class=" work-exp1">
                    <p>Role in Hiring &colon;</p>
                    <h6>Hiring Manager</h6>
                </div>

                <div class="work-exp1 current">
                    <p>Currently with &colon;</p>
                    <h6>ABC Consultants (Jan 2016 &dash; Jun-2017)</h6>
                </div>
                <div class=" work-exp1">
                    <p>Current Designation &colon;</p>
                    <h6>HR Executive</h6>
                </div>
                <div class=" work-exp1">
                    <p>Role in Hiring &colon;</p>
                    <h6>HR Generalist</h6>
                </div>
            </div>
        </section>

        <section class="cards user_profile">
            <div class="d-flex">
                <h6 style="color: #000;">Personal Details</h6>
                <div class="edit-wrapper">
                    <span class="edit"> <i class="mdi mdi-pencil "></i> </span>
                    <span class="arrowDown"> <i class="mdi mdi-chevron-down "></i> </span>
                </div>
            </div>
            <ul class="user-profile-list">
                <li class=" user-profile-items">
                    <p>Name &colon;</p>
                    <h6>Ashok Kumar</h6>
                </li>
                <li class=" user-profile-items">
                    <p>Town &colon;</p>
                    <h6>Andheri East</h6>
                </li>
                <li class=" user-profile-items">
                    <p>Gender &colon;</p>
                    <h6>Male</h6>
                </li>
                <li class=" user-profile-items">
                    <p>Email &colon;</p>
                    <h6>ashokkumar@gmail.com</h6>
                </li>
                <li class=" user-profile-items">
                    <p>City &colon;</p>
                    <h6>Mumbai</h6>
                </li>
                <li class=" user-profile-items">
                    <p>Pincode &colon;</p>
                    <h6>400063</h6>
                </li>
                <li class=" user-profile-items">
                    <p>Mobile &colon;</p>
                    <h6>+91 9874569878</h6>
                </li>
                <li class=" user-profile-items">
                    <p>State &colon;</p>
                    <h6>Maharashtra</h6>
                </li>
                <li class=" user-profile-items">
                        <p>Permanent Address &colon;</p>


                        <h6>41 Nd Flr, -B, Raj Indl Complex, Military Rd, Marol, Andheri(E)</h6>

                </li>
                <li class=" user-profile-items">
                    <p>DOB &colon;</p>
                    <h6>12-12-1999</h6>
                </li>
                <li class=" user-profile-items">
                    <p>Country &colon;</p>
                    <h6>India</h6>
                </li>
            </ul>
        </section>
    </div>

@endsection
