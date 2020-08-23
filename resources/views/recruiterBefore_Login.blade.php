@extends('layouts.jobs')
@section('title')
    Recruiter Profile Before Login
@endsection

@section('style')
    <style>
        #recruiterBeforeLogin h6{
            font-size: 18px;
            color: #333333;
            font-weight: 600;
        }
        #recruiterBeforeLogin{
            margin: 30px 20px 20px 15px;
        }
        #recruiterBeforeLogin .user_section{
            background-color: #F2F2F2;
            border: 0;
            margin: 0;
            padding: 0;
        }
        #recruiterBeforeLogin .user-profile-cards{
            background-color: #ffffff;
            border-radius: 5px;
            border: 1px solid #DDDDDD;
            margin-bottom: 10px;
            padding: 10px;
        }
        #recruiterBeforeLogin .user_section .edit-pen{
            position: absolute;
            top: 80px;
            right: 35px;
        }

        #recruiterBeforeLogin .userImg{
            padding-right: 0.5rem;
        }
        #recruiterBeforeLogin .userImg img{
            width: 40px;
        }
        #recruiterBeforeLogin .user_section p{
            color: #666;
            font-size: 10px;
        }
        #recruiterBeforeLogin .status {
            font-size: 10px;
        }
        #recruiterBeforeLogin  .view_btn a,
        #recruiterBeforeLogin .user-profile-cards .follow-btn a,
        #recruiterBeforeLogin .user-profile-cards .send_btn a{
            display: inline-block;
            color: #fff;
            background-color: #E33D47;
            border-radius: 5px;
            text-align: center;
            width: 100px;
            padding: 5px;
            font-weight: 500;
        }
        #recruiterBeforeLogin .user-profile-cards .send_btn,
        #recruiterBeforeLogin .user-profile-cards .view_btn{
            padding: 10px 0 0 45px;
        }
        #recruiterBeforeLogin .user-profile-cards .send_btn a{
            color: #E33D47;
            background-color: #fff;
            border: 1px solid #E33D47;
            width: 110px;
            padding: 4px;
            font-weight: 500;
        }
        #recruiterBeforeLogin .view_btn a{
            width: 110px;
            padding: 4px;
        }

        #recruiterBeforeLogin .hiring span{
            color: #333;
        }

        #recruiterBeforeLogin .hiring p,
        #recruiterBeforeLogin .hiring span{
            font-size: 10px;
            text-align: justify;
            line-height: 24px;
        }
        #recruiterBeforeLogin .hiring p{
            font-weight: normal;
            padding-top: 5px;

        }
        #recruiterBeforeLogin .hiring span{
            font-size: 9px;
        }


        #recruiterBeforeLogin .work-exp h6, #recruiterBeforeLogin .hiring h6{
            margin-bottom: 2px;
        }
        #recruiterBeforeLogin .work-exp1{
            display: flex;
        }
        #recruiterBeforeLogin .work-exp1 p, #recruiterBeforeLogin .work-exp1 h6{
            font-size: 10px;
            width: 50%;
            line-height: 24px;
        }
        #recruiterBeforeLogin .card_profile{
            color: #fff;
            background-color: #304081;
            border-radius: 5px;
            font-size: 10px;
            text-align: center;
        }
        #recruiterBeforeLogin .card_profile p{
            padding: 5px 0;
        }
        #recruiterBeforeLogin .card_profile a{
            width: 110px;
            padding: 5px 0;
            margin-bottom: 10px;
        }

        /* Medium Screen*/
        @media screen and (min-width: 600px) and (max-width:768px){
            #recruiterBeforeLogin .user-profile-cards{
                background-color: transparent;
                border: 0;
                margin: 0;
                padding: 0;
            }
            #recruiterBeforeLogin .user_section{
                display: grid;
                grid-template-columns: repeat(auto-fit,minmax(150px, 1fr));
                background-color: #FFF;
                margin-bottom: 10px;
                padding: 10px;
            }

            #recruiterBeforeLogin .user_section .edit-pen {
                position: absolute;
                right: 40px;
                top: 150px;
            }
            #recruiterBeforeLogin .user-profile-cards .userImg img{
                width: 4rem;
            }

            #recruiterBeforeLogin .user-profile-cards .user-text{
                padding: 8px;
            }
            #recruiterBeforeLogin .user_section h6{
                font-size: 14px;
            }

            #recruiterBeforeLogin .user_section p{
                font-size: 12px;
            }
            #recruiterBeforeLogin .user-profile-cards .status {
                font-size: 12px;
            }

            #recruiterBeforeLogin .user-profile-cards .follow-btn a,
            #recruiterBeforeLogin .user-profile-cards .view_btn a,
            #recruiterBeforeLogin .user-profile-cards .send_btn a,
            #recruiterBeforeLogin .card_profile a{
                font-size: 12px;
            }

            #recruiterBeforeLogin .user-profile-cards .follow-btn{
                padding-top: 28px;
            }
            #recruiterBeforeLogin .user-profile-cards .follow-btn a{
                width: 100px;
                padding: 5px;
            }
            #recruiterBeforeLogin .user-profile-cards .send_btn{
                padding: 62px 0 0 0;
            }
            #recruiterBeforeLogin .user-profile-cards .send_btn a{
                width: 100px;
                padding:  5px;
            }

            #recruiterBeforeLogin .user-profile-cards .view_btn{
                padding: 88px 0 0 25px;
            }

            #recruiterBeforeLogin  .user-profile-cards .view_btn a{
                width: 105px;
                padding: 6px 5px;
            }
            #recruiterBeforeLogin .user_section .user-details{
                padding: 20px;
            }
            #recruiterBeforeLogin .user_section .send-msg{
                width: 155px;
            }
            #recruiterBeforeLogin .user_section .send-msg img{
                width: 10px;
            }
            #recruiterBeforeLogin .user_section .user-details span{
                font-size: 12px;
            }

            #recruiterBeforeLogin .hiring h6,
            #recruiterBeforeLogin .work-exp h6{
                font-size: 14px;
            }

            #recruiterBeforeLogin .hiring .hiring-items {
                display: grid;
                grid-template-columns: 130px 250px;
                padding-bottom: 15px;
            }

            #recruiterBeforeLogin .hiring p, #recruiterBeforeLogin .hiring span{
                font-size: 12px;
                padding-bottom: 5px;
            }
            #recruiterBeforeLogin .hiring span{
                color: #000;
            }

            #recruiterBeforeLogin .work-exp-wrapper {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(200px, auto));
            }
            #recruiterBeforeLogin .work-exp1{
                display: block;
                padding-top: 15px;
            }
            #recruiterBeforeLogin .work-exp1 p, #recruiterBeforeLogin .work-exp1 h6{
                width: 100%;
                color: #333;
            }
            #recruiterBeforeLogin .work-exp1 p{
                font-size: 12px;
                color: #999;
            }

            #recruiterBeforeLogin .card_profile{
                height: 150px;
            }
            #recruiterBeforeLogin .card_profile p{
                font-size: 16px;
                padding: 10px 0;
            }
            #recruiterBeforeLogin .card_profile a{
                width: 150px;
                padding: 10px 0;
                font-size: 16px;
            }
        }

        /* LARGE SCREEN */
        @media (min-width: 769px) {
            #recruiterBeforeLogin .user-profile-cards{
                background-color: transparent;
                border-radius: 0;
                border: 0;
                margin: 0;
            }
            #recruiterBeforeLogin .user_section{
                display: grid;
                grid-template-columns: repeat(auto-fit,minmax(250px, 1fr));
                background-color: #FFF;
                margin-bottom: 10px;
                padding: 10px;
            }

            #recruiterBeforeLogin .cards{
                padding: 1.5rem;
            }

            #recruiterBeforeLogin .user_section .edit-pen {
                position: absolute;
                right: 70px;
                top: 180px;
            }
            #recruiterBeforeLogin  .userImg img{
                width: 100px;
            }

            #recruiterBeforeLogin .user-profile-cards .user-text{
                padding: 10px;
            }
            #recruiterBeforeLogin .user_section h6{
                font-size: 20px;
            }

            #recruiterBeforeLogin .user_section p,
            #recruiterBeforeLogin .user_section span{
                font-size: 16px;
                padding-top: 10px;
            }
            #recruiterBeforeLogin .user_section .status {
                display:block;
                width: 150px;
                font-size: 14px;

            }

            #recruiterBeforeLogin .user-profile-cards .follow-btn a,
            #recruiterBeforeLogin .user-profile-cards .send_btn a,
            #recruiterBeforeLogin .user-profile-cards .view_btn a,
            #recruiterBeforeLogin .active-jobs .share-btn span{
                font-size: 16px;
            }

            #recruiterBeforeLogin .user-profile-cards .follow-btn{
                padding-top: 15px;
            }
            #recruiterBeforeLogin .user-profile-cards .follow-btn a{
                width: 130px;
                padding: 8px 5px;
            }
            #recruiterBeforeLogin .user-profile-cards .send_btn{
                padding: 3.595rem 0 0 0;
            }

            #recruiterBeforeLogin .user-profile-cards .send_btn a{
                width: 130px;
                border: 1px solid #E33D47 ;
                font-weight: 600;
                color: #E33D47;
                padding: 8px 0;
            }

            #recruiterBeforeLogin .user-profile-cards .view_btn {
                padding: 84px 0 0 30px;
            }
            #recruiterBeforeLogin .user-profile-cards .view_btn a{
                width: 160px;
                padding: 8px 15px;
            }

            #recruiterBeforeLogin .user_section .user-details{
                padding-top: 40px;
            }

            #recruiterBeforeLogin .hiring h6,
            #recruiterBeforeLogin .work-exp h6{
                font-size: 18px;
                padding-bottom: 15px;
            }

            #recruiterBeforeLogin .hiring .hiring-items {
                display: grid;
                grid-template-columns: 130px 250px;
                padding-bottom: 15px;
            }

            #recruiterBeforeLogin .hiring .hiring-items p, #recruiterBeforeLogin .hiring .hiring-items span{
                font-size: 14px;
                line-height: 24px;
                padding-bottom: 5px;
            }
            #recruiterBeforeLogin .hiring .hiring-items span{
                color: #000;
                padding: 0;
            }

            #recruiterBeforeLogin .work-exp-wrapper{
                display: grid;
                grid-template-columns: repeat(3, auto);
            }
            #recruiterBeforeLogin .work-exp1{
                display: block;
                padding-top: 20px;
            }

            #recruiterBeforeLogin .work-exp1 p, #recruiterBeforeLogin .work-exp1 h6{
                width: 100%;
                color: #333;
                font-size: 16px;
            }
            #recruiterBeforeLogin .work-exp1 p{
                font-size: 14px;
                color: #999;
            }

            #recruiterBeforeLogin .card_profile{
                height: 150px;
            }
            #recruiterBeforeLogin .card_profile p{
                font-size: 18px;
                padding: 30px 0;
            }
            #recruiterBeforeLogin .card_profile a{
                width: 150px;
                padding: 10px 0;
                font-size: 16px;
            }
        }

    </style>

@endsection


@section('content')
    <div id="recruiterBeforeLogin">
        <section class="cards user_section">
            <div class="edit-pen">
                <a href="#" type="button">
                    <img src="/img/pencil_edit.png">
                </a>
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
                <div class="view_btn">
                    <a href="#"  type="button">
                        View Full Profile
                    </a>
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
                <div class="hiring-items">
                    <p class="key-skill">Key Skills &colon; &nbsp;</p>
                    <p> <span>Confidential</span></p>
                </div>

            </div>

        </section>
        <section class="cards work-exp">
            <h6 style="color: #000">Work Experience</h6>
            <div class="work-exp-wrapper">
                <div class="current work-exp1">
                    <p>Currently with:</p>
                    <h6>The Minimalist (Since Jun-2017)</h6>
                </div>
                <div class="desc work-exp1">
                    <p>Current Designation:</p>
                    <h6>HR Executive</h6>
                </div>
                <div class="role work-exp1">
                    <p>Role in Hiring:</p>
                    <h6>Hiring Manager</h6>
                </div>
                <div class="current work-exp1">
                    <p>Currently with:</p>
                    <h6>ABC Consultants (Jan 2016 - Jun 2017)</h6>
                </div>
                <div class="desc work-exp1">
                    <p>Current Designation:</p>
                    <h6>HR Executive</h6>
                </div>
                <div class="role work-exp1">
                    <p>Role in Hiring:</p>
                    <h6>Hiring Generalist</h6>
                </div>
            </div>





        </section>
        <section class="card_profile">
            <p>View full profile of Ritu Suruchi and 3781 Registration Recruiters</p>
           <span class="view_btn"> <a href="#" type="button"> View Full Profile</a> </span>
        </section>
    </div>

@endsection
