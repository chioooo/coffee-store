<?php
// Conexión a la base de datos (cambia los valores según tu configuración)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventario";

// Obtener datos del formulario
$usernameC = $_POST['username'];
$pass = $_POST['pass'];
$nomina = $_POST['nomina'];

// Crear conexión
$conn = new mysqli($servername, $username, $password);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$db=mysqli_select_db($conn,$dbname) or die ("Upps no sirve");

// Consulta SQL para insertar los datos del usuario en la base de datos
$sql = "INSERT INTO usuarios(num_nom, nombre, pass) VALUES ('$nomina', '$usernameC', '$pass')";

if (mysqli_query($conn,$sql)) {
    // Registro exitoso
    header('Location: ../singin.html');
    echo "Registro exitoso";
} else {
    // Error en el registro
    echo "Error ".$sql.mysqli_error($conn);
}

// Cerrar conexión
$conn->close();
?>
