let currentSlide = 0;
const slides = document.querySelectorAll(".slide");
const thumbnails = document.querySelectorAll(".thumbnails img");
const prevBtn = document.getElementById("prevBtn");
const nextBtn = document.getElementById("nextBtn");

function showSlide(index) {
  slides.forEach((slide) => {
    slide.style.display = "none";
  });
  slides[index].style.display = "block";
}

thumbnails.forEach((thumbnail, index) => {
  thumbnail.addEventListener("click", () => {
    currentSlide = index;
    showSlide(currentSlide);
  });
});

prevBtn.addEventListener("click", () => {
  currentSlide = (currentSlide - 1 + slides.length) % slides.length;
  showSlide(currentSlide);
});

nextBtn.addEventListener("click", () => {
  currentSlide = (currentSlide + 1) % slides.length;
  showSlide(currentSlide);
});

showSlide(currentSlide);
