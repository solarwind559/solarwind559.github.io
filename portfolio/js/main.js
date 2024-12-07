// 'Return to top' button on scroll

window.addEventListener('scroll', function() {
  const scrollToTopButton = document.getElementById('top');
  if (window.scrollY > 200) {
      scrollToTopButton.style.display = 'block';
  } else {
      scrollToTopButton.style.display = 'none';
  }
});

document.getElementById('top').addEventListener('click', function() {
  window.scrollTo({ top: 0, behavior: 'smooth' });
});


// Trigger unloading animation when exiting hover mode

document.addEventListener('DOMContentLoaded', function() {
  const links = document.querySelectorAll('nav a');

  links.forEach(link => {
    link.addEventListener('mouseover', function() {
      link.classList.remove('unloading');
    });

    link.addEventListener('mouseout', function() {
      link.classList.add('unloading');
    });
  });
});

