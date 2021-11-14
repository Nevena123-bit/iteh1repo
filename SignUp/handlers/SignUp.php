<?php
require '../../Data/Database.php';
if(isset($_POST['username']) && isset($_POST['pass']) && isset($_POST['passRepeat'])){
    
    $username=$_POST['username'];
    $password=$_POST['pass'];
    $passwordRepeat=$_POST['passRepeat'];

    $res=Database::getInstance()->tryToLogin($username,$password);
    if($res==-1){
        $res=Database::getInstance()->tryToRegister($username,$password,$passwordRepeat);
        echo $res;
    }
    else echo "vec postoji";

}