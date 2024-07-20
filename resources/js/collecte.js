// Fonction pour rediriger de la page actuelle vers une nouvelle page
function redirectToPage() {
    window.location.href = 'home.html';
  }
  
  // Vous pouvez appeler cette fonction en réponse à un événement, comme un clic sur un bouton
  try {
    document.getElementById('monBouton').addEventListener('click', redirectToPage);
  } catch (error) {
    console.log(error.message);
  }
  