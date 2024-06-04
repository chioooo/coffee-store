<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventario";

try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $stmt=$conn->query("SELECT * FROM producto");

    echo "<table id='tabla' border='1'>";
        echo "<tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Categoria</th>
                <th>Precio</th>
                <th>Cantidad</th>";
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['nombre'] . "</td>";
            echo "<td>" . $row['categoria'] . "</td>";
            echo "<td>" . $row['precio'] . "</td>";
            echo "<td>" . $row['cantidad'] . "</td>";
            echo "</tr>";
        }
    echo "</table>";
}catch(PDOException $e){
    echo "Error" . $e->getMessage();
}
$conn = null;
?>