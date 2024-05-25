// SoliDeoGloria

document.addEventListener("DOMContentLoaded", function() {
  let prev = document.querySelector(".prev");
  let next = document.querySelector(".next");
  let slider = document.querySelector(".slider");

  next.addEventListener("click", function () {
      let slides = document.querySelectorAll(".slides");
      slider.appendChild(slides[0]);
  });

  prev.addEventListener("click", function () {
      let slides = document.querySelectorAll(".slides");
      slider.prepend(slides[slides.length - 1]);
  });
});


/*
let prev = document.querySelector(".prev");
let next = document.querySelector(".next");
let slider = document.querySelector(".slider");

next.addEventListener("click", function () {
  let slides = document.querySelectorAll(".slides");
  slider.appendChild(slides[0]);
});
prev.addEventListener("click", function () {
  let slides = document.querySelectorAll(".slides");
  slider.prepend(slides[slides.length - 1]);
});

*/