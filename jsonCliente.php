<?php
include_once 'DataRequest.php';
$instanceDadosClientes = new DataRequest();
echo json_encode($instanceDadosClientes->dadosClientes());
