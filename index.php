<?php
include "route.php";
$baseUrl = "http://localhost:8080";
//$baseUrl = "http://192.168.0.103";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1 , maximum-scale=1, user-scalable=no">
  <title>Stocker | PAPÍR, IRODASZER, ISKOLASZER, NYOMTATVÁNY SZAKBOLT</title>


  <link rel="stylesheet" href="assets/css/style.css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


  <link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css" />
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
  <script src="semantic/dist/semantic.min.js"></script>

  <!-- <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script> -->

</head>

<body>
  <script>
    $(document).ready(function() {
      $('.ui.dropdown').dropdown()
    });
  </script>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="<?php echo $baseUrl; ?>">Stocker Kft.</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <span class="navbar-text text-white d-none d-lg-block">
          Papír, Irodaszer, Iskolaszer, Nyomtatványok
        </span>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo $baseUrl; ?>">Kezdőlap</a>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $baseUrl . '/index.php?page=kategoria&nev=Ablak-,%20és%20üvegtisztítók&pageno=1'; ?>">Termékek</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $baseUrl . '/index.php?page=rolunk'; ?>">Rólunk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $baseUrl . '/index.php?page=kapcsolat'; ?>">Kapcsolat</a>
          </li>
        </ul>

      </div>
    </div>
  </nav>

  <div id="page-container">
    <div class="container" id="content-wrap">
      <?php echo $view; ?>
    </div>
  </div>


  <footer class="py-3 bg-dark">

    <p class="m-0 text-center text-white">Copyright &copy; Stocker Kft. 2020</p>

  </footer>


</body>

</html>