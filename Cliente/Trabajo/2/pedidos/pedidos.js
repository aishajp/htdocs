import { GestorCarpinteria } from './gestorcarpinteria.js';
import { Pedido } from './pedido.js';

class GestionPedidosUI {
    constructor() {
        this.gestorCarpinteria = new GestorCarpinteria();
        this.inicializarEventListeners();
        this.cargarPedidos();
    }

    inicializarEventListeners() {
        const pedidoForm = document.getElementById('pedidoForm');
        const limpiarPedidoBtn = document.getElementById('limpiarPedido');

        pedidoForm.addEventListener('submit', (e) => {
            e.preventDefault();
            this.agregarPedido();
        });

        limpiarPedidoBtn.addEventListener('click', () => this.limpiarFormulario());
    }

    agregarPedido() {
        const numeroPedido = parseInt(document.getElementById('numeroPedido').value);
        const cliente = document.getElementById('cliente').value;
        const fechaPedido = document.getElementById('fechaPedido').value;

        try {
            const nuevoPedido = new Pedido(numeroPedido, cliente, fechaPedido);
            this.gestorCarpinteria.agregarPedido(nuevoPedido);
            this.cargarPedidos();
            this.limpiarFormulario();
            alert('Pedido agregado correctamente');
        } catch (error) {
            alert(error.message);
        }
    }

    cargarPedidos() {
        const cuerpoPedidos = document.getElementById('cuerpoPedidos');
        cuerpoPedidos.innerHTML = '';

        this.gestorCarpinteria.pedidos.forEach(pedido => {
            const fila = document.createElement('tr');
            fila.innerHTML = `
                <td class="p-2 text-center">${pedido.numeroPedido}</td>
                <td class="p-2 text-center">${pedido.cliente}</td>
                <td class="p-2 text-center">${pedido.fechaPedido}</td>
                <td class="p-2 text-center">
                    <button class="bg-red-500 text-white px-2 py-1 rounded eliminar-pedido" 
                            data-numero="${pedido.numeroPedido}">Eliminar</button>
                </td>
            `;

            const eliminarBtn = fila.querySelector('.eliminar-pedido');
            eliminarBtn.addEventListener('click', () => this.eliminarPedido(pedido.numeroPedido));

            cuerpoPedidos.appendChild(fila);
        });
    }

    eliminarPedido(numeroPedido) {
        if(confirm('¿Estás seguro de eliminar este pedido?')) {
            this.gestorCarpinteria.eliminarPedido(numeroPedido);
            this.cargarPedidos();
        }
    }

    limpiarFormulario() {
        document.getElementById('numeroPedido').value = '';
        document.getElementById('cliente').value = '';
        document.getElementById('fechaPedido').value = '';
    }
}

// Inicializar la interfaz de gestión de pedidos
document.addEventListener('DOMContentLoaded', () => {
    new GestionPedidosUI();
});