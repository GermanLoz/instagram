window.onload = () => {  

const buttonUser = document.querySelector('.user-button')
const options = document.getElementById('optionsUser')
const body = document.getElementsByTagName('body')[0]

//cerrar nav si el usuario da click en el body
body.onclick = (e) => {
        const target = e.target.className
        let elementStyle = window.getComputedStyle(options);
        let elementDisplay = elementStyle.getPropertyValue('display');
            if(elementDisplay === 'block' && target !== 'links' && target != 'fas fa-user'){
                elementBlock(options)
            }
    }
//Mostrar nav o cerrar cuando el usuario de click
buttonUser.onclick = () => { 
        elementBlock(options)
    }

}
