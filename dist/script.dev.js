"use strict";

var close = document.getElementById("close");
var openmenu = document.getElementById("open_menu");
var menu = document.getElementById("menu");
var sousmenu = document.getElementById("sous_menu");
var animations = document.getElementById("menu_item animations");
var opencompte = document.getElementById("open_compte");
var container = document.getElementById("container");
var closepopup = document.getElementById("closepopup");
var creer = document.getElementById("creer");
var opencreer = document.getElementById("open_creer");
var openconfirmer = document.getElementById("open_confirmer");
var confirmer = document.getElementById("confirmer");
openmenu.addEventListener("click", function () {
  menu.classList.add("active");
});
close.addEventListener("click", function () {
  menu.classList.remove("active");
});
opencompte.addEventListener("click", function () {
  container.classList.add("active");
});
closepopup.addEventListener("click", function () {
  container.classList.remove("active");
});
opencreer.addEventListener("click", function () {
  creer.classList.add("active");
  container.classList.remove("active");
});
openconfirmer.addEventListener("click", function () {
  confirmer.classList.add("active");
});
animations.addEventListener("click", function () {
  sousmenu.classList.add("active");
}); //popup

/*/
close.addEventListener("click", () => {
    if (menu.style.display != 'none' ) {
        menu.style.display = 'none';
    }
    
});
*/

/*
const open = document.getElementById("open");
const close = document.getElementById("close");
const container = document.getElementById("container");
const container2 = document.getElementById("container2");
const sure = document.getElementById("sure");
const open2 = document.getElementById("open2");
const close2 = document.getElementById("close2");
const close3 = document.getElementById("close3");
const close4 = document.getElementById("close4")
const allclose = document.getElementById("close", "close2");
//disconnect
const openall = document.getElemental
const open3 = document.getElementById("open3");
const creer = document.getElementById("creer", "cree");
const confirmer = document.getElementById("confirmer");
const open4 = document.getElementById("open4");
const finaliser = document.getElementById("finaliser");
const creercont = document.getElementById("creer_container");
const discoclose = document.getElementById("discoclose");
const discoclose2 = document.getElementById("discoclose2");
//Import var php



open.addEventListener("click", () => {
    container.classList.add("active");
});

open2.addEventListener("click", () => {
    creer.classList.add("active");
});


close.addEventListener("click", () => {
    container.classList.remove("active");
});

open2.addEventListener("click", () => {
    creer.classList.add("active");
});

close2.addEventListener("click", () => {
    creer.classList.remove("active");
});

open3.addEventListener("click", () => {
    confirmer.classList.add("active");
});

close3.addEventListener("click", () => {
    confirmer.classList.remove("active");
});

open4.addEventListener("click", () => {
    finaliser.classList.add("active");
});

close4.addEventListener("click", () => {
    finaliser.classList.remove("active");
    confirmer.classList.remove("active");
    creer.classList.remove("active");
    
});


allclose.addEventListener("click", () => {
    sure.classList.remove("active");
});
*/
//# sourceMappingURL=script.dev.js.map
