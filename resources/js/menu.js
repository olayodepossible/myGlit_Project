// Select DOM Item

/*const menuBtn = document.querySelector(".menu-btn");
const top_nav = document.querySelector(".top_nav");
const menuNav1 = document.querySelector(".top_nav-1");
const menuNav2 = document.querySelector(".top_nav-2");
const navItems1 = document.querySelectorAll(".top_nav_item1");
const navItems2 = document.querySelectorAll(".top_nav_item2");
const menuBtnLine = document.querySelectorAll(".btn-line");*/

//set initial State of menu

let showMenu = false;
let x = $('.btn-line').length;

$(document).ready(function(){
    $(".menu-btn").click(function(){
        if (!showMenu) {
            $('.menuBtn').addClass("close");
            $('.top_nav').addClass("show").fadeIn("slow");
            $(".btn-line:nth-of-type(1)").css("transform", "rotate(45deg) translate(4px, 3px)");
            $(".btn-line:nth-of-type(2)").css("opacity", "0");
            $(".btn-line:nth-of-type(3)").css("transform", "rotate(-45deg) translate(3px, -2px)");
            $(".btn-line").css("background-color", "#fff");


            //Set menu state
            showMenu = true;
        } else {
            $('.menuBtn').removeClass("close");
            $('.top_nav').removeClass("show").fadeOut("slow");
            $(".btn-line:nth-of-type(1)").css("transform", "rotate(0deg) translate(0)");
            $(".btn-line:nth-of-type(2)").css("opacity", "1");
            $(".btn-line:nth-of-type(3)").css("transform", "rotate(0deg) translate(0)");
            $(".btn-line").css("background-color", "#444");

            //Set menu state
            showMenu = false;
        }
    });
});




/*
menuBtn.addEventListener("click", toggleMenu);

function toggleMenu() {
    if (!showMenu) {
        // menuBtnLine.style.backgroundColor = '#fff'
        menuBtn.classList.add("close");
       top_nav.classList.add("show");
        for (let i = 0; i < menuBtnLine.length; i++) {
            menuBtnLine[i].style.backgroundColor = "#fff";
        }

        //Set menu state
        showMenu = true;
    } else {
        menuBtn.classList.remove("close");
        top_nav.classList.remove("show");
        for (let i = 0; i < menuBtnLine.length; i++) {
            menuBtnLine[i].style.backgroundColor = "#444";
        }

        //Set menu state
        showMenu = false;
    }
}*/

