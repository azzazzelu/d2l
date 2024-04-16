
const openButtons = document.querySelectorAll(".open-modal");
const closeButtons = document.querySelectorAll(".close-modal");
const modal = document.querySelector(".modal");
const overlay = document.querySelector(".overlay");
openButtons.forEach((button, index) => {
  button.addEventListener("click", () => {
    const cardContent = button.parentNode.getAttribute("data-content");
    const modalTitle = modal.querySelector("h3");
    const modalParagraph = modal.querySelector("p");
    // modalTitle.textContent = `Модальное окно для Карточки ${index + 1}`;
    modalParagraph.textContent = cardContent;
    modal.style.display = "block";
    overlay.style.display = "block";
  });
});
closeButtons.forEach((button) => {
  button.addEventListener("click", () => {
    modal.style.display = "none";
    overlay.style.display = "none";
  });
});