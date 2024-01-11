<?php

// header('Location: server.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Dischi JSON</title>
  <!-- MY STYLE -->
  <link rel="stylesheet" href="src/style.css">
  <!-- /MY STYLE -->
</head>

<body>
  <div id="app" v-cloak>
    <ul>
      <li v-for='album in cds'>
        <div>{{album.titolo}}</div>
      </li>
    </ul>
  </div>
  <!-- VUE -->
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <!-- /VUE -->
  <!-- AXIOS -->
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <!-- /AXIOS -->
  <!-- MY JS -->
  <script src="src/main.js"></script>
  <!-- /MY JS -->
</body>

</html>