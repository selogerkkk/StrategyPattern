<?php

interface ImpostoStrategy
{
    public function calcularImposto(float $valor): float;
}
