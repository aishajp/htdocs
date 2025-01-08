<?php
class Vehiculo {
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

    public function añadir_persona($peso_persona) {
        $this->peso += $peso_persona;
    }

    public function circular() {
        echo "El vehículo está circulando.<br>";
    }

    public function __toString() {
        return "Color: $this->color, Peso: $this->peso kg";
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

    public function añadir_puertas($num) {
        $this->numero_puertas += $num;
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

$miCoche = new Coche("Verde", 1400);
$miCoche->añadir_persona(65);
$miCoche->añadir_persona(65);
echo "El color del coche es: " . $miCoche->getColor() . "<br>";
echo "El nuevo peso del coche es: " . $miCoche->getPeso() . "<br>";
$miCoche->repintar("Rojo");
$miCoche->añadir_cadena_nieve(2);
echo "El color del coche es: " . $miCoche->getColor() . "<br>";
echo "El número de cadenas para la nieve del coche es: " . $miCoche->getNumeroCadenasNieve() . "<br>";

$miDosRuedas = new Dos_ruedas("Negro", 120);
$miDosRuedas->añadir_persona(80);
$miDosRuedas->poner_gasolina(20);
echo "<br>El color del dos ruedas es: " . $miDosRuedas->getColor() . "<br>";
echo "El peso del dos ruedas es: " . $miDosRuedas->getPeso() . "<br>";

$miCamion = new Camion("Azul", 10000);
$miCamion->setLongitud(10);
$miCamion->setNumeroPuertas(2);
$miCamion->añadir_persona(80);
$miCamion->añadir_remolque(5);
echo "<br>El color del camión es: " . $miCamion->getColor() . "<br>";
echo "El peso del camión es: " . $miCamion->getPeso() . "<br>";
echo "La longitud del camión es: " . $miCamion->getLongitud() . " metros<br>";
echo "El número de puertas del camión es: " . $miCamion->getNumeroPuertas() . "<br>";
?>