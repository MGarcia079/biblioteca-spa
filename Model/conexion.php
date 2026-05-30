<?php

//Las variables de conexión se pueden definir aquí o en un archivo .env para mayor seguridad 
// y flexibilidad,si no se encuentra el archivo .env o las variable de entorno no están definidas, 
// se usarán los valores por defecto definidos en el código para entorno local XAMPP.
$host = $_ENV['DB_HOST'] ?? "localhost";
$usuario = $_ENV['DB_USER'] ?? "root";
$password = $_ENV['DB_PASS'] ??  "1234";
$bd = $_ENV['DB_NAME'] ?? "biblioteca_spa";

try
{
    $conexion = new PDO("mysql:host=$host;dbname=$bd;charset=utf8",$usuario,$password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Conexión exitosa";
}
catch(PDOException $e)
{
    die("Error de conexión: " . $e->getMessage());
}

?>