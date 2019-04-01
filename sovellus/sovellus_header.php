<?php 
/**
  * @author Kim Lehtinen <kim.lehtinen@student.uwasa.fi>
  */

date_default_timezone_set('Europe/Helsinki');
setlocale(LC_TIME, "fi_FI");

session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Hiihtokisat 3000 - Sovellus</title>

  <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/hiihtokisat.css" rel="stylesheet">
  <link rel="stylesheet" href="./admin.css">
  <style>
  /* Hero image css from https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_hero_image */
  body, html {
    height: 100%;
    margin: 0;
  }
  .hero-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('assets/img/skiing.jpg');
  height: 80%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}

.hero-text button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 10px 25px;
  color: black;
  background-color: #ddd;
  text-align: center;
  cursor: pointer;
}

.hero-text button:hover {
  background-color: #555;
  color: white;
}
/*./hero-image css*/

.card-img-top, .single-post-img {
  width: 100%;
  height: 20vw;
  object-fit: cover;
}

@media only screen and (max-width: 650px) {
  .single-post-img, .card-img-top {
    height: 50vw;
  }
}

.single-post-title-wrapper {
  display: flex;
  justify-content: center;
  align-items: center;
}

.single-post-title {
  border-bottom: 1px solid #000;
  padding-bottom: 3px;
  display: inline-block;
}
  </style>

</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="/">Hiihtokisat3000</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <?php
            if (isset($_SESSION['user'])) {
              echo '
              <li class="nav-item">
                <a class="nav-link" href="page_create_post.php">Uusi postaus</a>
              </li>';
            }
          ?>
          <li class="nav-item">
            <a class="nav-link" href="">Kisat</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Ilmoittautumiset</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Profiili</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../scripts/logout.php">Kirjaudu ulos</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>