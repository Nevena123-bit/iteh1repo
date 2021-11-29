<?php
require '../../Data/FilmoviControl.php';
$id=$_POST['id'];
$instanca=FilmoviControl::getInstance();
$instanca->DeleteFilm($id);
$instanca->searchData("");

$data="";


while($instanca->res!=null && $r=$instanca->res->fetch_array()){
    $data.='  
    <div class="card mx-auto col-md-3 col-10 mt-5"> 
    <img class="mx-auto img-thumbnail" src="res/filmImg.jpg" width="600px" height="50%" />
    
    <div class="card-body text-center mx-auto">
        <div class="cvp">
            <h5 class="card-title font-weight-bold" id="TitleText">'.$r['ImeRezisera'] .'   , '.$r['ImeFilma'].'</h5>

            <p class="card-text">'.$r['DatumPrikazivanja'] .' $  </p>
           
            <br>
            <div id="Buttons">
            <button class="login100-form-btn button deleteDugme"  id="ButtonFunc"  onclick="DeleteClicked( '.$r['FilmID'].');" >Delete</button>
            <button class="login100-form-btn button updateDugme"  id="ButtonFunc"  onclick=" UpdateClicked('.$r['FilmID'].','.$r['DatumPrikazivanja'].','.$r['ReziserID'].',\''.$r['ImeFilma'].'\')">Update</button>

            </div>
        </div>
    </div>
</div>
<br>
<br>
    ';
    }
echo $data;