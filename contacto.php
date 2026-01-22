<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = htmlspecialchars($_POST["nombre"]);
    $email = htmlspecialchars($_POST["email"]);
    $mensaje = htmlspecialchars($_POST["mensaje"]);

    // Aquí puedes guardar en BD o enviar correo
    echo "Gracias $nombre, tu mensaje fue enviado correctamente.";
}
