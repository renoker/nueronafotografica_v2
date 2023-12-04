var move = 0

// In your JS file
window.changePunto = function(name, size, position) {
    const boxes = document.querySelectorAll('.bullet');
    boxes.forEach(element => {
        element.classList.remove('active')            
    });
    
    var punto = document.getElementById('punto_' + position)
    punto.classList.add('active')

    var carrusel = document.getElementById(name)

    if (size == 375) {
        move = -w * position
    } else {
        move = -size * position
    }

    carrusel.style.transition = "all 1s"
    carrusel.style.marginTop = move + 'px'
   
}