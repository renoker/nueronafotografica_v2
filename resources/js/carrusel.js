var move = 0

// In your JS file
window.changePunto = function(id, num, name, size, position) {

    for (let index = 0; index < num; index++) {
        var punto = document.getElementById('punto_' + index)
        punto.classList.remove('active')        
    }

    var punto = document.getElementById('punto_' + id)
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