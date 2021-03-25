const more = document.getElementById("more");
const button = document.querySelector("button");

button.addEventListener("click", () => {
more.style.display = 'block';
button.style.display = 'none';
});