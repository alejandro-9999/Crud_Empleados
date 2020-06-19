<?php
session_start();
function Conectar() {
$host  ="localhost";
$user = "root";
$pass = "";
$dbname = "Distrital";
$link =  mysqli_connect($host,$user,$pass) or die ("No se Conecta a la base de datos".mysqli_error());
mysqli_select_db($link,$dbname) or die ("No se encontro la base de datos ".mysqli_error()); 
return $link;

}    
?>