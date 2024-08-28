window.addEventListener("load", (event) => {
    automatico()
    alturaDiv()
  });
var move = 0
let altura = 0

const alturaDiv = () => {
    altura = document.getElementById('alto').offsetHeight    
}


// In your JS file
window.changePunto = function(name, size, position) {
    const boxes = document.querySelectorAll('.bullet');
    boxes.forEach(element => {
        element.classList.remove('active')            
    });
    
    var punto = document.getElementById('punto_' + position)
    punto.classList.add('active')

    var carrusel = document.getElementById(name)

    if (altura == 375) {
        move = -w * position
    } else {
        move = -altura * position
    }

    carrusel.style.transition = "all 1s"
    carrusel.style.marginTop = move + 'px'
   
}

var num = 0

const automatico = () => {
    let number_slider = document.getElementById('number_slider').value
    if(number_slider > 1) {
        var t = setTimeout(function(){
            automatico()
        },3500);
        
        if (num < number_slider) {
            
        } else {
            num = 0
        }

        changePunto('custom_slider', altura, num)
        num++
    }
}
