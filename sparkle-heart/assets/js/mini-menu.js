const x = document.getElementById("switch-to");
const lines = document.getElementById("switch-from");

function myFunction() {
  var toggleBtn = document.getElementById("myLinks");
  if (toggleBtn.style.display === "block") {
    toggleBtn.style.display = "none";
    lines.style.display = "block";
    x.style.display = "none";
  } else {
    toggleBtn.style.display = "block";
    lines.style.display = "none";
    x.style.display = "block";
  }
}