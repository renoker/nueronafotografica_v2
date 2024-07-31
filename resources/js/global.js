const menuButton = document.getElementById('menu-button')
const headerMenu = document.getElementById('header_menu')


menuButton.addEventListener('click', () => {
    menuButton.classList.toggle('button-open')
    headerMenu.classList.toggle('active')

    var url = document.getElementById('url').value
    var img1 = url + "/assets/icons/icon-park-outline_down.svg";
    var img2 = url + "/assets/icons/down.png";        
    var imgElement = document.getElementById('arrow');
    imgElement.src = (imgElement.src === img1)? img2 : img1;          
})

const plusButton = document.getElementById('plus-button')
const despliegueBox = document.getElementById('despliegue-box')

plusButton.addEventListener('click', () => {
    despliegueBox.classList.toggle('active')
})




const upArrow = document.getElementById('flechaTop')
upArrow.addEventListener('click', () => {
    window.scrollTo({top: 0, behavior: 'smooth'});
})


const menuButtonH = document.getElementById('menu_button_h')
const headerMenuH = document.getElementById('header_menu_h')

menuButtonH.addEventListener('click', () => {
  menuButtonH.classList.toggle('button-open')
  headerMenuH.classList.toggle('active')
})


const menuButtonM = document.getElementById('menu-button-mob')
const headerMenuM = document.getElementById('header_menu-mob')


menuButtonM.addEventListener('click', () => {
    menuButtonM.classList.toggle('button-open')
    headerMenuM.classList.toggle('active')

    var url = document.getElementById('url').value
    var img1 = url + "/assets/icons/icon-park-outline_down.svg";
    var img2 = url + "/assets/icons/down.png";        
    var imgElement = document.getElementById('arrow');
    imgElement.src = (imgElement.src === img1)? img2 : img1;          
})


const plusButtonB = document.getElementById('plus-button-mob')
const despliegueBoxB = document.getElementById('despliegue-box-mob')

plusButtonB.addEventListener('click', () => {
    despliegueBoxB.classList.toggle('active')
})
