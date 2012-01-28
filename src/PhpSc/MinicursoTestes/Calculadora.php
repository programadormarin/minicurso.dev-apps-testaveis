<?php
namespace PhpSc\MinicursoTestes;

use \InvalidArgumentException;

/**
 * Desenvolve operações matemáticas simples
 *
 * @author Luís Otávio Cobucci Oblonczyk <lcobucci@gmail.com>
 */
class Calculadora
{
    public function soma($num1, $num2)
    {
        return $num1 + $num2;
    }

    public function subtrai($num1, $num2)
    {
        return $num1 - $num2;
    }

    public function divide($num1, $num2)
    {
        if ($num2 == 0) {
             throw new InvalidArgumentException('O divisor não pode ser ZERO');
        }

        return $num1 / $num2;
    }

    public function multiplica($num1, $num2)
    {
        return $num1 * $num2;
    }
}
