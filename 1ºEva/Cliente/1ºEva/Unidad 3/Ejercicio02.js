/*Hacer un programa mediante una función que verifique si un número es múltiplo de 3. Que el script 
se pueda repetir si el usuario quiere. */

function checkMultipleOfThree() {
    let num = parseInt(prompt("Ingrese un número: "));
    if (!isNaN(num) && num % 3 === 0) {
        alert(`${num} es un número múltiplo de 3.`);
    } else {
        alert(`${num} no es un número múltiplo de 3.`);
    }
    let repeat = confirm("¿Desea repetir el proceso?");
    if (repeat) {
        checkMultipleOfThree();
    }
    else {
        alert("Gracias por utilizar este script.");
    }
}