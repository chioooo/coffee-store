<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventario";


$id = $_GET['id'];
$mysql = new mysqli("localhost", "root", "", "inventario");
$Query = "delete from producto where id='".$id."'";
$Result = $mysql->query( $Query );

if($Result!=null){
	header('Location: ../ELIMINAR.html');
	print("Se elimino con éxito el registro.");
}

else
  	print("No se pudo eliminar");
?>
