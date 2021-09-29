var menuDefault = document.getElementById("header-main");
var menuOpened = document.getElementById("header-opened");
var toggleOpen = document.getElementById("toggle-open");
var toggleClose = document.getElementById("toggle-close");
toggleOpen.addEventListener("click", () => {
    menuOpened.classList.toggle("header-js--hidden");
    menuDefault.classList.toggle("header-js--hidden");
});
toggleClose.addEventListener("click", () => {
    menuDefault.classList.toggle("header-js--hidden");
    menuOpened.classList.toggle("header-js--hidden");
});
var aboutSlider = new Swiper("#home-swiper", {
    direction: 'horizontal',
    loop: true,
    effect: 'slide',
    speed: 300,
    autoplay: true,
    delay: 3000,
  
    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
  
    // Navigation arrows
    navigation: {
      nextEl: '#el-next',
      prevEl: '#el-prev',
    },
  });