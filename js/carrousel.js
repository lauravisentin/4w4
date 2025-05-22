(function () {
  const radios = document.querySelectorAll(".hero__radio__input"); 
  const carrousels = document.querySelectorAll(".hero__carrousel"); 
  const heroSection = document.querySelector(".hero"); 
  let currentIndex = 0; 

  // Ajout d'un événement de clic sur chaque bouton radio
  radios.forEach((radio, index) => {
    radio.addEventListener("click", function () {
      // Si le bouton radio cliqué est déjà celui actif, on ne fait rien
      if (index === currentIndex) return;

      // Change l'image active du carrousel
      carrousels[currentIndex].classList.remove("hero__carrousel--active");
      carrousels[index].classList.add("hero__carrousel--active");

      // Change la classe de thème pour la section hero
      heroSection.classList.remove(`hero--theme-${currentIndex}`);
      heroSection.classList.add(`hero--theme-${index}`);

      // Met à jour l'index de l'élément actif
      currentIndex = index;
    });
  });

  // Définit le thème initial au chargement de la page
  document.querySelector(".hero").classList.add("hero--theme-0");
})();
