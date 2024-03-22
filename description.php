<?php 
session_start();
include_once 'data.php';

$json_datas = data();

$id = intval($_SESSION['id']);
//echo $id;
//$id = intval($_GET['id']);
// echo "$id";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="desc_container container">
        <div class="row">
            <a href="index.php" class="text-success fs-4 text-decoration-none">Home</a>
        </div>
        <div class="row">
            <?php 
            foreach($json_datas as $key=>$detail){
            //    print_r ($detail);
                if($detail['Id'] == $id){
                    echo "<h2 class='text-center'>{$detail['MonthMm']}({$detail['FestivalMm']})</h2>";
                    echo "<h2 class='text-center '>{$detail['MonthEn']}({$detail['FestivalEn']})</h2>";
                    echo "<div class='col-md-6 '>";
                    echo "<img src='{$detail['FestivelImg']}'  >";
                    echo "<p class='my-2'>{$detail['Description']}</p>";
                    echo "</div>";

                    echo "<div class='col-md-6 '>";
                    echo "<p>{$detail['Detail']}</p>";
                    echo "</div>";    
                }
            }
            ?>
        </div>
    </div>
    
</body>
</html>