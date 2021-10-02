"use strict";

if (document.getElementById("blur-header-layer")) {
  var menuDefault = document.getElementById("header-main");
  var menuOpened = document.getElementById("header-opened");
  var toggleOpen = document.getElementById("toggle-open");
  var toggleClose = document.getElementById("toggle-close");
  var layerHeader = document.getElementById("blur-header-layer");
  toggleOpen.addEventListener("click", function () {
    menuOpened.classList.toggle("header-js--hidden");
    menuDefault.classList.toggle("header-js--hidden");
    layerHeader.classList.toggle("header-js--hidden");
  });
  toggleClose.addEventListener("click", function () {
    menuDefault.classList.toggle("header-js--hidden");
    menuOpened.classList.toggle("header-js--hidden");
    layerHeader.classList.toggle("header-js--hidden");
  });
}

var aboutSlider = new Swiper("#home-swiper", {
  direction: "horizontal",
  fadeEffect: {
    crossFade: true
  },
  speed: 1000,
  slidersPerView: 1,
  effect: "fade",
  loop: true,
  autoplay: {
    delay: 3000,
    disableOnInteraction: true
  },
  // If we need pagination
  pagination: {
    el: ".swiper-pagination",
    clickable: true
  },
  // Navigation arrows
  navigation: {
    nextEl: "#el-next",
    prevEl: "#el-prev"
  }
});
var projectSwiper = new Swiper("#project-swiper", {
  direction: "horizontal",
  fadeEffect: {
    crossFade: true
  },
  speed: 1000,
  slidersPerView: 1,
  effect: "fade",
  loop: true,
  autoplay: {
    delay: 3000,
    disableOnInteraction: true
  },
  // If we need pagination
  pagination: {
    el: ".swiper-pagination",
    clickable: true
  },
  // Navigation arrows
  navigation: {
    nextEl: "#el-next",
    prevEl: "#el-prev"
  }
});