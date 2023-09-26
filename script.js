document.addEventListener('DOMContentLoaded', function () {
    const loginForm = document.getElementById('loginForm');
    const registrationForm = document.getElementById('registrationForm');
    const registerToggle = document.getElementById('registerToggle');
    const loginToggle = document.getElementById('loginToggle');
    const loginCard = document.querySelector('.auth-card:not(.hidden)');
    const registerCard = document.querySelector('.auth-card.hidden');

    registerToggle.addEventListener('click', function (e) {
        e.preventDefault();
        loginCard.classList.add('hidden');
        registerCard.classList.remove('hidden');
    });

    loginToggle.addEventListener('click', function (e) {
        e.preventDefault();
        registerCard.classList.add('hidden');
        loginCard.classList.remove('hidden');
    });

    loginForm.addEventListener('submit', function (e) {
        e.preventDefault();
        // Perform login form submission and validation here
    });

    registrationForm.addEventListener('submit', function (e) {
        e.preventDefault();
        // Perform registration form submission and validation here
    });
  });

    const content = document.querySelector('.content');
const phrases = [
  "Welcome to VitalsFit - Your Ultimate Healthcare Ecommerce Destination!",
  "Explore our diverse selection of high-quality products.",
  "Empowering you on your journey to optimal health and well-being.",
  "Discover a healthier lifestyle with VitalsFit.",
];

let phraseIndex = 0;
let charIndex = 0;
let isFirstTime = true;

function typePhrase() {
  if (isFirstTime) {
    content.innerHTML = content.innerHTML.trim(); // Remove leading/trailing whitespace
    isFirstTime = false;
  }

  if (charIndex < phrases[phraseIndex].length) {
    content.innerHTML += phrases[phraseIndex].charAt(charIndex);
    charIndex++;
    setTimeout(typePhrase, 50);
  } else {
    setTimeout(erasePhrase, 2000);
  }
}

function erasePhrase() {
  if (charIndex > 0) {
    content.innerHTML = content.innerHTML.slice(0, -1); // Remove the last character
    charIndex--;
    setTimeout(erasePhrase, 30);
  } else {
    phraseIndex = (phraseIndex + 1) % phrases.length;
    setTimeout(typePhrase, 500);
  }
}

typePhrase(); 

var slides = document.querySelectorAll('.slide');
var currentSlideIndex = 0;

function showNextSlide() {
    slides[currentSlideIndex].querySelector('.slide-num').style.display = 'none';
    currentSlideIndex = (currentSlideIndex + 1) % slides.length;
    slides[currentSlideIndex].querySelector('.slide-num').style.display = 'block';
}

showNextSlide(); // Show the first image immediately

setInterval(showNextSlide, 20000); // Show subsequent images every 20 seconds



