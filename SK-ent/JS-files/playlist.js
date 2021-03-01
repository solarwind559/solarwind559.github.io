const btns = document.querySelectorAll(".soon");
const modal = document.querySelector(".modal");
const close = document.querySelector(".close");

btns.forEach((soon) => {
  soon.addEventListener("click", (event) => {
  event.preventDefault();
  modal.classList.add("modal-show");

  })
})

close.addEventListener("click", () => {
  modal.classList.remove("modal-show");
});

document.addEventListener("keydown", (event) => {
  if (event.key ==="Escape") {
    modal.classList.remove("modal-show");
    clearModalData();
  }
})


