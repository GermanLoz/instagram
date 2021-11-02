
//ocultar y mostrar un elemento

const elementBlock = (item) => {
    let elementStyle = window.getComputedStyle(item);
    let elementDisplay = elementStyle.getPropertyValue('display');
        if(elementDisplay == 'none'){
           return item.style.display = "block"
        }
        return item.style.display="none"
}