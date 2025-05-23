(function() {
    // 1. Définition de la catégorie par défaut et récupération de l'URL de base
    let categoryId = 18;  // ID de la catégorie par défaut
    const domaine = document.querySelector('base').href;  // Récupérer l'URL de base du site
    let selectedIcon = null; 

    mon_fetch(categoryId);
    parcourir_bouton();   

    // Fonction pour ajouter un événement de clic sur chaque élément de catégorie
    function parcourir_bouton() {
        // 3. Sélection des éléments de catégorie dans le DOM
        const categorie__ul__li = document.querySelectorAll(".categorie__item");

        // 4. Ajout d'un événement 'mousedown' sur chaque élément de catégorie
        categorie__ul__li.forEach(elm => {
            elm.addEventListener('mousedown', function() {
                mon_fetch(elm.dataset.category_id);
            });
        });
    }

    // Fonction pour récupérer les articles à partir de l'API selon l'ID de la catégorie
    function mon_fetch(id_category) {
        console.log(`Chargement des articles pour la catégorie ${id_category}`);

        // 5. Construction de l'URL de l'API avec l'ID de catégorie
        const apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${id_category}`;

        // 6. Faire la requête à l'API
        fetch(apiUrl)
            .then(response => response.json())  // Convertir la réponse en JSON
            .then(data => {
                console.log('Données récupérées :', data);

                // 7. Sélectionner la liste où les articles seront ajoutés
                // ajouter data methode = search
                const destinationList = document.querySelector('.destination__list');
                destinationList.innerHTML = ""; 

                // 8. Parcourir les articles retournés par l'API
                data.forEach(article => {
                    const articleElement = document.createElement('div'); 
                    articleElement.classList.add('destination__item');

                    // 9. Créer et ajouter le titre de l'article
                    const titreContainer = document.createElement('div');
                    titreContainer.classList.add('destination__ville');
                    const titre = document.createElement('h3');
                    titre.classList.add('destination__title');
                    titre.innerHTML = article.title.rendered; 

                    // 10. Ajouter l'icône pour chaque article
                    const iconButton = document.createElement('img');
                    iconButton.src = `${domaine}wp-content/themes/tp1/images/3points.png`;
                    iconButton.alt = 'Icône';
                    iconButton.classList.add('destination__icon', 'destination__icon-radio');

                    // 11. Créer l'extrait de l'article
                    const excerpt = document.createElement('div');
                    excerpt.classList.add('destination__excerpt');
                    excerpt.innerHTML = article.excerpt.rendered;
                    excerpt.style.maxHeight = '0';
                    excerpt.style.overflow = 'hidden';
                    excerpt.style.transition = 'max-height 0.5s ease-out';

                    // 12. Créer un lien "Lire plus" pour chaque article
                    const lien = document.createElement('a');
                    lien.classList.add('destination__link');
                    lien.href = article.link;
                    lien.textContent = 'Lire plus';
                    excerpt.appendChild(lien);

                    // 13. Ajouter un événement de clic sur l'icône pour ouvrir/fermer l'extrait
                    iconButton.addEventListener('click', function () {
                        const allExcerpts = document.querySelectorAll('.destination__excerpt');
                        const allIcons = document.querySelectorAll('.destination__icon');

                        // Si l'icône est déjà active, fermer l'extrait
                        if (selectedIcon === iconButton) {
                            excerpt.style.maxHeight = '0';
                            iconButton.classList.remove('active');
                            selectedIcon = null;
                        } else {
                            // Fermer tous les extraits et désactiver toutes les icônes
                            allExcerpts.forEach(div => div.style.maxHeight = '0');
                            allIcons.forEach(icon => icon.classList.remove('active'));

                            // Ouvrir l'extrait correspondant et activer l'icône
                            excerpt.style.maxHeight = '200px';
                            iconButton.classList.add('active');
                            selectedIcon = iconButton;
                        }
                    });

                    // 14. Ajouter le titre et l'extrait à l'élément de l'article
                    titreContainer.appendChild(iconButton);
                    titreContainer.appendChild(titre);
                    articleElement.appendChild(titreContainer);
                    articleElement.appendChild(excerpt);

                    // 15. Ajouter l'article à la liste des destinations
                    destinationList.appendChild(articleElement);
                });
            })
            .catch(error => console.error('Erreur lors de la récupération des articles:', error)); 
    }
})();
