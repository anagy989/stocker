<?php

spl_autoload_register(function($class){
    include __DIR__ . "/" . str_replace('\\','/',$class) . ".php";
});

use app\model\Product;

use app\controller\ProductController;
use app\controller\PageController;

$productController = new ProductController();
$pageController = new PageController();

$content = "";
$view=$pageController->actionHome();

$categories = $productController->actionListProductCategories(); 

if (isset($_GET["page"])) {
    $page = $_GET["page"];
    if ($page == "kategoria") {
        $view = $productController->actionProducts($categories);
    }
    else if ($page == "kapcsolat") {
        $view = $pageController->actionContact();
    }
    else if ($page == "rolunk") {
        $view = $pageController->actionAbout();
    }
    // else if ($page == "termekek") {
    //     $view = $pageController->actionProducts();
    // }
    // else if ($page == "kezdolap") {
    //     $view = $pageController->actionHome();
    // }
}
