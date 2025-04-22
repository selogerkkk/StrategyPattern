<?php
require_once 'ImpostoStrategy.php';

class ImpostoCanada implements ImpostoStrategy
{
    public function calcularImposto(float $valor): float
    {
        return $valor * 0.15;
    }
}
