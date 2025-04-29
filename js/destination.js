(function() {
    let categoryId = 3;
    const domaine = window.location.origin + "/4w4";
    const categorieUlLi = document.querySelectorAll(".categorie__item");

    function monfetch() {
        const apiUrl = `${domaine}/wp-json/wp/v2/posts?categories=${categoryId}`;
        console.log('API URL :', apiUrl);

        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                // Sélection de la liste des destinations
                const destinationList = document.querySelector('.destination__list');
                // Réinitialisation du contenu de la liste
                destinationList.innerHTML = '';

                // Variable pour suivre l'icône sélectionnée
                let selectedIcon = null;

                // Parcours de chaque article récupéré
                data.forEach(article => {
                    // Création d'un élément pour l'article
                    const articleElement = document.createElement('div');
                    articleElement.classList.add('destination__item');

                    // Conteneur pour l'icône et le titre
                    const titreContainer = document.createElement('div');
                    titreContainer.classList.add('destination__ville');

                    // Création du titre de l'article
                    const titre = document.createElement('h3');
                    titre.textContent = article.title.rendered;
                    titre.classList.add('destination__title');

                    // Création de l'icône (bouton radio)
                    const iconButton = document.createElement('img');
                    iconButton.src = `${domaine}/wp-content/themes/tp1/images/3points.png`;

                    iconButton.alt = 'Icône';
                    iconButton.classList.add('destination__icon', 'destination__icon-radio');

                    // Ajout de l'icône et du titre dans le conteneur
                    titreContainer.appendChild(iconButton);
                    titreContainer.appendChild(titre);

                    // Création de la description (extrait)
                    const excerpt = document.createElement('div');
                    excerpt.innerHTML = article.excerpt.rendered;
                    excerpt.classList.add('destination__excerpt');
                    excerpt.style.maxHeight = '0';
                    excerpt.style.overflow = 'hidden';
                    excerpt.style.transition = 'max-height 0.5s ease-out';

                    // Création du lien "Lire plus"
                    const lien = document.createElement('a');
                    lien.href = article.link;
                    lien.textContent = 'Lire plus';
                    lien.classList.add('destination__link');
                    excerpt.appendChild(lien);

                    // Ajout d'un événement pour afficher/masquer l'extrait
                    iconButton.addEventListener('click', function() {
                        if (selectedIcon === iconButton) {
                            selectedIcon = null;
                            excerpt.style.maxHeight = '0';
                            iconButton.classList.remove('active');
                        } else {
                            // Fermeture des autres extraits ouverts
                            document.querySelectorAll('.destination__item .destination__excerpt').forEach(div => div.style.maxHeight = '0');
                            excerpt.style.maxHeight = '200px';
                            selectedIcon = iconButton;
                            iconButton.classList.add('active');
                        }
                    });

                    // Ajout des éléments à l'article
                    articleElement.appendChild(titreContainer);
                    articleElement.appendChild(excerpt);

                    // Ajout de l'article à la liste
                    destinationList.appendChild(articleElement);
                });

                // Réinitialisation de la sélection d'icône
                selectedIcon = null;
            })
    }

    // Appel initial de la fonction pour afficher les articles
    monfetch();

    // Ajout d'événements aux éléments de la liste des catégories
    categorieUlLi.forEach(li => {
        li.addEventListener("mousedown", function() {
            // Mise à jour de l'ID de la catégorie sélectionnée
            categoryId = li.dataset.id;
            // Récupération et affichage des articles de la nouvelle catégorie
            monfetch();
        });
    });
})();