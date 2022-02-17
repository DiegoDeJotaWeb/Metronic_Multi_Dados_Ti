<?php
include_once 'DataRequest.php';
$instanceDadosFornecedores = new DataRequest();
echo json_encode($instanceDadosFornecedores->dadosFornecedores());

?>