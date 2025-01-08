function mostrarSeccion(idSeccion) {
    document.querySelectorAll('section').forEach(seccion => {
        seccion.classList.add('oculto');
    });
    document.getElementById(idSeccion).classList.remove('oculto');
}