const eyes = document.querySelector('.bi-eye');
const eyesoff = document.querySelector('.bi-eye-slash');
//const passwordfild = document.querySelector('input[type=password]');

eyes.addEventListener('click', () => {
    eyes.style.display = "none";
    eyesoff.style.display = "block";
    passwordfild.type = "text";
});
eyesoff.addEventListener('click', () => {
    eyes.style.display = "block";
    eyesoff.style.display = "none";
    passwordfild.type = "password";
});