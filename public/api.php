<?php
if (file_exists(__DIR__ . '/../routes/api.php')) {
    require_once __DIR__ . '/../routes/api.php';
} else {
    http_response_code(500);
    header("Content-Type: application/json");
    echo json_encode(["success" => false, "message" => "Ficheiro de rotas não encontrado"]);
}
