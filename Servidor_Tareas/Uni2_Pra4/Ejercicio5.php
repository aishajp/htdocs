<?php
abstract class Vehiculo {
    private $color;
    private $peso;

    public function __construct($color, $peso) {
        $this->color = $color;
        $this->peso = $peso;
    }

    public function getColor() {
        return $this->color;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function setPeso($peso) {
        $this->peso = $peso;
    }

    abstract public function añadir_persona($peso_persona);

    public static function ver_atributo($objeto) {
        echo "Color: " . $objeto->getColor() . "<br>";
        echo "Peso: " . $objeto->getPeso() . " kg<br>";
        if ($objeto instanceof Cuatro_ruedas) {
            echo "Número de puertas: " . $objeto->getNumeroPuertas() . "<br>";
        }
        if ($objeto instanceof Dos_ruedas) {
            echo "Cilindrada: " . $objeto->getCilindrada() . "<br>";
        }
        if ($objeto instanceof Camion) {
            echo "Longitud: " . $objeto->getLongitud() . " <br>";
        }
        if ($objeto instanceof Coche) {
            echo "Número de cadenas para nieve: " . $objeto->getNumeroCadenasNieve() . "<br>";
        }
    }
}

class Cuatro_ruedas extends Vehiculo {
    protected $numero_puertas = 0;  // Cambiado a protected

    public function repintar($color) {
        $this->setColor($color);
    }

    public function setNumeroPuertas($numero_puertas) {
        $this->numero_puertas = $numero_puertas;
    }

    public function añadir_persona($peso_persona) {
        $this->setPeso($this->getPeso() + $peso_persona);
    }

    public function getNumeroPuertas() {
        return $this->numero_puertas;  // Método para acceder a numero_puertas
    }
}

class Dos_ruedas extends Vehiculo {
    private $cilindrada;

    public function poner_gasolina($litros) {
        $this->setPeso($this->getPeso() + $litros);
    }

    public function cambiar_cilindrada($cilindrada) {
        $this->cilindrada = $cilindrada;
    }

    public function añadir_persona($peso_persona) {
        $this->setPeso($this->getPeso() + $peso_persona + 2); // Añadiendo 2 kg por el casco
    }

    public function getCilindrada() {
        return $this->cilindrada; // Método para acceder a la cilindrada
    }
}

class Coche extends Cuatro_ruedas {
    private $numero_cadenas_nieve = 0;

    public function añadir_cadena_nieve($num) {
        $this->numero_cadenas_nieve += $num;
    }

    public function quitar_cadena_nieve($num) {
        $this->numero_cadenas_nieve -= $num;
    }

    public function getNumeroCadenasNieve() {
        return $this->numero_cadenas_nieve;
    }
}

class Camion extends Cuatro_ruedas {
    private $longitud;

    public function setLongitud($longitud) {
        $this->longitud = $longitud;
    }

    public function añadir_remolque($longitud_remolque) {
        $this->longitud += $longitud_remolque;
    }
    
    public function getLongitud() {
        return $this->longitud;
    }
}

// Ejemplo de uso

$miDosRuedas = new Dos_ruedas("Rojo", 150);
$miDosRuedas->añadir_persona(70);
echo "Peso total del dos ruedas: " . $miDosRuedas->getPeso() . " kg<br>";
$miDosRuedas->setColor("Verde");
$miDosRuedas->cambiar_cilindrada(1000);
Vehiculo::ver_atributo($miDosRuedas)."<br>";

echo "<br>";

$miCamion = new Camion("Blanco", 6000);
$miCamion->añadir_persona(84);
$miCamion->repintar("Azul");
$miCamion->setNumeroPuertas(2);
Vehiculo::ver_atributo($miCamion);
?>
