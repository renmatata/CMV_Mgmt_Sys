/* Created by Tivotal */

console.log("Hello from app.js");

let sideMenu = document.querySelectorAll(".nav-link");
sideMenu.forEach((item) => {
    let li = item.parentElement;

    item.addEventListener("click", () => {
        sideMenu.forEach((link) => {
            link.parentElement.classList.remove("active");
        });
        li.classList.add("active");
    });
});

let menuBar = document.querySelector(".bx-menu");
let sideBar = document.querySelector(".sidebar");
let content = document.getElementById("maincontent");
menuBar.addEventListener("click", () => {
    sideBar.classList.toggle("hide");
    sideBar.style.left = "-60px";
    content.style.left = "-0px";
    content.style.width = "100%";
});

let isSidebarHidden = false;

menuBar.addEventListener("click", () => {
    isSidebarHidden = !isSidebarHidden; // Toggle the state

    if (isSidebarHidden) {
        // Hide the sidebar
        sideBar.classList.add("hide");
        sideBar.style.left = "-60px";
        content.style.left = "0px";
        content.style.width = "100%";
    } else {
        // Show the sidebar
        sideBar.classList.remove("hide");
        sideBar.style.left = "0";
        content.style.left = "300px"; // Adjust as needed
        content.style.width = "calc(100% - 300px)"; // Adjust as needed
    }
});

let main = document.getElementById("maincontent");
let switchMode = document.getElementById("switch-mode");
switchMode.addEventListener("change", (e) => {
    if (e.target.checked) {
        document.body.classList.add("dark");
        main.classList.add("dark");
        main.style.backgroundColor("Black");
    } else {
        document.body.classList.remove("dark");
    }
});

let searchFrom = document.querySelector(".content nav form");
let searchBtn = document.querySelector(".search-btn");
let searchIcon = document.querySelector(".search-icon");
searchBtn.addEventListener("click", (e) => {
    if (window.innerWidth < 576) {
        e.preventDefault();
        searchFrom.classList.toggle("show");
        if (searchFrom.classList.contains("show")) {
            searchIcon.classList.replace("fa-search", "fa-times");
        } else {
            searchIcon.classList.replace("fa-times", "fa-search");
        }
    }
});

window.addEventListener("resize", () => {
    if (window.innerWidth > 576) {
        searchIcon.classList.replace("fa-times", "fa-search");
        searchFrom.classList.remove("show");
    }
    if (window.innerWidth < 768) {
        sideBar.classList.add("hide");
    }
});

if (window.innerWidth < 768) {
    sideBar.classList.add("hide");
}
