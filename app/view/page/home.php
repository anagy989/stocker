<?php
$baseUrl = "http://localhost:8080";
?>
<h2 class="py-5">Tekintse meg <a class="text-dark" href="<?php echo $baseUrl . '/index.php?page=kategoria&nev=Ablak-,%20és%20üvegtisztítók&pageno=1'; ?>"> termékeinket</a> online!</h2>
<div class="row justify-content-center">
    <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="d-block img-fluid" src="https://cdn.pixabay.com/photo/2010/12/13/09/59/artistic-2063_960_720.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="https://cdn.pixabay.com/photo/2016/01/19/14/54/office-supplies-1149055_960_720.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="https://cdn.pixabay.com/photo/2013/09/01/17/07/paperclip-178126_960_720.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>




<div class="row bg-secondary text-white info-block">
    <div class="col col-md-auto justify-content-center ">
        <ul style='list-style-type:none'>
            <li>
                <h3 class="my-2">Házhozszállítás</h3>
            </li>
            <li>
                <h3 class="my-2">Kedvezmény</h3>
            </li>
            <li>
                <h3 class="my-2">Halasztott fizetés</h3>
            </li>
        </ul>
    </div>
    <div class="col col-md-auto">
        <div class="row justify-content-center">
        <h4>Rendeléseiket leadhatják az alábbi elérhetőségeken:</h4>
        <ul style='list-style-type:none'>
            <li><i class="phone alternate icon"></i>Mobil: 06-20-44-88-715</li>
            <li><i class="fax icon"></i>Fax: 06-23-428-314</li>
            <li><i class="phone square alternate icon"></i>Vezetékes: 06-23-424-251</li>
        </ul>
        </div>
      
    </div>
    <div class="col col-md-auto justify-content-center">
        <a class="text-white m-2" href="<?php echo $baseUrl . '/index.php?page=kapcsolat'; ?>">
            <h2 class=" contact">Vagy írjon nekünk itt!</h2>
        </a>
    </div>
</div>