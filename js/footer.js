var footer = document.querySelector('.animate-footer');

function footerAnimation() {
  var footerTop = footer.getBoundingClientRect().top;
  var windowHeight = window.innerHeight;

  if (footerTop < windowHeight) {
    footer.classList.add('footer-visible');
  }
}

window.addEventListener('scroll', footerAnimation);