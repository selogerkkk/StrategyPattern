<?php
require_once 'ImpostoStrategy.php';
require_once 'impostoBrasil.php';
require_once 'impostoEUA.php';
require_once 'impostoCanada.php';
require_once 'pedidoVenda.php';


$pedido_brasil = new PedidoVenda(new ImpostoBrasil());
echo "R$ " . $pedido_brasil->efetuarVenda(100) . PHP_EOL;

$pedido_eua =  new PedidoVenda(new ImpostoEUA());
echo "R$ " . $pedido_eua->efetuarVenda(100) . PHP_EOL;

$pedido_canada = new PedidoVenda(new ImpostoCanada());
echo "R$ " . $pedido_canada->efetuarVenda(100) . PHP_EOL;
