<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Biblioteca Carrillo - Libros</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<?php include 'menu.php'; ?>
<?php include 'cnn.php'; ?>

<main>
    <span class="section-eyebrow">Ficha 02</span>
    <h1>Listado de libros</h1>

    <div class="catalog-table-wrap">
        <?php
        $sql = "SELECT id_libro, titulo, autor, editorial, año, disponible FROM libros ORDER BY titulo ASC";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            echo '<table class="catalog">';
            echo '<thead><tr>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Editorial</th>
                    <th>Año</th>
                    <th>Disponible</th>
                  </tr></thead><tbody>';

            while ($fila = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . htmlspecialchars($fila['titulo']) . '</td>';
                echo '<td>' . htmlspecialchars($fila['autor']) . '</td>';
                echo '<td>' . htmlspecialchars($fila['editorial']) . '</td>';
                echo '<td>' . htmlspecialchars($fila['anio']) . '</td>';
                echo '<td>' . ($fila['disponible'] ? 'Sí' : 'No') . '</td>';
                echo '</tr>';
            }

            echo '</tbody></table>';
        } else {
            echo '<p class="empty-note">Todavía no hay libros cargados en la base de datos.</p>';
        }
        ?>
    </div>
</main>

<footer class="site-footer">Instituto Superior "Dr. Ramón Carrillo" &mdash; Biblioteca</footer>

</body>
</html>
<?php $conn->close(); ?>
