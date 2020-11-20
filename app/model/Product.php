<?php

namespace app\model;

use app\Database as Db;

use app\controller\ProductController;

class Product
{
    private $data = [];

    function __get($name)
    {
        return $this->$name;
    }

    function __set($name, $value)
    {
        return $this->$name = $value;
    }

    public function listProductCategories()
    {
        $conn = Db::getConnection();

        $this->data = [];

        $stmt = $conn->prepare("SELECT DISTINCT CikkCsoportNev FROM Data order by CikkCsoportNev asc");
        $stmt->execute();

        $this->data = $stmt->fetchAll(\PDO::FETCH_CLASS, self::class);

        return $this->data;
    }

    public static function productsByCategoryName($cat)
    {
        $conn = Db::getConnection();
        //pauszpapí
        $sql = $conn->prepare("SELECT * FROM data WHERE CikkCsoportNev = :cat");
        $sql->execute([
            ':cat' => $cat
        ]);
        $count = $sql->rowCount();
       
        $record_per_page = 10;
        $total_pages = ceil($count / $record_per_page);
      
        $page = '';
        if (isset($_GET["pageno"])) {
            $page = $_GET["pageno"];
        } else {
            $page = 1;
        }
        $start_from = ($page - 1) * $record_per_page;

        $start_loop = $page;

        $difference = $total_pages - $page;
        
        if ($difference <= 5) {
            $start_loop = $total_pages - 5;
            if ($start_loop < 1) {
                $start_loop = 1;
            }
        }
        if ($start_loop + 5>$total_pages) {
            $end_loop = $total_pages;
        }
        else{
        $end_loop = $start_loop + 5;
        }
        //$end_loop = $total_pages;
        $stmt = $conn->prepare("SELECT * FROM Data WHERE CikkCsoportNev = :cat limit $start_from, $record_per_page");
        $stmt->execute([
            ':cat' => $cat
        ]);

        $results = $stmt->fetchAll(\PDO::FETCH_CLASS, self::class);
        $return = [];

        $return["results"] = $results;
        $return["pagination"] = [
            "page" => $page,
            "cat" => $cat,
            "start_loop" => $start_loop,
            "end_loop" => $end_loop,
            "total_pages" => $total_pages,
            "count" => $count,
            "record_per_page" => $record_per_page,
        ];

        return $return;
    }

    public static function productsCount()
    {
        $conn = Db::getConnection();

        $sql = "SELECT COUNT(*) FROM data";
        $res = $conn->query($sql);
        $count = $res->fetchColumn();


        return $count;
    }
}
