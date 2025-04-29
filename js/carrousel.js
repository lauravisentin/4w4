(function(){
    let hero__radio__input = document.querySelectorAll(".hero__radio__input")
    let hero__carrousel = document.querySelectorAll(".hero__carrousel")
    
    hero__radio__input.forEach((radio) =>{
        radio.addEventListener('mousedown',function(){
            parcourir_carrousel()
            hero__carrousel[radio.dataset.id_radio].classList.add("hero__carrousel--active")
        })
    })
    
    function parcourir_carrousel(){
        hero__carrousel.forEach(element => {
            element.classList.remove("hero__carrousel--active")
        });
    }
})()