<?php
require_once 'ImpostoStrategy.php';

class ImpostoEUA implements ImpostoStrategy
{
    public function calcularImposto(float $valor): float
    {
        return $valor * 0.07;
    }
}
