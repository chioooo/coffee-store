<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventario";

$id = $_POST['id'];
$cat = $_POST['categoria'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$cant = $_POST['cantidad'];

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$db=mysqli_select_db($conn,$dbname) or die ("Upps no sirve");

$sql = "INSERT INTO producto(id, categoria, nombre, precio, cantidad) VALUES ('$id','$cat', '$nombre', '$precio','$cant')";

if (mysqli_query($conn,$sql)) {
    header('Location: ../AGREGAR.html');
    echo "Registro exitoso";
} else {
    echo "Error ".$sql.mysqli_error($conn);
}

$conn->close();
?>
