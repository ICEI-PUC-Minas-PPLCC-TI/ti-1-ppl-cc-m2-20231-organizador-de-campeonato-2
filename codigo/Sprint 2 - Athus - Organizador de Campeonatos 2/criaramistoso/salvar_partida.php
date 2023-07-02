<?php
$partida = json_decode(file_get_contents('php://input'), true);

$partidas = [];
if (file_exists('partidas.json')) {
  $partidas = json_decode(file_get_contents('partidas.json'), true);
}

$partidas[] = $partida;

file_put_contents('partidas.json', json_encode($partidas));

http_response_code(200);
?>
