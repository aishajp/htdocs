import { GestorCarpinteria } from './gestor.js';
import { Pieza } from 'piezas/pieza.js';

class GestionPiezasUI {
    constructor() {
        this.gestorCarpinteria = new GestorCarpinteria();
        this.inicializarEventListeners();
        this.cargarPedidosEnSelect();
        this.cargarPiezas();
    }

    inicializarEventListeners() {
        const piezaForm = document.getElementById('piezaForm');
        const limpiarPiezaBtn = document.getElementById('limpiarPieza');

        piezaForm.addEventListener('submit', (e) => {
            e.preventDefault();
            this.agregarPieza();
        });

        limpiarPiezaBtn.addEventListener('click', () => this.limpiarFormulario());
    }

    cargarPedidosEnSelect() {
        const selectPedido = document.getElementById('numeroPedido');
        selectPedido.innerHTML = '<option value="">Selecciona un pedido</option>';

        this.gestorCarpinteria.pedidos.forEach(pedido => {
            const option = document.createElement('option');
            option.value = pedido.numeroPedido;
            option.textContent = `Pedido ${pedido.numeroPedido} - ${pedido.cliente}`;
            selectPedido.appendChild(option);
        });
    }

    agregarPieza() {
        const numeroPieza = parseInt(document.getElementById('numeroPieza').value);
        const numeroPedido = parseInt(document.getElementById('numeroPedido').value);
        const largo = parseFloat(document.getElementById('largo').value);
        const ancho = parseFloat(document.getElementById('ancho').value);
        const grosor = parseFloat(document.getElementById('grosor').value);
        const color = document.getElementById('color').value;

        try {
            const nuevaPieza = new Pieza(numeroPieza, numeroPedido, largo, ancho, grosor, color);
            this.gestorCarpinteria.agregarPieza(nuevaPieza);
            this.cargarPiezas();
            this.limpiarFormulario();
            alert('Pieza agregada correctamente');
        } catch (error) {
            alert(error.message);
        }
    }

    cargarPiezas() {
        const cuerpoPiezas = document.getElementById('cuerpoPiezas');
        cuerpoPiezas.innerHTML = '';

        this.gestorCarpinteria.piezas.forEach(pieza => {
            const fila = document.createElement('tr');
            fila.innerHTML = `
                <td class="p-2 text-center">${pieza.numeroPieza}</td>
                <td class="p-2 text-center">${pieza.numeroPedido}</td>
                <td class="p-2 text-center">${pieza.largo}x${pieza.ancho}x${pieza.grosor} cm</td>
                <td class="p-2 text-center">${pieza.color}</td>
                <td class="p-2 text-center">
                    <button class="bg-red-500 text-white px-2 py-1 rounded eliminar-pieza" 
                            data-numero="${pieza.numeroPieza}">Eliminar</button>
                </td>
                `;
        }
    }
}