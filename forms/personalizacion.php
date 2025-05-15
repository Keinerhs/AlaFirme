<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $tipoGorra = $_POST['tipoGorra'];
    $personalizacion = $_POST['personalizacion'];

    // Aquí puedes guardar los datos en un archivo o base de datos

    echo json_encode(["status" => "ok", "message" => "Solicitud recibida"]);
} else {
    echo json_encode(["status" => "error", "message" => "Método no permitido"]);
}
