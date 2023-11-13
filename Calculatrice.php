<?php

namespace MyApp;

class Calculatrice
{
    public function addition($num1, $num2)
    {
        return $num1 + $num2;
    }

    public function soustraction($num1, $num2)
    {
        return $num1 - $num2;
    }

    public function multiplication($num1, $num2)
    {
        return $num1 * $num2;
    }

    public function division($num1, $num2)
    {
        if ($num2 === 0) {
            throw new \InvalidArgumentException("sipapossible");
        }

        return $num1 / $num2;
    }
}
