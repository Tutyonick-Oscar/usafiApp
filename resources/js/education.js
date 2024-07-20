console.log('hello world !');
let read_mores  = document.querySelectorAll('#read-more-btn');
console.log(read_mores);

  read_mores.forEach(read_more =>{
    read_more.addEventListener('click', function() {
      console.log('click');
        let textContainers = document.querySelectorAll('#text-container');
        textContainers.forEach(textContainer =>{
          console.log(textContainer);
          if (textContainer.classList.contains('expanded')) {
            this.textContent = "Lire plus";
            textContainer.classList.remove('expanded');
            textContainer.style.display = 'block'; 
          } else {
            this.textContent = "Lire moins";
            textContainer.classList.add('expanded');
            textContainer.style.display = 'block'; // Change le style en block
          }
        })
        
      });
  })


   // Sélectionner les éléments icônes
   const likeIcons = document.querySelectorAll('.likeIcon');
   const likeIconFilleds = document.querySelectorAll('.likeIconFilled');
   const dislikeIcons = document.querySelectorAll('.dislikeIcon');
   const dislikeIconFilleds = document.querySelectorAll('.dislikeIconFilled');
 
   // Ajouter un écouteur d'événement pour le clic sur l'icône J'aime

  

  likeIcons.forEach(likeIcon =>{
    likeIcon.addEventListener('click', function() {
      // Basculer la visibilité des icônes
      likeIcon.style.display = "none";
      likeIconFilleD();
      
    });
  })

  function likeIconFilleD(){
    likeIconFilleds.forEach(likeIconFilled =>{
      likeIconFilled.style.display = "block";
    })
    dislikeIcons.forEach(dislikeIcon =>{
      dislikeIcon.style.display = "block";
    })
    dislikeIconFilleds.forEach(dislikeIconFilled =>{
      dislikeIconFilled.style.display = "none";
    })
  }

   
  dislikeIcons.forEach(dislikeIcon =>{
    dislikeIcon.addEventListener('click', function() {
        dislikeIcon.style.display = "none";

        dislikeIconFilled();
        
    });
  })
  

  function dislikeIconFilled(){
    dislikeIconFilleds.forEach(dislikeIconFilled =>{
      dislikeIconFilled.style.display = 'block';
    })
    likeIcons.forEach(likeIcon =>{
      likeIcon.style.display = "block";
    })
    likeIconFilleds.forEach(likeIconFilled =>{
      likeIconFilled.style.display = "none";
    })
    
  }
  


   // Ajouter un écouteur d'événement pour le clic sur l'icône Je n'aime pas
  
     // Basculer la visibilité des icônes
     
     
   

   // JavaScript pour ouvrir et fermer le popup

let shareBtns = document.querySelectorAll('#shareBtn');
let closeBtns = document.querySelectorAll('#closeBtn');
  
  shareBtns.forEach(shareBtn =>{
    shareBtn.addEventListener('click', function() {
    document.getElementById('sharePopup').classList.remove('hidden');
    });
  })
  

closeBtns.forEach(closeBtn =>{
  closeBtn.addEventListener('click', function() {
    document.getElementById('sharePopup').classList.add('hidden');
  });
})
