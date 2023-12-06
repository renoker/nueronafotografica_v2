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