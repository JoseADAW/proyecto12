<?php
//ver errores
ini_set('display_errors', 1);

//Constantes iniciales
define('ROOT', DIRECTORY_SEPARATOR);
define('APP', ROOT . 'app' . DIRECTORY_SEPARATOR);


//carga las clases iniciales
require_once ('libs/Mysqldb.php');
require_once ('libs/Controller.php');
require_once('libs/Application.php');
?>