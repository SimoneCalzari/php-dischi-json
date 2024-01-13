<?php
// leggo i dati dal json e li salvo in una variabile, sono ancora in formato json
$data_json = file_get_contents('database.json');
// traduco i dati in linguaggio comprensibile da php
$data_php = json_decode($data_json, true);
// salvo il dato in una variabile che poi andrò ad elaborare con i vari filtri
$result = $data_php;

// caso in cui ho un query parameters id nella richiesta
if (!empty($_GET['id'])) {
  // variabile id per migliorare leggibilità del codice
  $id = intval($_GET['id']);
  // ciclo per cercare l'album con l'id richiesto
  foreach ($data_php as $cd) {
    // condizione sull'id 
    if ($cd['id'] === $id) {
      // salvo l'array associativo (album) nella variabile che andrò a inviare 
      $result = $cd;
    }
  }
}
// indico che la risposta alla richiesta sarà in formato json
header('Content-Type: application/json');
// restituisco il dato richiesto in lingua json
echo json_encode($result);
