<?php

spl_autoload_register(function($class){
    include __DIR__ . "/" . str_replace('\\','/',$class) . ".php";
});


use app\controller\ProductController;

$productController = new ProductController();

$content = "";
        if (isset($_GET["nev"])) {
            $content = $productController->actionProductsByCategoryName($_GET["nev"]);
        }
        

