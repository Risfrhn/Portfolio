import './bootstrap';


import Typed from 'typed.js'

document.addEventListener('DOMContentLoaded', () => {
    const el = document.querySelector('.typed-text')

    if (el) {
        const strings = JSON.parse(el.dataset.strings)

        new Typed(el, {
            strings: strings,
            typeSpeed: 80,
            backSpeed: 50,
            backDelay: 1500,
            loop: true,
            showCursor: false,
        })
    }
})


// scroll navbar
window.addEventListener("scroll", function () {
  const navbar = document.getElementById("navbar");

  if (window.scrollY > 50) {
    navbar.classList.add("scrolled");
  } else {
    navbar.classList.remove("scrolled");
  }
});
