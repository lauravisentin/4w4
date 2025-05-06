(function () {
  const radios = document.querySelectorAll(".hero__radio__input");
  const carrousels = document.querySelectorAll(".hero__carrousel");
  let currentIndex = 0;

  radios.forEach((radio, index) => {
    radio.addEventListener("click", function () {
      if (index === currentIndex) return;

      // Retire la classe active de l'ancien
      carrousels[currentIndex].classList.remove("hero__carrousel--active");

      // Ajoute la classe active au nouveau
      carrousels[index].classList.add("hero__carrousel--active");

      currentIndex = index;
    });
  });
})();
