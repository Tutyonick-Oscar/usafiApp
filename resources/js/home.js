// let a = document.querySelectorAll('.container');
// let index = 0;

// function slide(){
//     a[index].style.display = 'none';
//     index = (index + 1)% a.length;
//     a[index].style.display = 'flex';
// }

// setInterval(slide, 3000);

// Fonction pour basculer entre les icônes
function toggleIcon(elementId) {
    const icon = document.getElementById(elementId);
    icon.classList.remove('hidden'); // Alterne la classe "hidden"
}

// Écouteurs d'événements pour les icônes

let calendar = document.querySelector('#calendar');
try {
    document.getElementById('oui').addEventListener('click', () => {
        toggleIcon('rempli');
        toggleIcon('vide');
    
         calendar.style.display = "block";
    });
} catch (error) {
    console.log(error.message);
}

let exitCalender = document.querySelector('.delete');
exitCalender.onclick = function(){
     calendar.style.display = "none";
     document.querySelector("#vide").style.display = 'none';
}

document.getElementById('non').addEventListener('click', () => {
    // toggleIcon('remplie');
    // toggleIcon('vides');

    var elementQuestion = document.getElementById('question');
     elementQuestion.style.display = 'none';

     let cal = document.querySelector('#calendrier');
     cal.style.display = "block";
     
});

// Fonction pour supprimer un élément et afficher un autre
// function toggleElements() {
//     // Supprime l'élément avec l'id "question"
//     var elementQuestion = document.getElementById('question');
//     elementQuestion.style.display = 'none';
  
//     // Affiche l'élément avec l'id "calendar"
//     var elementCalendar = document.getElementById('calendar');
//     elementCalendar.style.display = 'block';
//   }
  
//   // Ajoute un écouteur d'événements à l'icône "Oui"
//   document.getElementById('oui').addEventListener('click', function() {
//     toggleElements();
//   });

//   // Fonction pour supprimer un élément et afficher un autre
// function toggleElementsCalendrier() {
//     // Supprime l'élément avec l'id "question"
//     var elementQuestion = document.getElementById('question');
//     elementQuestion.style.display = 'none';
  
//     // Affiche l'élément avec l'id "calendrier"
//     var elementCalendar = document.getElementById('calendrier');
//     elementCalendar.style.display = 'block';
//   }
  
//   // Ajoute un écouteur d'événements à l'icône "Non"
//   document.getElementById('non').addEventListener('click', function() {
//     toggleElements();
//   });
  