/*Hacer un programa que contenga una función llamada vernumeros() que permita visualizar los 10 
primeros números tantas veces como queramos.*/

function verNumeros(repeticiones) {
  for (let i = 1; i <= repeticiones; i++) {
    for (let j = 1; j <= 10; j++) {
      console.log(j);
    }
  }
}

// Llamada a la función

verNumeros(5); // Visualizará los primeros 10 números 5 veces