window.onload = () => {

const phone = document.querySelector('.phoneimg')
const images = ['imgone', 'imgtwo', 'imgtree', 'imgfour']
const backgroundImg = document.querySelector('.img-background')
    phone.src = 'http://127.0.0.1:8000/images/imgone.jpg';
    backgroundImg.src = `http://127.0.0.1:8000/images/imgtwo.jpg`
let counter = 0

setInterval( () => {
    phone.src =  `http://127.0.0.1:8000/images/${images[counter]}.jpg`
    if(counter < 3){ 
        backgroundImg.src = `http://127.0.0.1:8000/images/${images[counter+1]}.jpg`
    }
    setTimeout(() => {
        phone.classList.add('animantephone')    
    }, 2000);
    if(counter === 3){
        phone.classList.remove('animantephone')    
        return counter = 0
    }
        phone.classList.remove('animantephone')    
        counter++ 
    }, 3000);
}
cdrtf