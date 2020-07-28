<html>
<head>
    <meta charset="UTF-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <title>
        MyGlit:Recruitment intelligence
    </title>

    {{-- Style --}}
    <style>
        *{
            box-sizing: border-box;
        }
        body{
            font-family: 'Poppins', sans-serif;
            font-style: normal;
            font-weight: 500;
            background-color:#fff ;
            color: #666666;
        }
        p{
            padding: 0;
        }
        a{
            color: #333333;
            background-color: transparent;
            text-decoration: none;
        }
        ul{
            list-style: none;
            padding: 0;
        }
        .container{
            margin: 40px;
            font-weight: lighter;
            text-align: justify;
        }
        .success_msg{
            font-size: 14px;
            line-height: 22px;
        }
        .success_msg h5{
            font-size: 18px;
        }
        .card{
            width: 100%;
            background: #F7F8FF;
            border: 1px dashed #EEEEEE;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .interview{
            font-size: 14px;
            padding: 5px;
            line-height: 19px;
            margin: auto 5px auto 5px;
        }
        .card h6{
            margin-top: 10px;
            margin-bottom: 10px;
            line-height: 22px;
            text-align: center;
        }
        .btn-interview-option{
            width: 80%;
            margin:0 auto 0 20px;
            padding: 8px;
            border-radius: 20px;
        }
        .confirm-interview{
            background-color: #E33D47;
            border: none;
            color: #ffffff;
        }
        .reschedule-interview{
            background-color: transparent;
            margin-top: 20px;
            margin-bottom: 10px;
            border: 1px solid #E33D47;
            color: #E33D47;
        }
        .enquire p{
            font-size: 14px;
            line-height: 30px;
        }
        .tips .mark-svg{
            display: flex;
            margin-bottom: 20px;
        }
        .tips .mark-svg div{
            margin-right: 10px ;
        }
        .tips .mark-svg p{
            margin: 0;
            font-size: 10px;
            line-height: 19px;
        }
        .tips .mark-svg img{
            width: 18px;
            height: 18px;
            padding-top: 5px;
        }
        .profile_card{
            background: #F3F4F8;
            border: 1px solid #DDDDDD;
            box-sizing: border-box;
            border-radius: 10px;
            margin: 30px auto;
        }
        .profile_card .image{
            margin: 10px auto;
            text-align: center;
            padding: 0 20px 0 20px;
        }
        .profile_card p{
            margin: 5px 0 0 0;
            line-height: 20px;
            font-size: 12px;
        }
        .profile_card h5{
            margin: 5px;
        }
        .profile_report{
            margin-left: 150px;
            font-weight: bold;
            font-size: 11px;
            line-height: 15px;
            margin-bottom: 10px;
        }
        .notes p{
            font-weight: normal;
            font-size: 12px;
            line-height: 22px;
            margin: 0;
            color: #666666;
        }
        .notes h6{
            font-weight: bold;
            font-size: 13px;
            line-height: 19px;
            margin: 0;
            color: #666666;
        }
        .notes li{
            font-size: 10px;
            line-height: 20px;
        }
        .disclaimer p{
            margin: 0;
            font-size: 12px;
            color: #999999;
            text-align: justify;
        }
        footer > *{
            width: 100%;
            background-color: #ECECEC;
            font-size: 9px;
            text-align: center;
            padding: 0;
            color: #999999;
        }


        @media screen and (min-width: 600px) and (max-width:768px) {
            .card {
                width: 80%;
                margin: 20px auto;
            }
            .btn-interview-option{
                width: 40%;
            }
            .profile_card{
                width: 80%;
            }
            .profile_report{
                margin-left: 450px;
            }
        }


        /* LARGE SCREEN */
        @media (min-width: 769px) {
            .container{
                max-width: 1170px;
                margin-left: auto;
                margin-right: auto;
                padding: 1rem;
            }
            .success_msg{
                font-size: 16px;
            }
            .cards{
                width: 60%;
                margin: 50px auto;
            }
            .card h6 {
                word-break: break-word;
                font-size: 14px;
                text-align: center
            }
            .btn-interview-option{
                width: 40%;
                border-radius: 20px;
                font-size: 15px;
                margin: 0;
                text-align: center;
                border: 0;
            }

            .interview{
                max-width: 400px;
                text-align: center;
                margin: 0 auto;
                font-size: 0.85rem;
            }
            .confirm-interview{
                font-size: 1rem;
                font-weight: 600;
                padding: 1rem 2rem;
                margin: 1.5rem 0.5rem 1.5rem 3.5rem;
                letter-spacing: 0.05rem;
            }
            .reschedule-interview{
                width: 40%;
                font-size: 1rem;
                font-weight: 600;
                padding: 1rem 2rem;
                border: 1px solid #E33D47;
                margin: 1.5rem 0 1.5rem 0.5rem;
                letter-spacing: 0.05rem;
            }

            .tips .mark-svg p{
                font-size: 14px;
            }
            .profile_card p{
                font-size: 14px;
            }
            .profile_card h5{
                font-size: 18px;
            }
            .profile_report {
                margin-left: 600px;
                font-size: 12px;
            }

            .notes h6, .notes li{
                font-size: 14px;
                line-height: 22px;
            }
            .disclaimer p{
                font-size: 14px;
                line-height: 137%;
            }
            footer >*{
                font-size: 10px;
                height: 50px;
                text-align: center;
                padding-top: 20px;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <div class="logo">
        <a class="navbar-brand" href="#">
            <img src="http://freeversion.myglit.com/images/myglit-banner.png" class="img-fluid" alt="" width="100">
        </a>
    </div>
    <div class="reg_msg ">
        <div class="success_msg">
            <h5>Dear Malayne,</h5>
            <p>Thank you for applying with Firstsource</p>
            <p>
                You have been successfully registered for Interview at
                <strong>Firstsource (Cebu)</strong> on <strong>19-Dec-2019.</strong> You can walk in anytime
                <strong>10 AM to 5 PM.</strong> Your Registration Number is <strong>1872765481.</strong>
                Please make sure you write "Consultancy
                Name" on the Application form and also show this Email at the Reception.
            </p>
            <p class="address">
                <img src="https://ci5.googleusercontent.com/proxy/nARSYGm-lselsptgEkbLtB7WML_QhOvhLj1JGWaqoPLkO-_n5gFhipeTnJnTteO9yfrWf-Jre5s5oPAPNUiKmo4aD5d8hA=s0-d-e1-ft#http://freeversion.myglit.com/images/map-marker.png" alt="" style="margin-right:0.25rem" class="CToWUd">
                <strong>Interview Address is :</strong> 3rd Flr, Skyrise 1 Bldg, Aisatown I.T Park, Cebu City.
            </p>
        </div>

        <div class="card cards">
            <h6 style="word-break: break-word">Please Confirm Your Interview At Firstsource (Cebu) Now</h6>
            <div class="interview">
                <p>In the rare case if you have to reschedule your interview, choose your date
                    carefully and then you will get a new email from us with the new date.
                </p>
            </div>

            <a href="#" target="_blank">
                <button class="confirm-interview btn-interview-option">Confirm Interview</button>

            </a>


            <a href="#" target="_blank">
                <button class="reschedule-interview btn-interview-option">Reschedule Interview</button>

            </a>
        </div>
        <div class="enquire">
            <p style="word-break:break-word">
                If you have any more queries do reach out to me at <strong><span style="word-break:break-word"><a href="mailto:jade@gmail.com" target="_blank">johndoe@example.com</a></span></strong>
            </p>
            <div>
                <p>
                    <span>Please show this Mail at the Reception when you reach for the Interview </span>
                </p>
                <p>
                    Please <strong>click on Confirm Interview Button</strong>
                    and give your confirmation so that your Interview can be Prioritised.
                    In the event you cant attend the Interview you can use the
                    <strong>Reschedule button </strong>to change your Date of Interview too.
                </p>
                <p>
                    If your date of Interview is Saturday please double check with your Recruiter again for last minute Cancellations.
                    Also We don't work on Sundays.
                </p>
            </div>

        </div>
        <div class="tips">
            <ul>
                <h3>Tips:</h3>
                <li class="mark-svg">
                    {{--<div>
                        <img src="https://img.icons8.com/pastel-glyph/12/000000/checked.png"/>
                    </div>--}}
                    <img src="https://ci6.googleusercontent.com/proxy/aWNZ99K9yKrXRmTNFkFxGCSGgGRG78XNoGENdhWcxD3mKyJVtZTgy0r95N0j2peEVWPs9HVU5BpavI-7dDFJ2aQQa5EjPQ=s0-d-e1-ft#http://freeversion.myglit.com/images/check-mark.png" alt="" style="margin-right:1rem" class="CToWUd">

                    <span>Please make sure you carry <strong>2 Valid ID's</strong> when you reach for the Interview along with your Resume</span>
                </li>
                <li  class="mark-svg">
                    <img src="https://ci6.googleusercontent.com/proxy/aWNZ99K9yKrXRmTNFkFxGCSGgGRG78XNoGENdhWcxD3mKyJVtZTgy0r95N0j2peEVWPs9HVU5BpavI-7dDFJ2aQQa5EjPQ=s0-d-e1-ft#http://freeversion.myglit.com/images/check-mark.png" alt="" style="margin-right:1rem" class="CToWUd">

                    <span> Just Be Confident during the Interview. Make the Interviewer Believe that you are here for Long Term to make your career.</span>
                </li>
                <li  class="mark-svg">
                    <img src="https://ci6.googleusercontent.com/proxy/aWNZ99K9yKrXRmTNFkFxGCSGgGRG78XNoGENdhWcxD3mKyJVtZTgy0r95N0j2peEVWPs9HVU5BpavI-7dDFJ2aQQa5EjPQ=s0-d-e1-ft#http://freeversion.myglit.com/images/check-mark.png" alt="" style="margin-right:1rem" class="CToWUd">

                    <span>Never Bad Mouth your Current or your Past Employer. Doing this will surely lead you to Rejection.</span>
                </li>
                <li class="mark-svg">
                    <img src="https://ci6.googleusercontent.com/proxy/aWNZ99K9yKrXRmTNFkFxGCSGgGRG78XNoGENdhWcxD3mKyJVtZTgy0r95N0j2peEVWPs9HVU5BpavI-7dDFJ2aQQa5EjPQ=s0-d-e1-ft#http://freeversion.myglit.com/images/check-mark.png" alt="" style="margin-right:1rem" class="CToWUd">

                    <span>
                                We wish you all the Best for the Interview. If you still have anymore queries please feel free to reach out to me at (<strong><span style="word-break:break-word"><a href="mailto:jade@gmail.com" target="_blank">jade@gmail.com</a></span></strong>)
                            </span>
                </li>
            </ul>
        </div>
        <div class="profile_card cards">
            <div class="image">
                <img src="https://img.icons8.com/ultraviolet/40/000000/name.png"/>
                <h5>John Doe</h5>
                <p> Gender: Male</p>
                <p>Email Id: johndoe526@gmail.com  </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
            <div class="profile_report">
                <a href="#" style="color: #6CA7FF;">Report</a>
            </div>
        </div>
        <div class="notes">
            <ul class="m_3211746803134860456list-circle" style="list-style-type:circle">
                <li style="margin:0.5rem 0">
                    We dont hire anyone below 18 years of age
                </li>

                <li style="margin:0.5rem 0">
                    We dont hire foreigners
                </li>
            </ul>
        </div>
        <div class="disclaimer">
            <p>
                <strong >Please Note:</strong> The Salary packages offered by the Recruiter is the maximum Salary package offered.
                There is no Guarantee that you may get the same salary package as a lot depends on the Account being offered to you,
                designation, your Interview with the Company, your valid experience etc.
                The Recruiter is using Myglit to automate the hiring Process in his company and Myglit may not have any Direct Relationship with the Company.
                In this Case myGlit is an aggregator with the aim to help Recruiters increase the efficiency of Hiring which in turn helps the Candidate.
                If you have any complaints against the Recruiter you can click on the Report Button besides the Profile of the Recruiter with your concern.
                It is our Endevaour that Myglit empowers the Candidates with more and Better Jobs using our Proprietary Al Algorithm.
            </p>
        </div>
    </div>
</div>
<footer>
    <p>
        Copyright © 2020 MyGlit Inc Pvt Ltd. All Rights Reserved. | TERMS & CONDITION & PRIVACY POLICY
    </p>
</footer>
</body>
</html>
