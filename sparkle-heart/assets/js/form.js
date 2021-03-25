const form = document.querySelector("form");
const validName = document.querySelector('input[name="name"]');
const success = document.querySelector(".success");
const undo = document.querySelector(".on-success");

// console.log(validName);
// console.log(success)

const validateForm = () => {
  if (validName.value) {  
    success.classList.remove("hidden");
    undo.classList.add("hidden");
  } else {
  }
};

form.addEventListener("submit", (e) => {
  e.preventDefault();
  // console.log("works?");
  validateForm();
})