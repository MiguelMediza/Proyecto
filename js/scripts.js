jQuery('document').ready(function($){
    
   var menuBtn = $('.menu-icon'); 
    menu = $('.navigation ul');
    
    menuBtn.click(function(){
      
        if(menu.hasClass('show')){
         
            menu.removeClass('show');   
            
        }
        else{
                 menu.addClass('show');   
        }

    
  });             
                  
                  
});



/*
let slider = document.querySelector(".slider-contenedor")
let sliderIndividual = document.querySelectorAll(".contenido-slider")
let contador = 1;
let width = sliderIndividual[0].clientWidth;
let intervalo = 6000;

window.addEventListener("resize", function(){
    width = sliderIndividual[0].clientWidth;
})

setInterval(function(){
    slides();
},intervalo);



function slides(){
    slider.style.transform = "translate("+(-width*contador)+"px)";
    slider.style.transition = "transform .8s";
    contador++;

    if(contador == sliderIndividual.length){
        setTimeout(function(){
            slider.style.transform = "translate(0px)";
            slider.style.transition = "transform 0s";
            contador=1;
        },1500)
    }
}
 */                    
                         
                         