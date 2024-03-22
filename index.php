<?php 

include_once 'data.php';
$json_datas = data();
// print_r($json_datas);

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
    <div class="container">
        <div class="row my-3">
            <h2 class="text-center">မြန်မာဆယ့်နှစ်လရာသီများ</h2>
        </div>
        <div class="row my-4">
            <?php 
                foreach($json_datas as $key=>$items){
                    echo "<div class='col-md-3 mb-2' height='300px'>";
                    echo "<div class='card'>";
                    echo "<img src='{$items['ImgUrl']}' width='100%' height='200px' class='rounded-3'>";
                    echo "<a href='description.php' id='{$items['Id']}' class='btn text-decoration-none'><h3 class='text-danger text-center mt-2'>{$items['MonthMm']}</h3></a>";
                    // echo "<a href='description.php?id={$items['Id']}' class='text-decoration-none'><h3 class='text-danger text-center mt-2'>{$items['MonthMm']}</h3></a>";
                    echo "</div>";
                    echo "</div>";
                }  
            ?>
        </div>
    </div>
    <script src="./js/jquery-3.7.1.min.js"></script>
    <script src="./js/myscrip.js"></script>
</body>
</html>