//set initial State of menu

let showMenu = false;
let showDropdown = false;

$(document).ready(function(){

    /*  Candidate Dashboard Begins */
    $(".menu-btn").click(function(){
        if (!showMenu) {
            $('.menu-btn').addClass("close").css( "transform", "rotate(180deg)");
            $(".btn-line:nth-of-type(1)").css("transform", "rotate(45deg) translate(4px, 3px)");
            $(".btn-line:nth-of-type(2)").css("opacity", "0");
            $(".btn-line:nth-of-type(3)").css("transform", "rotate(-45deg) translate(3px, -2px)");
            $(".btn-line").css("background-color", "#fff");


            //Set menu state
            showMenu = true;
        } else {
            $('.menu-btn').removeClass("close");
            $(".btn-line:nth-of-type(1)").css("transform", "rotate(0deg) translate(0)");
            $(".btn-line:nth-of-type(2)").css("opacity", "1");
            $(".btn-line:nth-of-type(3)").css("transform", "rotate(0deg) translate(0)");
            $(".btn-line").css("background-color", "#333");

            //Set menu state
            showMenu = false;
        }

        $('.top_nav').toggle("slow");
    });

    $(".svg_menu").click(function(){
        $(".left-side-bar").toggle("slow");
    });
    /*  Candidate Dashboard Ends */


    /*  Company Inbox main Begins */
    $(".menu-btn1").click(function(){
        if (!showMenu) {
            $('.menu-btn1').addClass("close")
            $(".btnLine:nth-of-type(1)").css("transform", "rotate(45deg) translate(9px, 6px)");
            $(".btnLine:nth-of-type(2)").css("opacity", 0);
            $(".btnLine:nth-of-type(3)").css("transform", "rotate(-45deg) translate(5px, -2px)");

            //Set menu state
            showMenu = true;
        } else {
            $('.menu-btn1').removeClass("close");
            $(".btnLine:nth-of-type(1)").css("transform", "rotate(0deg) translate(0)");
            $(".btnLine:nth-of-type(2)").css("opacity", 1);
            $(".btnLine:nth-of-type(3)").css("transform", "rotate(0deg) translate(0)");

            //Set menu state
            showMenu = false;
        }
        $('.left-sideBar').toggle("slow");
    });


    $('.content-wrapper').on('click', function(e){
        if(!showDropdown){
            $(this).find('.dropdown').css("background-color", "#28C882");
            $(this).find(".dropbtn").css("color", "#fff");
            $(this).find(".hiring").css("color", "#333");
            showDropdown = true;
        }
        else {
            $(this).find('.dropdown').css("background-color", "#fff");
            $(this).find('.dropbtn').css("color", "#333");
            $(this).find(".hiring").css("color", "#fff");
            showDropdown = false;
        }
        e.stopPropagation();
        $(this).find('.dropdown-contents').toggle("slow");
        console.log(e);
    });
    /*  Company Inbox main Ends */
});



