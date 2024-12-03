import { Pedido } from './pedido.js';
import { Pieza } from './piezas/pieza.js';

export class GestorCarpinteria {
    constructor() {
        this.pedidos = [];
        this.piezas = [];
    }

    agregarPedido(pedido) {
        const pedidoExistente = this.pedidos.find(p => p.numeroPedido === pedido.numeroPedido);
        if (pedidoExistente) {
            throw new Error("Ya existe un pedido con este número");
        }

        if (pedido.validar()) {
            this.pedidos.push(pedido);
            this.guardarEnLocalStorage();
        }
    }


    guardarEnLocalStorage() {
        localStorage.setItem('pedidos', JSON.stringify(this.pedidos));
        localStorage.setItem('piezas', JSON.stringify(this.piezas));
    }

    cargarDesdeLocalStorage() {
        const pedidosGuardados = localStorage.getItem('pedidos');
        const piezasGuardadas = localStorage.getItem('piezas');

        if (pedidosGuardados) {
            this.pedidos = JSON.parse(pedidosGuardados).map(p => {
                const pedido = new Pedido(p.numeroPedido, p.cliente, p.fechaPedido);
                Object.assign(pedido, p);
                return pedido;
            });
        }

        if (piezasGuardadas) {
            this.piezas = JSON.parse(piezasGuardadas).map(p => {
                const pieza = new Pieza(p.numeroPieza, p.numeroPedido, p.largo, p.ancho, p.grosor, p.color);
                Object.assign(pieza, p);
                return pieza;
            });
        }
    }

    cargarDatosEjemplo() {
        const pedido1 = new Pedido(1, "Juan Pérez", "2024-02-15");
        const pedido2 = new Pedido(2, "María García", "2024-02-16");

        this.agregarPedido(pedido1);
        this.agregarPedido(pedido2);

        const pieza1 = new Pieza(1, 1, 200, 50, 2, "Roble");
        const pieza2 = new Pieza(2, 1, 150, 75, 3, "Natural");
        const pieza3 = new Pieza(3, 2, 100, 40, 1, "Nogal");

        this.agregarPieza(pieza1);
        this.agregarPieza(pieza2);
        this.agregarPieza(pieza3);
    }
}