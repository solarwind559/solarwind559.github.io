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


var list = document.querySelector('#listing');

[...list.children]
  .sort((a,b)=>a.innerText>b.innerText?1:-1)
  .forEach(node=>list.appendChild(node));



const searchBar = document.forms['search-box'].querySelector('input');
searchBar.addEventListener('keyup', function(e){
  const term = e.target.value.toLowerCase();
  const profiles = list.getElementsByTagName('li');
  Array.from(profiles).forEach(function(n){
    const name = n.firstElementChild.textContent;
    if(name.toLowerCase().indexOf(term) != -1){
      n.style.display = 'block';
    } else {
      n.style.display = 'none';
    }
  })
})


