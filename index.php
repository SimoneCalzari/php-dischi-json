<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Dischi JSON</title>
  <!-- MY STYLE -->
  <link rel="stylesheet" href="src/css/style.css">
  <!-- /MY STYLE -->
</head>

<body>
  <div id="app" v-cloak>
    <div id="body-mio">
      <!-- HEADER -->
      <header>
        <h1>php dischi json</h1>
      </header>
      <!-- /HEADER -->
      <!-- MAIN -->
      <main>
        <div class="container">
          <!-- CARDS CONTAINER -->
          <div class="cards">
            <!-- CARD -->
            <div class="card" v-for="cd in cds">
              <!-- FRONT CARD -->
              <div class="card-front">
                <div class="cover">
                  <img :src="'src/img/' + cd.img" alt="">
                </div>
                <h3>{{ cd.titolo }}</h3>
              </div>
              <!-- /FRONT CARD -->
              <!-- BACK CARD -->
              <div class="card-back"></div>
              <!-- /BACK CARD -->
            </div>
            <!-- /CARD -->
          </div>
          <!-- /CARDS CONTAINER -->
        </div>
      </main>
      <!-- /MAIN -->
    </div>
  </div>
  <!-- VUE -->
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <!-- /VUE -->
  <!-- AXIOS -->
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <!-- /AXIOS -->
  <!-- MY JS -->
  <script src="src/js/main.js"></script>
  <!-- /MY JS -->
</body>

</html>