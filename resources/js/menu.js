//set initial State of menu

let showMenu = false;
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
        e.preventDefault();
         if($(e.target).hasClass('arrowD')) {
             if ($(this).find('.icons').hasClass('fill')) {
                 $(this).find('.dropdown').css("background-color", "#fff");
                 $(this).find('.dropbtn').css("color", "#333");
                 $(this).find(".icons").removeClass("fill");
                 $(this).find(".hiring").css("color", "#fff");
                 $(this).find('.dropdown-contents').slideUp(500);
                 console.log("slide up this active drop down cos it is open already");
             }
             else {
                 $(".icons").removeClass("fill");
                 $(".hiring").css("color", "#fff");
                 $('.dropdown').css("background-color", "#fff");
                 $('.dropbtn').css("color", "#333");
                 $('.dropdown-contents').slideUp(500);
                 $(this).find('.dropdown').css("background-color", "#28C882");
                 $(this).find(".dropbtn").css("color", "#fff");
                 $(this).find(".icons").addClass("fill");
                 $(this).find(".hiring").css("color", "#333");
                 $(this).find('.dropdown-contents').slideDown(1000);
                 console.log("slide up all active drop down and open this current div");
             }
             e.stopPropagation();
         }

    });
    /*  Company Inbox main Ends */

    //----- Open model CREATE -----//
    $('.btnDiv').click(function (e) {

        $('#btn-save').val("add");
        $('#modalForm').trigger("reset");
        $('#formModal').modal('show');
    });

    $('.closeBtn').click(function () {
        $('#modalForm').trigger("reset");
        $('#formModal').modal('hide')
    })
    //----- End model CREATE -----//
});



