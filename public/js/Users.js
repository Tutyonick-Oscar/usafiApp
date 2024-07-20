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
      element.style.display = 'none';
    });
    mainElement.classList.remove('w-[90%]');
    mainElement.classList.add('w-5/6');
    mainElement.classList.remove('translate-x-[7rem]');

  }

  // Inverser l'état de l'interface
  isNavExpanded = !isNavExpanded;
});


const data = [
    { id: 1, nom: "Baraka Homere", idPiece: "123456789", commune: "Cibitoke", avenue: "Cibitoke/18ème Av", email: "barakahomere@gmail.com", password: "hashedPassword" },
    { id: 2, nom: "Séverin Alimasi", idPiece: "987654321", commune: "Cibitoke", avenue: "Cibitoke/12ème Av", email: "severinalimasi@gmail.com", password: "hashedPassword" },
    { id: 3, nom: "Charles Basilwango", idPiece: "000000000", commune: "Cibitoke", avenue: "Cibitoke/18ème Av", email: "charlesbasilwango@gmail.com", password: "hashedPassword" },
    { id: 4, nom: "Prince Jacques", idPiece: "123456789", commune: "Mutakura", avenue: "Mutakura/15ème Av", email: "princejacques@gmail.com", password: "hashedPassword" },
    { id: 5, nom: "Tulia Oscar", idPiece: "987654321", commune: "Kamenge", avenue: "Kamenge/5ème", email: "tuliaoscar@gmail.com", password: "hashedPassword" },
    // Plus d'utilisateurs...
  ];
  
  const tableData = document.getElementById('table-data');
  const currentPageSpan = document.getElementById('current-page');
  const prevBtn = document.getElementById('prev-btn');
  const nextBtn = document.getElementById('next-btn');
  
  let currentPage = 1;
  let dataPerPage = 10;
  let totalPages = Math.ceil(data.length / dataPerPage);
  
  function displayData(dataToShow) {
    tableData.innerHTML = `
      <table class="w-full table-auto border-collapse border-2 bg-white text-gray-600 border-green-950">
        <thead class="bg-gray-200">
          <tr>
            <th class="border border-green-950 px-2 py-1 text-left">ID</th>
            <th class="border border-green-950 px-2 py-1 text-left">Nom complet</th>
            <th class="border border-green-950 px-2 py-1 text-left">N° pièce d'identité</th>
            <th class="border border-green-950 px-2 py-1 text-left">Commune</th>
            <th class="border border-green-950 px-2 py-1 text-left">Avenue</th>
            <th class="border border-green-950 px-2 py-1 text-left">Email</th>
            <th class="border border-green-950 px-2 py-1 text-left">Mot de passe</th>
          </tr>
        </thead>
        <tbody>
          ${dataToShow.map(user => `
            <tr>
              <td class="border border-green-950 px-2 py-1">${user.id}</td>
              <td class="border border-green-950 px-2 py-1">${user.nom}</td>
              <td class="border border-green-950 px-2 py-1">${user.idPiece}</td>
              <td class="border border-green-950 px-2 py-1">${user.commune}</td>
              <td class="border border-green-950 px-2 py-1">${user.avenue}</td>
              <td class="border border-green-950 px-2 py-1">${user.email}</td>
              <td class="border border-green-950 px-2 py-1">*** (mot de passe masqué)</td>  </tr>
          `)}
        </tbody>
      </table>
    `;
  }
  
  // Function to handle pagination buttons
  function handlePagination(action) {
    if (action === 'prev' && currentPage > 1) {
      currentPage--;
    } else if (action === 'next' && currentPage < totalPages) {
      currentPage++;
    }
    const startIndex = (currentPage - 1) * dataPerPage;
    const endIndex = startIndex + dataPerPage;
    const slicedData = data.slice(startIndex, endIndex);
    displayData(slicedData);
    currentPageSpan.textContent = `Page ${currentPage} sur ${totalPages}`;
  
    
    prevBtn.disabled = currentPage === 1;
    nextBtn.disabled = currentPage === totalPages;
  }
  
 
  displayData(data.slice(0, dataPerPage));
  currentPageSpan.textContent = `Page ${currentPage} sur ${totalPages}`;
  
  // Add event listeners pour les paginations de boutons
  prevBtn.addEventListener('click', () => handlePagination('prev'));
  nextBtn.addEventListener('click', () => handlePagination('next'));