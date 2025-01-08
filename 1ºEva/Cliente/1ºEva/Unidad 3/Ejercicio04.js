/*Hacer un programa mediante una función que permita introducir el nombre de usuario, el nombre 
del servidor y el dominio y nos devuelva la dirección de correo electrónica.*/

function createEmail(username, server, domain) {
    // Validar que el nombre de usuario no esté vacío
    if (username === '') {
        return 'El nombre de usuario no puede estar vacío.';
    }

    // Validar que el nombre del servidor no esté vacío
    if (server === '') {
        return 'El nombre del servidor no puede estar vacío.';
    }
    
    // Validar que el dominio no esté vacío
    if (domain === '') {
        return 'El dominio no puede estar vacío.';
    }
    
    // Validar que el nombre de usuario no contenga caracteres especiales
    if (/[^a-zA-Z0-9_]/.test(username)) {
        return 'El nombre de usuario sólo puede contener letras, números y guiones bajos.';
    }
    
    // Validar que el nombre del servidor no contenga caracteres especiales
    if (/[^a-zA-Z0-9.-]/.test(server)) {
        return 'El nombre del servidor sólo puede contener letras, números, puntos, guiones y guiones bajos.';
    }
    
}