<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Biblioteca Carrillo - Socios</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<?php include 'menu.php'; ?>
<?php include 'cnn.php'; ?>

<main>
    <span class="section-eyebrow">Ficha 03</span>
    <h1>Listado de socios</h1>

    <div class="catalog-table-wrap">
        <?php
        $sql = "SELECT id_socio, nombre, apellido, dni, telefono FROM socios ORDER BY apellido ASC";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            echo '<table class="catalog">';
            echo '<thead><tr>
                    <th>Apellido</th>
                    <th>Nombre</th>
                    <th>DNI</th>
                    <th>Teléfono</th>
                  </tr></thead><tbody>';

            while ($fila = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . htmlspecialchars($fila['apellido']) . '</td>';
                echo '<td>' . htmlspecialchars($fila['nombre']) . '</td>';
                echo '<td>' . htmlspecialchars($fila['dni']) . '</td>';
                echo '<td>' . htmlspecialchars($fila['telefono']) . '</td>';
                echo '</tr>';
            }

            echo '</tbody></table>';
        } else {
            echo '<p class="empty-note">Todavía no hay socios cargados en la base de datos.</p>';
        }
        ?>
    </div>
</main>

<footer class="site-footer">Instituto Superior "Dr. Ramón Carrillo" &mdash; Biblioteca</footer>

</body>
</html>
<?php $conn->close(); ?>