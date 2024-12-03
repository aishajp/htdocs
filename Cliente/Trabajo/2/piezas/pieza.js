export class Pieza {
    constructor(numeroPieza, numeroPedido, largo, ancho, grosor, color) {
        this.numeroPieza = numeroPieza;
        this.numeroPedido = numeroPedido;
        this.largo = largo;
        this.ancho = ancho;
        this.grosor = grosor;
        this.color = color;
        this.ambasCaras = false;
        this.cortada = false;
    }

    // Método para validar una pieza
    validar(pedidos) {
        if (this.numeroPieza < 1 || !Number.isInteger(this.numeroPieza)) {
            throw new Error("Número de pieza debe ser un entero mayor o igual a 1");
        }

        const pedidoExiste = pedidos.some(pedido => pedido.numeroPedido === this.numeroPedido);
        if (!pedidoExiste) {
            throw new Error("El número de pedido no existe");
        }

        if (this.largo <= 0 || this.ancho <= 0 || this.grosor <= 0) {
            throw new Error("Las medidas deben ser mayores que 0");
        }

        return true;
    }

    // Calcular superficie
    calcularSuperficie() {
        return this.largo * this.ancho;
    }

    // Calcular volumen
    calcularVolumen() {
        return this.largo * this.ancho * this.grosor;
    }
}