<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http‐equiv="refresh" content="20;URL=./2PantillaBasica.htm">
    <title>Cat&aacute;logo Coffee Shop</title>
    <!--FONT AWESONE-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/stylee.css">
    <style>
        table td {
            border-bottom: 2px solid rgba(168, 168, 168, 0.575)
        }

        table {
            display: flex;
            justify-content: space-around;
        }

        table td,
        #tabla th {
            padding: 30px;
        }

        table th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: center;
            color: rgb(0, 0, 0);
        }
    </style>
</head>

<body>
    <nav class="barra">
        <ul class="nav-main">
        </ul>
        <i class="fa fa-coffee">Coffee-Store Inventory</i>
        <ul class="nav-menu-right">
            <li>
                <button type="button"><a href="index.html"><i class="fa fa-sign-out"></a></i></button>
            </li>
        </ul>
    </nav>
    <!--FIN DEL NAV WOW-->
    <aside class="opciones">
    <div class="catalogo">
            <i class="fa fa-book"></i> <a href="catalogo.html">Cat&aacute;logo de productos</a>
        </div>
        <div class="copia">
            <i class="fa fa-cloud-upload"></i> <a href="copia.html">Copia de seguridad</a>
        </div>
        <div class="agregar">
            <i class="fa fa-plus-circle"></i><a href="AGREGAR.html">Agregar</a>
        </div>
        <div class="agregar">
            <i class="fa fa-trash"></i><a href="ELIMINAR.html">Eliminar</a>
        </div>
    </aside>
    <!--TERMINA LA BARRA DE OPCIONES-->
    <section class="contenido">
        <div class="buscador">
            <input type="search" placeholder="Buscar producto...">
            <button type="submit">
                <i class="fa fa-search"></i>
            </button>
        </div>
        <div class="texto">
            <h2>Tabla de contenido</h2>
        </div>
        <br><br>

        <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventario";

try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $stmt=$conn->query("SELECT * FROM producto WHERE categoria = 'galletas'");

    echo "<table id='tabla' border='0'>";
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

    </section>
</body>

</html>