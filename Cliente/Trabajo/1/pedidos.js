let pedidos = JSON.parse(localStorage.getItem('pedidos')) || [];
document.getElementById('formulario-pedidos').addEventListener('submit', function (e) {
    e.preventDefault();
    const idPedido = parseInt(document.getElementById('id-pedido').value);
    const nombreCliente = document.getElementById('nombre-cliente').value;
    const fechaPedido = document.getElementById('fecha-pedido').value;

    if (pedidos.some(pedido => pedido.id === idPedido)) {
        alert('El número de pedido ya existe.');
        return;
    }

    pedidos.push({ id: idPedido, cliente: nombreCliente, fecha: fechaPedido, procesado: false, servido: false });
    localStorage.setItem('pedidos', JSON.stringify(pedidos));
    renderizarPedidos();
});
function renderizarPedidos() {
    const tablaPedidos = document.querySelector('#tabla-pedidos tbody');
    tablaPedidos.innerHTML = '';
    pedidos.forEach(pedido => {
        const fila = document.createElement('tr');
        fila.innerHTML = `
            <td>${pedido.id}</td>
            <td>${pedido.cliente}</td>
            <td>${pedido.fecha}</td>
            <td>${pedido.procesado}</td>
            <td>${pedido.servido}</td>
        `;
        tablaPedidos.appendChild(fila);
    });
}

renderizarPedidos();