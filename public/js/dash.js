
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

// Les graphiques

const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['Abonné', 'Premium', 'Collecte', 'Av. Recyclé', 'Partager', 'Aimé'],
        datasets: [{
          label: '# of Votes',
          data: [50, 35, 50, 40, 20, 18],
          backgroundColor: [
            '#FF6384',
            '#36A2EB',
            '#FFCE56',
            '#4BC0C0',
            '#9966FF',
            '#FF9F40'
          ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });

// les slides

let posts = [
    { id: 1, title: 'La gestion de dechet est necessaire pour nous proteger et protegr notre nature', imageUrl: '/media/Admin.Sev.jpg' },
    { id: 2, title: 'Il faut bien faire lusage de dechet dans la societé', imageUrl: '/media/Admin.Sev.jpg' },
    { id: 3, title: 'Post 2', imageUrl: '/media/Admin.Sev.jpg' },
    { id: 4, title: 'Post 2', imageUrl: '/media/Admin.Sev.jpg' },
    { id: 5, title: 'Post 2', imageUrl: '/media/Admin.Sev.jpg' },
    { id: 6, title: 'Post 2', imageUrl: '/media/Admin.Sev.jpg' },
  ];
  
  let currentPage = 1;
  const postsPerPage = 2;
  
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

  // les evenement de clic sur l'icone de list

