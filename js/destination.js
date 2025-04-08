(function(){
    console.log("vive Javascript")
    
        let categoryId = 3; // Remplacez par l'ID de la catégorie souhaitée
        const domaine = window.location.href  
        
        let apiUrl =  `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;
        const categorie__ul__li = document.querySelectorAll(".categorie__ul__li");
        console.log("categorie__ul__li.length", categorie__ul__li.length);
        monfetch(apiURL);

        categorie__ul__li.forEach(li => {
            li.addEventListener("mousedown",function(){
               console.log(li.dataset.id) 
               categoryId = li.dataset.id
               apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;
               console.log("apiUrl = ", apiUrl)
               monfetch(apiURL);
            })
            
        })
        fetch(apiUrl)//Nom de la catgeorie ou numero?
            .then(response => response.json())
            .then(data => {
                
                const destinationList = document.querySelector('.destination__list');
                destinationList.innerHTML = '';
                data.forEach(article => {
                    const articleElement = document.createElement('div');
                    articleElement.innerHTML = `
                        <h3>${article.title.rendered}</h3>
                        <p>${article.exerpt.rendered}</p>
                        <a href="${article.link}">Lire plus</a>
                    `;
                    destinationList .appendChild(articleElement);
                });
            })
            .catch(error => console.error('Erreur lors de la récupération des articles:', error));

})()