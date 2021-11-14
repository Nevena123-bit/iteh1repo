<?php
require '../../Data/Database.php';

    
if(isset($_POST['username']) && isset($_POST['pass'])){
    $username=$_POST['username'];
    $password=$_POST['pass'];


    $res=Database::getInstance()->tryToLogin($username,$password);
    
    echo $res;;

}