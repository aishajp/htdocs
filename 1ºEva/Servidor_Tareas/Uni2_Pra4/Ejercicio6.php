<?php
abstract class Vehiculo {
    private $color;
    private $peso;
    protected static $numero_cambio_color = 0;
    const SALTO_DE_LINEA = '<br />'; 

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
        self::$numero_cambio_color++; 
    }

    public function setPeso($peso) {
        if ($peso <= 2100) { 
            $this->peso = $peso;
        } else {
            echo "El peso no puede exceder 2100 kg" . self::SALTO_DE_LINEA;
        }
    }

    abstract public function añadir_persona($peso_persona);

    public static function ver_atributo($objeto) {
        echo "Color: " . $objeto->getColor() . self::SALTO_DE_LINEA;
        echo "Peso: " . $objeto->getPeso() . " kg" . self::SALTO_DE_LINEA;
        
        if ($objeto instanceof Cuatro_ruedas) {
            echo "Número de puertas: " . $objeto->getNumeroPuertas() . self::SALTO_DE_LINEA;
        }
        if ($objeto instanceof Dos_ruedas) {
            echo "Cilindrada: " . $objeto->getCilindrada() . self::SALTO_DE_LINEA;
        }
        if ($objeto instanceof Camion) {
            echo "Longitud: " . $objeto->getLongitud() . self::SALTO_DE_LINEA;
        }
        if ($objeto instanceof Coche) {
            echo "Número de cadenas para nieve: " . $objeto->getNumeroCadenasNieve() . self::SALTO_DE_LINEA;
        }
        echo "Número de cambios de color: " . self::$numero_cambio_color . self::SALTO_DE_LINEA;
    }
}

class Cuatro_ruedas extends Vehiculo {
    protected $numero_puertas = 0;

    public function __construct($color, $peso, $numero_puertas) {
        parent::__construct($color, $peso);
        $this->numero_puertas = $numero_puertas;
    }

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
        return $this->numero_puertas;
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

    public function añadir_persona($peso_persona) {
        parent::añadir_persona($peso_persona);
        
        if ($this->getPeso() >= 1500 && $this->numero_cadenas_nieve <= 2) {
            echo "Atención, ponga 4 cadenas para la nieve." . self::SALTO_DE_LINEA;
        }
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


$miCoche = new Coche("Verde", 2100, 4); 
$miCoche->añadir_cadena_nieve(2); 
$miCoche->añadir_persona(80); 
$miCoche->setColor("Azul"); 
$miCoche->quitar_cadena_nieve(4); 
$miCoche->repintar("Negro"); 
Vehiculo::ver_atributo($miCoche);
?>
