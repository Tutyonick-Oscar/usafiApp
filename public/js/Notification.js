// Récupérer les éléments HTML nécessaires
const listIcon = document.getElementById('list');
const navElement = document.getElementById('nav');
const hiddenElements = document.querySelectorAll('#hidde');
const iconElements = document.querySelectorAll('#icon');
const mainElement = document.getElementById('main');

// Variable pour garder trace de l'état de l'interface
let isNavExpanded = false;

// Fonction pour gérer le clic sur l'icône "list"
listIcon.addEventListener('click', () => {
  if (!isNavExpanded) {
    // Réduire la largeur de la barre de navigation
    navElement.classList.remove('w-1/6');
    navElement.classList.add('w-[8%]');

    // Cacher les éléments avec la classe "hidde"
    hiddenElements.forEach(element => {
      element.style.display = 'none';
    });

    // Afficher les éléments avec l'ID "icon"
    iconElements.forEach(element => {
      element.style.display = 'block';
    });

    // Augmenter la largeur du bloc "main"
    mainElement.classList.remove('w-5/6');
    mainElement.classList.add('w-[90%]');
    mainElement.classList.add('translate-x-[7rem]');
    // mainElement.classList.remove('translate-x-32');
  } else {
    // Revenir à l'état initial
    navElement.classList.remove('w-[8%]');
    navElement.classList.add('w-1/6');
    hiddenElements.forEach(element => {
      element.style.display = 'block';
    });
    iconElements.forEach(element => {
      element.style.display = 'block';
    });
    mainElement.classList.remove('w-[90%]');
    mainElement.classList.add('w-5/6');
    mainElement.classList.remove('translate-x-[7rem]');

  }

  // Inverser l'état de l'interface
  isNavExpanded = !isNavExpanded;
});



const notificationItems = document.querySelectorAll('.notification-item');
    const notificationContents = document.querySelectorAll('.notification-content');

    notificationItems.forEach((item, index) => {
      item.addEventListener('click', () => {
        item.classList.toggle('h-32');
        item.classList.toggle('h-auto');
      });
    });