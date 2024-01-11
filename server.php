<?php

$data = file_get_contents('database.json');
$students = json_decode($data, true);

/*
cose da fare sui dati
*/

header('Content-Type: application/json');
echo json_encode($students);
