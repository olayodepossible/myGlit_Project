// Select DOM Item

const menuBtn = document.querySelector(".menu-btn");
const top_nav = document.querySelector(".top_nav");
const menuNav1 = document.querySelector(".top_nav-1");
const menuNav2 = document.querySelector(".top_nav-2");
const navItems1 = document.querySelectorAll(".top_nav_item1");
const navItems2 = document.querySelectorAll(".top_nav_item2");
const menuBtnLine = document.querySelectorAll(".btn-line");

//set initial State of menu

let showMenu = false;

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
}

