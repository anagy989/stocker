<?php

namespace app\controller;

use app\model\Product;

class ProductController extends MainController
{
    public $prod = "";
    public static function actionListProductCategories()
    {
        $productCategories = new Product();
        $productCategories->listProductCategories();

        return $productCategories;
    }

    public static function actionProducts($categories)
    {
        $count = Product::productsCount();
        //var_dump($categories);
        return self::render("page", "products", [
            "categories" => $categories,
            "count" => $count,
        ]);
    }

    public static function actionProductsByCategoryName($cat)
    {
        $categories = Product::productsByCategoryName($cat);
        //var_dump($cat);
        // return self::render("category", "category", [
        //     "category" => $categories,
        // ]);
        $return = [];

        $return["category"] = self::render("category", "category", [
            "category" => $categories,
        ]);

        $return["pagination"] = self::render("pagination", "pagination", [
            "pagination" => $categories,
        ]);
        return $return;
    }
}
