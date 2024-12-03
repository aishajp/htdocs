let piezas = JSON.parse(localStorage.getItem('piezas')) || [];

document.getElementById('formulario-piezas').addEventListener('submit', function (e) {
    e.preventDefault();
    const idPieza = parseInt(document.getElementById('id-pieza').value);
    const pedidoPieza = parseInt(document.getElementById('pedido-pieza').value);
    const largo = parseFloat(document.getElementById('largo').value);
    const ancho = parseFloat(document.getElementById('ancho').value);
    const grosor = parseFloat(document.getElementById('grosor').value);
    const color = document.getElementById('color').value;

    if (!pedidos.some(pedido => pedido.id === pedidoPieza)) {
        alert('El número de pedido no existe.');
        return;
    }

    piezas.push({ id: idPieza, pedido: pedidoPieza, largo, ancho, grosor, color });
    localStorage.setItem('piezas', JSON.stringify(piezas));
    renderizarPiezas();
});

function renderizarPiezas() {
    const tablaPiezas = document.querySelector('#tabla-piezas tbody');
    tablaPiezas.innerHTML = '';
    piezas.forEach(pieza => {
        const fila = document.createElement('tr');
        fila.innerHTML = `
            <td>${pieza.id}</td>
            <td>${pieza.pedido}</td>
            <td>${pieza.largo}</td>
            <td>${pieza.ancho}</td>
            <td>${pieza.grosor}</td>
            <td>${pieza.color}</td>
        `;
        tablaPiezas.appendChild(fila);
    });
}

renderizarPiezas();