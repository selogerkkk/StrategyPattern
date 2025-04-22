<?php
require_once 'ImpostoStrategy.php';

class ImpostoBrasil implements ImpostoStrategy
{
    public function calcularImposto(float $valor): float
    {
        return $valor * 0.1;
    }
}
