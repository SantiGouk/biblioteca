<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Biblioteca Carrillo - Socios</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<?php include 'cnn.php';
 include 'menu.php'; ?>
 <main>
    <span class="section-eyebrow">Ficha 04</span>
    <h1>Listado de prestamos</h1>

<h2>Préstamos</h2>

<table border="1" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Libro</th>
        <th>Socio</th>
        <th>Fecha Préstamo</th>
        <th>Fecha Devolución</th>
        <th>Estado</th>
    </tr>
    <?php
    $sql = "SELECT p.id_prestamo, l.titulo, s.nombre, p.fecha_prestamo, p.fecha_devolucion
            FROM prestamos p
            JOIN libros l ON p.id_libro = l.id_libro
            JOIN socios s ON p.id_socio = s.id_socio
            ORDER BY p.fecha_prestamo DESC";
    $resultado = $conn->query($sql);

    if (!$resultado) {
        die("Error en la consulta: " . $conn->error);
    }

    while ($fila = $resultado->fetch_assoc()) {

        if ($fila['fecha_devolucion'] == '0000-00-00' || empty($fila['fecha_devolucion'])) {
            $vencido = ""; // todavía no se devolvió, dejamos en blanco
        } else {
            $vencido = ($fila['fecha_devolucion'] < date('Y-m-d')) ? "Vencido" : "En curso";
        }

        echo "<tr>
                <td>{$fila['id_prestamo']}</td>
                <td>{$fila['titulo']}</td>
                <td>{$fila['nombre']}</td>
                <td>{$fila['fecha_prestamo']}</td>
                <td>{$fila['fecha_devolucion']}</td>
                <td>$vencido</td>
              </tr>";
    }
    ?>
</table>

<a href="nuevo_prestamo.php">Registrar nuevo préstamo</a>

 </main>
</body>
</html>