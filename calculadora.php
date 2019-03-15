<?php 
  class Calculadora {
    private $number1;
    private $number2;

    public function __construct ($number1, $number2) {
      $this->number1 = $number1;
      $this->number2 = $number2;
    }

    function sumar() {
      $suma = $this->number1 + $this->number2;
      echo "La suma es igual a: " . $suma . "<br>";
    }

    function restar() {
      $resta = $this->number1 - $this->number2;
      echo "La resta es igual a: " . $resta . "<br>";
    }

    function multiplicar() {
      $multiplicacion = $this->number1 * $this->number2;;
      echo "La multiplicacion es igual a: " . $multiplicacion . "<br>";
    }

    function dividir() {
      $division = $this->number1 / $this->number2;;
      echo "La division es igual a: " . $division . "<br>";
    }
  }

  $calculadora = new Calculadora(10, 6);
  $calculadora->sumar();
  $calculadora->restar();
  $calculadora->multiplicar();
  $calculadora->dividir();
?>