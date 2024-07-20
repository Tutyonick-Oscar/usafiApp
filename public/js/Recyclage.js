// Récupérer les éléments HTML nécessaires
const listIcon = document.getElementById('list');
const navElement = document.getElementById('nav');
const hiddenElements = document.querySelectorAll('.hidde');
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


// le tableau de posts

let posts = [
    { id: 1, title: 'La gestion de dechet est necessaire pour nous proteger et protegr notre nature', imageUrl: '/media/Admin.Sev.jpg' },
    { id: 2, title: 'Il faut bien faire lusage de dechet dans la societé', imageUrl: '/media/Admin.Sev.jpg' },
    { id: 3, title: 'Post 2', imageUrl: '/media/Admin.Sev.jpg' },
    { id: 4, title: 'Post 3', imageUrl: '/media/Admin.Sev.jpg' },
    { id: 5, title: 'Post 4', imageUrl: '/media/Admin.Sev.jpg' },
    { id: 6, title: 'Post 5', imageUrl: '/media/Admin.Sev.jpg' },
  ];
  
  let currentPage = 1;
  const postsPerPage = 4;
  
  function createPostRow(post) {
    return `
      <tr id="post-${post.id}">
        <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">${post.id}</td>
        <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">${post.title}</td>
        <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">
          <img src="${post.imageUrl}" alt="Post Image" class="h-14 w-14 rounded-md">
        </td>
        <td class="px-4 py-2 flex gap-2 whitespace-nowrap text-right text-sm font-medium">
          <button class="text-white py-1 px-3 rounded-md bg-blue-600 " onclick="editPost(${post.id})">Modifier</button>
          <button class="text-white py-1 px-3 rounded-md bg-red-600 " onclick="deletePost(${post.id})">Supprimer</button>
        </td>
      </tr>
    `;
  }
  
  function editPost(postId) {
    // Logique pour modifier le post
    const title = prompt('Entrez le nouveau titre du post:', '');
    if (title) {
      const postIndex = posts.findIndex(post => post.id === postId);
      if (postIndex > -1) {
        posts[postIndex].title = title;
        renderPosts(currentPage); // Mettre à jour l'affichage du tableau
      }
    }
  }
  
  function deletePost(postId) {
    // Trouver l'index du post dans le tableau
    const postIndex = posts.findIndex(post => post.id === postId);
    // Supprimer le post du tableau
    if (postIndex > -1) {
      posts.splice(postIndex, 1);
      renderPosts(currentPage); // Mettre à jour l'affichage du tableau
    }
  }
  
  function renderPosts(page) {
    const startIndex = (page - 1) * postsPerPage;
    const selectedPosts = posts.slice(startIndex, startIndex + postsPerPage);
    const postsTable = document.getElementById('postsTable');
    postsTable.innerHTML = selectedPosts.map(createPostRow).join('');
    renderPagination();
  }
  
  function renderPagination() {
    const pageCount = Math.ceil(posts.length / postsPerPage);
    const pagination = document.getElementById('pagination');
    pagination.innerHTML = '';
    for (let i = 1; i <= pageCount; i++) {
      pagination.innerHTML += `<button class="mx-1 px-4 py-2 bg-gray-300 rounded hover:bg-gray-400 ${currentPage === i ? 'bg-gray-400' : ''}" onclick="changePage(${i})">${i}</button>`;
    }
  }
  
  function changePage(page) {
    currentPage = page;
    renderPosts(page);
  }
  
  // Initialiser l'affichage des posts
  renderPosts(currentPage);

  const calendarContainer = document.getElementById('calendar');
  const calendar = document.createElement('div');
  calendar.classList.add('calendar');
  calendarContainer.appendChild(calendar);

  const recyclingEventsTable = document.getElementById('recycling-events');
  const recyclingEventsBody = recyclingEventsTable.getElementsByTagName('tbody')[0];

  const recyclingEvents = [];

  function addRecyclingEvent(material, date) {
      const event = { material, date };
      recyclingEvents.push(event);
      displayRecyclingEvents();
  }

  function displayRecyclingEvents() {
      recyclingEventsBody.innerHTML = '';
      recyclingEvents.forEach((event, index) => {
          const row = document.createElement('tr');
          row.classList.add('border-b');
          const materialCell = document.createElement('td');
          materialCell.classList.add('py-2', 'px-4');
          materialCell.textContent = event.material;
          const dateCell = document.createElement('td');
          dateCell.classList.add('py-2', 'px-4');
          dateCell.textContent = event.date;
          const actionsCell = document.createElement('td');
          actionsCell.classList.add('py-2', 'px-4');
          const editButton = document.createElement('button');
          editButton.classList.add('bg-yellow-500', 'hover:bg-yellow-700', 'text-white', 'font-bold', 'py-1', 'px-2', 'rounded', 'mr-2');
          editButton.textContent = 'Modifier';
          editButton.addEventListener('click', () => editRecyclingEvent(index));
          const deleteButton = document.createElement('button');
          deleteButton.classList.add('bg-red-500', 'hover:bg-red-700', 'text-white', 'font-bold', 'py-1', 'px-2', 'rounded');
          deleteButton.textContent = 'Supprimer';
          deleteButton.addEventListener('click', () => deleteRecyclingEvent(index));
          actionsCell.appendChild(editButton);
          actionsCell.appendChild(deleteButton);
          row.appendChild(materialCell);
          row.appendChild(dateCell);
          row.appendChild(actionsCell);
          recyclingEventsBody.appendChild(row);
      });
  }

  function editRecyclingEvent(index) {
      const event = recyclingEvents[index];
      document.getElementById('material').value = event.material;
      document.getElementById('date').value = event.date;
      deleteRecyclingEvent(index);
  }

  function deleteRecyclingEvent(index) {
      recyclingEvents.splice(index, 1);
      displayRecyclingEvents();
  }

  const recyclingForm = document.getElementById('recycling-form');
  recyclingForm.addEventListener('submit', (event) => {
      //event.preventDefault();
      // const material = document.getElementById('material').value;
      //  const date = document.getElementById('date').value;
      //  console.log(material,date);
      // addRecyclingEvent(material, date);
      //recyclingForm.reset();
  });
  
  /**
   * select the input value from array's elements
   */
  const inputFill = (array,input)=>{
    /**
     * loop the array values
     */
    array.forEach(element => {
      array.indexOf(element)%2 == 0 ?
      element.classList.add('bg-gray-300') :
      element.classList.add('bg-gray-400') 
  
  
      /**
       * selecting an item
       */

      element.addEventListener('click',(e) => {
      
        input.focus();
        input.value = element.innerText.trim();
        input.dispatchEvent(new Event('input',{
          bubbles : true,
          cancelable : true
        }));
        element.parentNode.classList.add('hidden');
      })
      
    })
  }
  const quorters = document.getElementById('quorters')
  let quorter = Array.from(document.querySelectorAll('.quorter'))
 /**
  * filling the quorter input
  */
  inputFill(quorter,document.getElementById('quorter'));
  
  document.getElementById('showSelection').addEventListener('click',(e) => {
    quorters.classList.toggle('hidden');
   if (!avs.classList.contains('hidden')) {
    avs.classList.add('hidden');
   }
  })

  const avs = document.getElementById('avs')

  document.getElementById('showAvs').addEventListener('click',(e)=> {
    /**
     * filling the avenu input
     */
    inputFill(
      Array.from(document.querySelectorAll('.av')),
      document.getElementById('material')
    );
   
    document.getElementById('material').focus();

    avs.classList.toggle('hidden');
    if (!quorters.classList.contains('hidden')) {
      quorters.classList.add('hidden');
    }
  })

  window.addEventListener('click',(e)=>{
    document.querySelectorAll('.quorter').forEach(element =>{
      if (!element.parentNode.classList.contains('hidden')
          && e.target != document.getElementById('showAvs')
          && e.target != document.getElementById('showSelection')
        )
      {
        element.parentNode.classList.add('hidden')
      }
    })
  })