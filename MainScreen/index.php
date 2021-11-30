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

<div class="Containter">

    <div class="TopHeader">

        <div class="SearchBox">

        <img src="res/searching.png" class="SerchIcon">
        <input class="SearchText" type="text" placeholder="Search">
        </div>
        <button class="login100-form-btn addDugme">
							Add
        </button>
    </div>

    
    

    <div class="bcg"></div>
    <div class="Dialog">
   
				
                    <span class="login100-form-title p-b-34 p-t-27">
                                    Ubaci Film
                    </span> 
				
					<div class="wrap-input100 " >
						<input class="input100" type="text" name="FilmIme" id="FilmIme" placeholder="Ime">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
                    <div class="Ele">

                    <label class="Lbl" for="DatumPrikazivanja">Datum Prikazivanja </label><br>
                        <input type="date" id="DatumPrikazivanja" name="DatumPrikazivanja"
                             value="2018-07-22"
                                min="2018-01-01" max="2025-12-31">
                    </div>
                

                <div class="Ele">
                   <label  class="Lbl" for="Reziseri">Reziser </label><br>
                          <select name="Reziseri" id="Reziser">
                                <option value="volvo">Volvo</option>
                                <option value="saab">Saab</option>
                                <option value="mercedes">Mercedes</option>
                                <option value="audi">Audi</option>
                        </select>
                </div>


					<div class="buttonContainer">
                    <button class="login100-form-btn save">
							Save
						</button>
                        <button class="login100-form-btn close">
							Close
						</button>
					</div>

					
			

    </div>


    <div class="BodyMain">
            <div  id="Content"></div>
    </div>


</div>

</body>
</html>