
// criando as variavel para manipular o menu hamburger. O primero e o segundo sao classes criadas nativamente pelo wp
let dropdown = document.querySelector('.menu'), //ul
submenu = document.querySelector('.sub-menu'), // ul li ul
buttonClick = document.querySelector('.check-button'), // button
hamburger = document.querySelector('.menu-icon'); // aqui vai ser o icone que vai ser trasnformado em um x quando for clicado

buttonClick.addEventListener('click',()=>{
    // adicionando uma classe css no elemento ul
    dropdown.classList.toggle('show-dropdown');
    
    if(submenu){
        submenu.classList.toggle('show-dropdown');
    }
        hamburger.classList.toggle('animate-button');
})