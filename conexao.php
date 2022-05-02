<?php

$hostname = "localhost";
$bancodedados = "";
$usuario = "root";
$senha = ""; 

$mysqli = new mysqli( $hostname, $bancodedados, $usuario, $senha);
 if  ($mysqli->connection_errno) { 

echo " falha ao conectar:(" . $mysqli->connect_errno . ")" . $mysqli-> connect_error; 

 }
 else {
     echo "conectado";
 }
 