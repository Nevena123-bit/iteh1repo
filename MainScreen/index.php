<?php
require '../Data/FilmoviControl.php';
$filmContorl=FilmoviControl::getInstance();
//$productContorl->getAllGradovi();
$filmContorl->getAllFilmovi();
$result=$filmContorl->res;
$reziseri=$filmContorl->filmovi;
?>

<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="js/main.js"></script>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="products.css">
    <link rel="stylesheet" href="../Login/css/main.css">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



    <div class="TopHeader">

        <div class="SearchBox">

        <img src="res/searching.png" class="SerchIcon">
        <input class="SearchText" type="text" placeholder="Search">
        </div>
    </div>




    <div class="BodyMain">
            <div  id="Content"></div>
    </div>


</body>
</html>