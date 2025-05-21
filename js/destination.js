(function(){
    console.log("destination.js");

    let categoryId = 3;
    const domaine = document.querySelector('base').href;
    let selectedIcon = null;

    parcourir_bouton();
    mon_fetch(categoryId);

    function parcourir_bouton() {
        const categorie__ul__li = document.querySelectorAll(".categorie__item");
        console.log("categorie__item.length = ", categorie__ul__li.length);

        categorie__ul__li.forEach(elm => {
            elm.addEventListener('mousedown', function() {
                console.log(elm.tagName);
                console.log("elm.dataset.category_id = ", elm.dataset.category_id);
                mon_fetch(elm.dataset.category_id);
            });
        });
    }

    function mon_fetch(id_category) {
        const apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${id_category}`;

        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                const destinationList = document.querySelector('.destination__list');
                destinationList.innerHTML = "";

                data.forEach(article => {
                    const articleElement = document.createElement('div');
                    articleElement.classList.add('destination__item');

                    const titreContainer = document.createElement('div');
                    titreContainer.classList.add('destination__ville');

                    const titre = document.createElement('h3');
                    titre.classList.add('destination__title');
                    titre.innerHTML = article.title.rendered;

                    const iconButton = document.createElement('img');
                    iconButton.src = `${domaine}wp-content/themes/tp1/images/3points.png`;
                    iconButton.alt = 'Icône';
                    iconButton.classList.add('destination__icon', 'destination__icon-radio');

                    const excerpt = document.createElement('div');
                    excerpt.classList.add('destination__excerpt');
                    excerpt.innerHTML = article.excerpt.rendered;
                    excerpt.style.maxHeight = '0';
                    excerpt.style.overflow = 'hidden';
                    excerpt.style.transition = 'max-height 0.5s ease-out';

                    const lien = document.createElement('a');
                    lien.classList.add('destination__link');
                    lien.href = article.link;
                    lien.textContent = 'Lire plus';

                    excerpt.appendChild(lien);

                    // Bouton clic pour ouvrir/fermer description
                    iconButton.addEventListener('click', function () {
                        const allExcerpts = document.querySelectorAll('.destination__excerpt');
                        const allIcons = document.querySelectorAll('.destination__icon');

                        if (selectedIcon === iconButton) {
                            excerpt.style.maxHeight = '0';
                            iconButton.classList.remove('active');
                            selectedIcon = null;
                        } else {
                            allExcerpts.forEach(div => div.style.maxHeight = '0');
                            allIcons.forEach(icon => icon.classList.remove('active'));

                            excerpt.style.maxHeight = '200px';
                            iconButton.classList.add('active');
                            selectedIcon = iconButton;
                        }
                    });

                    titreContainer.appendChild(iconButton);
                    titreContainer.appendChild(titre);

                    articleElement.appendChild(titreContainer);
                    articleElement.appendChild(excerpt);

                    destinationList.appendChild(articleElement);
                });
            })
            .catch(error => console.error('Erreur lors de la récupération des articles:', error));
    }
})();
