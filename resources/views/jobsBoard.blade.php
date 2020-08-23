@extends('layouts.jobs')
@section('title')
    Jobs Board
@endsection

@section('style')

@endsection


@section('content')

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
                                             style=" fill:#000000">
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
                            <img src="/img/userPic.png"  alt="" class="rounded-circle">
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
                                             style=" fill:#000000">
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
                                             style=" fill:#000000">
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
                                             style=" fill:#000000">
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


@endsection
