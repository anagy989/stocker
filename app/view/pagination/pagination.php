<?php
$baseUrl = "http://localhost:8080";
//$baseUrl = "http://192.168.0.103";
if ($pagination["pagination"]["page"] > 1) {
    echo "<li class='page-item'><a class='page-link' href='" . $baseUrl . "/index.php?page=kategoria&nev=" . $pagination["pagination"]["cat"] . "&pageno=1'>Első</a></li>";
    echo "<li class='page-item'><a class='page-link' href='" . $baseUrl . "/index.php?page=kategoria&nev=" . $pagination["pagination"]["cat"] . "&pageno=" . ($pagination["pagination"]["page"] - 1) . "'> <span aria-hidden='true'>&laquo;</span><span class='sr-only'>Previous</span></a></li>";
}
for ($i = $pagination["pagination"]["start_loop"]; $i <= $pagination["pagination"]["end_loop"]; $i++) {
    echo "<li class='page-item '><a class='page-link' href='" . $baseUrl . "/index.php?page=kategoria&nev=" . $pagination["pagination"]["cat"] . "&pageno=" . $i . "'>" . $i . "</a></li>";
}

if ($pagination["pagination"]["page"] < $pagination["pagination"]["end_loop"]) {
    echo "<li class='page-item'><a class='page-link' href='" . $baseUrl . "/index.php?page=kategoria&nev=" . $pagination["pagination"]["cat"] . "&pageno=" . ($pagination["pagination"]["page"] + 1) . "'> <span aria-hidden='true'>&raquo;</span><span class='sr-only'>Next</span></a></li>";
    echo "<li class='page-item'><a class='page-link' href='" . $baseUrl . "/index.php?page=kategoria&nev=" . $pagination["pagination"]["cat"] . "&pageno=" . $pagination["pagination"]["total_pages"] . "'>Utolsó</a></li>";
}
// echo $pagination["pagination"]["count"];
// echo("Start".$pagination["pagination"]["start_loop"]);
// echo "<br>";      
// echo("End".$pagination["pagination"]["end_loop"]);
// echo "<br>";      
// echo("Page".$pagination["pagination"]["page"]);
