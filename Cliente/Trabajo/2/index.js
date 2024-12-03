import { GestorCarpinteria } from './gestorcarpinteria.js';
import { Pedido } from './pedido.js';
import { Pieza } from './piezas/pieza.js';

const gestorCarpinteria = new GestorCarpinteria();

// Para ejemplo
// gestorCarpinteria.cargarDatosEjemplo();

export { gestorCarpinteria, Pedido, Pieza };