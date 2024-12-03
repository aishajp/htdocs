export class Pedido {
    constructor(numeroPedido, cliente, fechaPedido) {
        this.numeroPedido = numeroPedido;
        this.cliente = cliente;
        this.fechaPedido = fechaPedido;
        this.procesado = false;
        this.servido = false;
        this.piezas = [];
    }

    // Método para validar un pedido
    validar() {
        if (this.numeroPedido < 1 || !Number.isInteger(this.numeroPedido)) {
            throw new Error("Número de pedido debe ser un entero mayor o igual a 1");
        }

        if (this.cliente.length > 50) {
            throw new Error("Nombre del cliente no puede exceder 50 caracteres");
        }

        const fechaActual = new Date();
        const fechaPedido = new Date(this.fechaPedido);
        
        if (fechaPedido > fechaActual) {
            throw new Error("Fecha de pedido no puede ser posterior a la fecha actual");
        }

        return true;
    }

    // Método para añadir una pieza al pedido
    agregarPieza(pieza) {
        this.piezas.push(pieza);
    }
}