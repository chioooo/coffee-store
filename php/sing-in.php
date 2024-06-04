<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventario";

$nomina = $_POST['nomina'];
$pass = $_POST['pass'];

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$db=mysqli_select_db($conn,$dbname) or die ("Upps no sirve");

$sql = "SELECT * FROM usuarios WHERE num_nom='$nomina'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    
    $row = $result->fetch_assoc();
    
    if ($row['pass'] === $pass) {
        
        header('Location: ../plantilla.html');
        echo json_encode(array('message' => 'Inicio de sesión exitoso'));
    } else {
        
        http_response_code(401); 
        echo json_encode(array('error' => 'Credenciales incorrectas'));
    }
} else {
    
    http_response_code(401); 
    echo json_encode(array('error' => 'Credenciales incorrectas'));
}

$conn->close();
?>
