<?php
// Verifica si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibe los datos del formulario
    $categoria = $_POST['categoria'];
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    // Agrega el campo de cantidad si lo necesitas
    $cantidad = $_POST['cantidad'];

    // Realiza acciones con los datos recibidos (por ejemplo, guardar en una base de datos)
    // ...

    // Muestra un mensaje de confirmación
    echo "¡Producto agregado con éxito!";

    // Redirige al usuario a la página original (plantilla.html)
    header('Location: plantilla.html');
    exit; // Asegura que no se ejecuten más líneas de código después de la redirección
} else {
    // Si no se ha enviado el formulario, muestra un mensaje de error
    echo "Error al procesar el formulario. Por favor, inténtalo de nuevo.";
}
?>
