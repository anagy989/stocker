<?php
include "route.php";
//$baseUrl = "http://localhost";
$baseUrl = "http://192.168.0.103";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1 , maximum-scale=1, user-scalable=no">
  <title>Stocker | PAPÍR, IRODASZER, ISKOLASZER, NYOMTATVÁNY SZAKBOLT</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
  <!-- 
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="<?php echo $baseUrl; ?>">Stocker</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" href="<?php echo $baseUrl; ?>">Kezdőlap</a>
        <a class="nav-link" href="<?php echo $baseUrl . '/index.php?page=kategoria'; ?>">Termékek</a>
        <a class="nav-link" href="<?php echo $baseUrl . '/index.php?page=rolunk'; ?>">Rólunk</a>
        <a class="nav-link" href="<?php echo $baseUrl . '/index.php?page=kapcsolat'; ?>">Kapcsolat</a>
      </div>
    </div> 

  </nav>-->

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
    <div id="content-wrap">
      <?php echo $view; ?>
    </div>
  </div>


  <footer class="py-3 bg-dark">

    <p class="m-0 text-center text-white">Copyright &copy; Stocker Kft. 2020</p>

  </footer>


  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>