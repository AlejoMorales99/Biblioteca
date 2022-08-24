<?php
/*
Configuracion general del framework
Constantes
*/

//directorio raiz del framework

define('APPROOT', dirname(dirname(__FILE__)));
//echo APPROOT;
//URL DE LA APP
//define('URLROOT', 'htpp://www.eldominio.com/');
define('URLROOT', 'http://localhost/Biblioteca/');
//Nombre de la aplicación
define('SITENAME', 'Biblioteca Version MVC');
//Credenciales para la bd
//cammbia a la forma nnueva de hacer constantes
define('DB_HOST', 'localhost'); //ojo: cambiarla en el display
define('DB_USER', 'root'); //usuario de la bd
define('DB_PASSWORD', ''); //password del usuario en la bd
define('DB_NAME', 'biblioteca'); //nombre de la bd
