<?php
include_once 'DataRequest.php';
$instanceDadosUsuarios = new DataRequest();
echo json_encode($instanceDadosUsuarios->dadosUsuarios());
?>