
let a = document.querySelectorAll('.container');
let index = 0;

function slide(){
    a[index].style.display = 'none';
    index = (index + 1)% a.length;
    a[index].style.display = 'flex';
}

setInterval(slide, 3000);

let img_slider = document.querySelectorAll('.img-slider');
let imgSlide = document.querySelectorAll('.img-slider img');

function imgSlider(){
    img_slider.forEach(slider =>{
        slider.onclick = function(){
           
          slider.style.display = 'block';
            
           imgContentSlide();
        }
    })
}

function imgContentSlide(){
    imgSlide.forEach((slide)=>{
    
        slide.classList.add('.imgslider');
        // targetImg.classList.add('imgslider');
    })
}

imgSlider();

let read_mores  = document.querySelectorAll('#read-more-btn');

  read_mores.forEach(read_more =>{
    
    read_more.addEventListener('click', function() {
      
        let textContainers = document.querySelectorAll('#text-container');
        textContainers.forEach(textContainer =>{
          if (textContainer.classList.contains('expanded')) {
            this.textContent = "Lire moins";
            textContainer.animate([
              {height : '6.25rem'},{height : `${textContainer.scrollHeight/16}rem`}
            ],{
              duration : 500,
              fill : 'forwards'
            })
            textContainer.classList.remove('expanded')
          } else {
            this.textContent = "Lire plus";
            textContainer.animate([
              {height : `${textContainer.scrollHeight/16}rem`}, {height : '6.25rem'}
            ],{
              duration : 500,
              fill : 'forwards'
            })
            textContainer.classList.add('expanded')
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
