<?php
//Obtenemos los datos que envia Github
$payload = json_decode(file_get_contents('php://input'));
$payload->ref;

//Realizamos comprobaciones

//Ejecutamos script de puesta en produccion
shell_exec('./deploy.sh');

?>
