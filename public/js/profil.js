const nameElement = document.getElementById('name');
const editIcon = document.getElementById('editIcon');

const inputElement = document.createElement('input');

editIcon.addEventListener('click', () => {
    
    inputElement.value = nameElement.textContent;
    nameElement.replaceWith(inputElement);
    inputElement.focus();

    inputElement.style.background = 'none';
    inputElement.style.border = 'none';
    inputElement.style.outline = 'none';
    inputElement.style.color = 'white';
    // inputElement.style.display = "none";

    inputElement.addEventListener('click', () => {
        

        const newName = inputElement.value;
        // Mettez à jour les données côté serveur ici...
        // Puis remplacez le champ d'entrée par le nouveau nom de compte
        inputElement.replaceWith(nameElement);
        inputElement.addEventListener('click', () => {
        

            const newName = inputElement.value;
            // Mettez à jour les données côté serveur ici...
            // Puis remplacez le champ d'entrée par le nouveau nom de compte
            inputElement.replaceWith(nameElement);
            nameElement.textContent = newName;
        
        });
    
        
    });

});

 

