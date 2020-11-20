<?php
$connect = mysqli_connect("localhost", "root", "", "stocker");
$record_per_page = 5;
$page = '';
if(isset($_GET["alma"]))
{
 $page = $_GET["alma"];
}
else
{
 $page = 1;
}

$start_from = ($page-1)*$record_per_page;

$query = "SELECT  * FROM Data LIMIT $start_from, $record_per_page";
$result = mysqli_query($connect, $query);

?>

<!DOCTYPE html>
<html>
 <head>
  <title>Webslesson Tutorial | PHP Pagination with Next Previous First Last page Link</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <style>
  a {
   padding:8px 16px;
   border:1px solid #ccc;
   color:#333;
   font-weight:bold;
  }
  </style>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
 </head>
 <body>
 <script>
// In your Javascript (external .js resource or <script> tag)
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>
</select>
     </script>
  <br /><br />
  <div class="container">
  <select class="js-example-basic-single" name="state">
  <option value="AL">Alabama</option>
  <option value="WY">Wyoming</option>
</select>
   <h3 align="center">PHP Pagination with Next Previous First Last page Link</h3><br />
   <div class="table-responsive">
    <table class="table table-bordered">
    <tr><td>CikkNév</td><td>Cikkszám</td></tr>
     <?php
     while($row = mysqli_fetch_array($result))
     {
     ?>
     <tr>
      <td><?php echo $row["CikkCsoportNev"]; ?></td>
      <td><?php echo $row["Cikkszam"]; ?></td>
     </tr>
     <?php
     }
     ?>
    </table>
    <div align="center">
    <br />
    <?php
    $page_query = "SELECT * FROM Data ORDER BY CikkCsoportNev DESC";
    $page_result = mysqli_query($connect, $page_query);
    $total_records = mysqli_num_rows($page_result);
    $total_pages = ceil($total_records/$record_per_page);
    $start_loop = $page;
    $difference = $total_pages - $page;
    if($difference <= 5)
    {
     $start_loop = $total_pages - 5;
    }
    $end_loop = $start_loop + 4;
    if($page > 1)
    {
     echo "<a href='pagination.php?alma=1'>First</a>";
     echo "<a href='pagination.php?alma=".($page - 1)."'><<</a>";
    }
    for($i=$start_loop; $i<=$end_loop; $i++)
    {     
     echo "<a href='pagination.php?alma=".$i."'>".$i."</a>";
    }
    if($page <= $end_loop)
    {
     echo "<a href='pagination.php?alma=".($page + 1)."'>>></a>";
     echo "<a href='pagination.php?alma=".$total_pages."'>Last</a>";
    }
    
    
    ?>
    </div>
    <br /><br />
   </div>
  </div>
 </body>
</html>
