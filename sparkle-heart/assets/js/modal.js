const modal = document.querySelector(".modal");
const close = document.querySelector(".close");

close.addEventListener("click", () => {
  modal.classList.remove("modal-show");
});

document.addEventListener("keydown", (event) => {
  if (event.key ==="Escape") {
    modal.classList.remove("modal-show");
    clearModalData();
  }
})