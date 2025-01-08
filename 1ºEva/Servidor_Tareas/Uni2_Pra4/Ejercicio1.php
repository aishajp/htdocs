<?php
class Operaciones {
    private $num1;
    private $num2;

    public function __construct($num1, $num2) {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function suma() {
        return $this->num1 + $this->num2;
    }

    public function resta() {
        return $this->num1 - $this->num2;
    }

    public function multiplica() {
        return $this->num1 * $this->num2;
    }

    public function divide() {
        if ($this->num2 != 0) {
            return $this->num1 / $this->num2;
        } else {
            return "División por cero no permitida";
        }
    }
    
    public function __toString() {
        return "Numeros: ". $this->num1. ", ". $this->num2;
    }
}

// Crear un objeto de la clase Operaciones
$operar = new Operaciones(20, 50);

//mostrar el objeto operar, usando el metodo __toString()
echo $operar . "<br>";

// Mostrar los resultados de las operaciones
echo "Suma: " . $operar->suma() . "<br>";
echo "Resta: " . $operar->resta() . "<br>";
echo "Multiplicación: " . $operar->multiplica() . "<br>";
echo "División: " . $operar->divide() . "<br>";

?>
