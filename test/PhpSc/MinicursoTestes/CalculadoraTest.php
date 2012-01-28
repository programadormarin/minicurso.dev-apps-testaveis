<?php
namespace PhpSc\MinicursoTestes;

class CalculadoraTest extends \PHPUnit_Framework_TestCase
{
     /**
      * @test
      */
     public function somaDeveRetornaSomatoriaDosDoisNumeros()
     {
          $calculadora = new Calculadora();

          $this->assertEquals(4, $calculadora->soma(2, 2));
     }
}
