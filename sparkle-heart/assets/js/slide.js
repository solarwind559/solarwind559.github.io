const previous = document.querySelector('.previous');
const next = document.querySelector('.next');

var slider = document.getElementById('carouselExampleControls');
var end = document.getElementById('end');
var forward = document.getElementById('forward');
var section = document.querySelectorAll('.slides').length;
var sectionIndex = 1;

function changeOpacity(){
   if (sectionIndex == 1 ) {
    end.style.opacity = '0.5';
  } else {
    end.style.opacity = '1';
  }
  if (sectionIndex == section ) {
    forward.style.opacity = '0.5';
  } else {
    forward.style.opacity = '1';
  }
}

previous.addEventListener('click', () => {
  sectionIndex = (sectionIndex > 1) ? sectionIndex - 1 : 1;
  slider.style.transform = 'translate(' + (sectionIndex-1) * (0/section) +  '%)';
  changeOpacity();
});

next.addEventListener('click', () => {
  sectionIndex = (sectionIndex < section) ? sectionIndex + 1 : section;
  slider.style.transform = 'translate(' + (sectionIndex-1) * (0/section) +  '%)';
  changeOpacity();
});
