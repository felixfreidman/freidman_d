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
  // autoplay: {
  //     delay: 3000,
  //     disableOnInteraction: true,
  // },
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
}); // Mobile header

var mоbileToggler = document.getElementById("mobile-toggler");
var firstLine_Cross = document.getElementById("mobile-line--one");
var secondLine_Cross = document.getElementById("mobile-line--two");
var thirdLine_Cross = document.getElementById("mobile-line-three");
var mobileLayer = document.getElementById("mobile-blur-layer");
var mobileList = document.getElementById("mobile-list");
mоbileToggler.addEventListener("click", function () {
  firstLine_Cross.classList.toggle("line-rotation--clockwise");
  secondLine_Cross.classList.toggle("line-rotation--clockwise_counter");
  thirdLine_Cross.classList.toggle("line-opacity");
  mobileLayer.classList.toggle("header-layer--transform_top");
  mobileList.classList.toggle("header-list--transform_top");
}); // Mail Send Function

var writeUs = document.getElementById("contact-us");
var form = $(".form-container");
form.on("submit", function (event) {
  event.preventDefault();
  var vanilaForm = $(this);
  var formData = vanilaForm.serializeArray();
  $.ajax({
    url: "/wp-admin/admin-ajax.php",
    method: "post",
    data: formData,
    action: "ajax_form",
    success: function success(response) {
      $("#submit-ajax").html(response);
    }
  });
});