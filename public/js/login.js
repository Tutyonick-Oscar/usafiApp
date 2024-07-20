const eyes = document.querySelector('.bi-eye');
const eyesoff = document.querySelector('.bi-eye-slash');
const passwordfild = document.querySelector('input[type=password]');

//show and hide a password
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

// connexion with google Api

function onSignIn(googleUser) {
    var profile = googleUser.getBasicProfil();
    console.log('ID: ' + profile.getId());
    console.log('Name: ' + profile.getName());
    console.log('Image URL: ' + profile.getImageUrl());
    console.log('Email: ' + profile.getEmail());
}