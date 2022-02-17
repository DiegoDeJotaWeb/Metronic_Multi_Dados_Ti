<?php

include_once 'DataRequest.php';


$instanceDadosClientes = new DataRequest();
$amountCliente = $instanceDadosClientes->dadosClientes("c");

$instanceDadosUsuarios = new DataRequest();
$amountUsuarios = $instanceDadosUsuarios->dadosUsuarios("c");

$instanceDadosFornecedores = new DataRequest();
$amountFornecedores = $instanceDadosFornecedores->dadosFornecedores("c");
