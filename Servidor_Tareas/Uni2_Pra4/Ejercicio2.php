<?php
class Vehiculo {
    private $color;
    private $peso;

    public function __construct($color, $peso) {
        $this->color = $color;
        $this->peso = $peso;
    }

    public function añadir_persona($peso_persona) {
        $this->peso += $peso_persona;
    }

    public function __toString() {
        return "Color: $this->color, Peso: $this->peso kg";
    }
}

class Cuatro_ruedas extends Vehiculo {
    private $numero_puertas;

    public function repintar($color) {
        $this->color = $color;
    }
}

class Dos_ruedas extends Vehiculo {
    private $cilindrada;

    public function poner_gasolina($litros) {
    }

    public function circular() {
    }
}

class Coche extends Cuatro_ruedas {
}

class Camion extends Cuatro_ruedas {
    private $longitud;
    private $numero_cadenas_nieve;

    public function añadir_cadena_nieve($num) {
        $this->numero_cadenas_nieve += $num;
    }

    public function quitar_cadena_nieve($num) {
        $this->numero_cadenas_nieve -= $num;
    }
}

// Ejemplo de uso
$miCoche = new Coche("Rojo", 1200);
$miCoche->añadir_persona(70);
echo $miCoche;
?>