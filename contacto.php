<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Biblioteca Carrillo - Contacto</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<?php include 'menu.php'; ?>

<main>
    <span class="section-eyebrow">Ficha 04</span>
    <h1>Contacto</h1>

    <div class="contact-grid">
        <div class="contact-card">
            <dl>
                <dt>Institución</dt>
                <dd>Instituto Superior "Dr. Ramón Carrillo"</dd>

                <dt>Dirección</dt>
                <dd>Bell Ville, Córdoba, Argentina</dd>

                <dt>Horario de atención</dt>
                <dd>Lunes a viernes de 8:00 a 20:00 hs</dd>

                <dt>Email</dt>
                <dd>biblioteca@institutocarrillo.edu.ar</dd>

                <dt>Teléfono</dt>
                <dd>(0353) 000-0000</dd>
            </dl>
        </div>

        <div class="map-frame">
            <!--
                Mapa embebido de Google Maps (no requiere API key).
                Si la dirección exacta cambia, actualizá el parámetro "q" de la URL.
            -->
            <iframe
                src="https://maps.google.com/maps?q=Instituto%20Superior%20Dr.%20Ram%C3%B3n%20Carrillo%2C%20Bell%20Ville%2C%20C%C3%B3rdoba&output=embed"
                allowfullscreen
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</main>

<footer class="site-footer">Instituto Superior "Dr. Ramón Carrillo" &mdash; Biblioteca</footer>

</body>
</html>
