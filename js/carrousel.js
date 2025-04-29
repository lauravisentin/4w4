(function () {
  let radios = document.querySelectorAll(".hero__radio__input");
  let carrousels = document.querySelectorAll(".hero__carrousel");
  let currentIndex = 0;

  radios.forEach((radio, index) => {
    radio.addEventListener("mousedown", function () {
      if (index === currentIndex) return;

      // Retire toutes les classes d’animation
      carrousels.forEach((el, i) => {
        el.classList.remove("hero__carrousel--active", "hero__carrousel--left", "hero__carrousel--right");
        if (i === currentIndex) {
          el.classList.add(index > currentIndex ? "hero__carrousel--left" : "hero__carrousel--right");
        }
      });

      // Active le nouveau carrousel
      carrousels[index].classList.add("hero__carrousel--active");
      currentIndex = index;
    });
  });
})();