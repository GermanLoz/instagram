const buttons = document.querySelectorAll('.btn-editar')
const contentButton = document.querySelector('.buttons')
const contentRigth = document.querySelector('.contenido-editar')

let eventButton = buttons[0]

const letterAndBorderBlack = (element) => {
    element.classList.add('border-letter-black')
    element.style.fontWeight = "500"
}

const removeLetterBorder = (element) => {
    element.classList.remove('border-letter-black')
    element.style.fontWeight = "200"
}

letterAndBorderBlack(eventButton)

contentButton.onclick = (event) => {
    let active = event.target
    removeLetterBorder(eventButton)
    letterAndBorderBlack(event.target)
    eventButton = active    
}

//contentRigth.innerHTML = formEdit

//Logica Y validacion formulario

const formEditar = document.querySelector('.form-editar')
const cambiarAvatarButton = document.querySelector('.changue-avatar')
const file = document.getElementById('avatar')

cambiarAvatarButton.onclick = (event) => {
    event.preventDefault()
    file.click()
}

const buttonEnviar = document.querySelector('.enviar')
const inputs = document.querySelectorAll('.input-form')
let elementStyle = window.getComputedStyle(buttonEnviar);
let elementBackground = elementStyle.getPropertyValue('background-color');

if(elementBackground === 'rgb(239, 239, 239)'){
    for(let input of inputs ){
        input.onkeyup = () => {
            if(input.value.length > 1){
                console.log(input.value)
                buttonEnviar.style.background = "#0095f6";
            }
        }
    }
}
