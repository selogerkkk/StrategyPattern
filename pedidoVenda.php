<?php
require_once 'ImpostoStrategy.php';

class PedidoVenda
{
    private ImpostoStrategy $estrategia_imposto;

    public function __construct(ImpostoStrategy $estrategia_imposto)
    {
        $this->estrategia_imposto = $estrategia_imposto;
    }

    public function efetuarVenda(float $valor): float
    {
        $imposto = $this->estrategia_imposto->calcularImposto($valor);
        $valor_total = $valor + $imposto;
        return $valor_total;
    }
}
