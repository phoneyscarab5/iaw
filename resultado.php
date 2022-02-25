<?php
$nombre = $_POST['nombre'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];
echo "<h2>Mensaje enviado:</h2>";
echo "Nombre: " . $nombre . "<br/>";
echo "Asunto: " . $asunto . "<br/>";
echo "Mensaje: " . $mensaje . "<br/>";
?>
