(function () {
  const radios = document.querySelectorAll(".hero__radio__input");
  const carrousels = document.querySelectorAll(".hero__carrousel");
  const heroSection = document.querySelector(".hero");
  let currentIndex = 0;

  radios.forEach((radio, index) => {
    radio.addEventListener("click", function () {
      if (index === currentIndex) return;

      // Change l'image active
      carrousels[currentIndex].classList.remove("hero__carrousel--active");
      carrousels[index].classList.add("hero__carrousel--active");

      // Change la classe de thème
      heroSection.classList.remove(`hero--theme-${currentIndex}`);
      heroSection.classList.add(`hero--theme-${index}`);

      currentIndex = index;
    });
  });

  // Initial theme
  document.querySelector(".hero").classList.add("hero--theme-0");
})();
