

let a = Array.from(document.querySelectorAll('.container'));
let index = 0;
function slide(){
    if(index == a.length){
        index = 0;
    }
    a.forEach(element =>{
        if (a.indexOf(element) == index && element.classList.contains('hidden')) {
            element.classList.remove('hidden')
        }
        if (a.indexOf(element) != index && !element.classList.contains('hidden')) {
            element.classList.add('hidden')
        }
    })
    index ++;
}

setInterval(slide, 3000);

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
     cal.classList.toggle('hidden');
     //cal.style.display = "block";
     
     
});
  
const header = document.querySelector(".calendar h3");
const dates = document.querySelector(".dates");
const navs = document.querySelectorAll("#prev, #next");



const months = [
        "Janvier",
        "Février",
        "Mars",
        "Avril", 
        "Mai", 
        "Juin", 
        "Juillet", 
        "Aout", 
        "Septembre", 
        "Octobre", 
        "Novembre", 
        "Decembre",
    ];

    let date = new Date();
    let month = date.getMonth();
    let year = date.getFullYear();

    function renderCalendar(){


        const start = new Date(year, month, 1).getDay();
        const endDate = new Date(year, month +1, 0).getDate();
        const end = new Date(year, month, endDate).getDay();
        const endDatePrev = new Date(year, month, 0).getDate();

        let datesHtml = " ";

        for (let i = start; i > 0; i--){
            datesHtml += `<li class="inactive">${endDatePrev - i + 1}</li>`;
        }

        for (let i = 1; i <= endDate; i++){
            let className = 
                i === date.getDate() &&
                month === new Date().getMonth() &&
                year === new Date().getFullYear()

                ? 'class="today"'
                 : '';

            datesHtml += `<li ${className}>${i}<?li>`;
        }

        for(i = end; i < 6; i++) {
            datesHtml += `<li class="inactive">${ i - end + 1}</li>`;
        }

        dates.innerHTML = datesHtml;
        header.textContent = `${months[month]} ${year}`;
    }

    navs.forEach(nav =>{
        nav.addEventListener('click', e => {
            const btnId = e.target.id;

            if(btnId === "prev" && month === 0) {
                year--;
                month=11;
            } else if (btnId === "next" && month === 11){
                year++;
                month=0;
            } else {
                month = btnId === "next" ? month + 1 : month -1;
            }

            date = new Date(year, month, new Date().getDate());
            year = date.getFullYear();
            month = date.getMonth();

            renderCalendar();
        })
    })


    renderCalendar();


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
  