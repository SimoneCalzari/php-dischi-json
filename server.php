<?php

$data_json = file_get_contents('database.json');
$data_php = json_decode($data_json, true);

if (!empty($_GET['id'])) {
  foreach ($data_php as $cd) {

    if ($cd['id'] === intval($_GET['id'])) {
      $cd_chosen = $cd;
    }
  }
  $data_php = $cd_chosen;
}

header('Content-Type: application/json');
echo json_encode($data_php);
