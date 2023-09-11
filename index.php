<?php
$title = 'PHP Dischi json';
?>

<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title ?></title>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="https:cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="icon" type="image/x-icon" href="https://boolean.careers/favicon/favicon.ico">
</head>

<body>
  <div id="app">
    <header>
      <nav class="navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img style="width: 80px;" src="./img/spotify-logo-transparent-free-png.png" alt="logo">
          </a>
        </div>
      </nav>
    </header>
    <main>
      <div class="container py-5">
        <div class="row row-cols-4 justify-content-center">
          <div class="card bg-card p-4 m-2" v-for="card in cards">
            <img :src="card.immagine" class="card-img-top" :alt="alt">
            <div class="card-body">
              <h5 class="card-title text-white fw-bold text-center">{{ card.title }}</h5>
              <p class="card-text text-white text-center">{{ card.band }}</p>
              <p class="card-text fw-bold text-white text-center fs-5">{{ card.anno }}</p>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
  <script src="js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>