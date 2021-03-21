const btns = document.querySelectorAll(".view");
const modal = document.querySelector(".modal");
const close = document.querySelector(".close");

btns.forEach((click) => {
  click.addEventListener("click", (event) => {
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

const more = document.getElementById("more");
const button = document.querySelector("button");

button.addEventListener("click", () => {
more.style.display = 'block';
button.style.display = 'none';
});
