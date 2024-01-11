<?php

$students = [
  [
    'nome' => 'Simone',
    'cognome' => 'Calzari'
  ],
  [
    'nome' => 'Lorenzo',
    'cognome' => 'Morani'
  ],
  [
    'nome' => 'Laura',
    'cognome' => 'Morani'
  ],
  [
    'nome' => 'Patrizia',
    'cognome' => 'Corsello'
  ],
];

header('Content-Type: application/json');

echo json_encode($students);
