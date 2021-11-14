<?php


class Database{
   
    private static  $instance;
    public $conn;
    
    private function __construct($database)
    {
        require 'config.php';
        $this->conn=new mysqli($host,$user,$pass,$database,$port);

    }

    public static function getInstance(){
        if(self::$instance==null)  self::$instance=new Database(database:"domaciiteh");
        return self::$instance;
    }
 
    public  function tryToLogin($username,$password){
          $query="select * from user where username='$username' and password='$password'";
          $result=$this->conn->query($query);
          if($result->num_rows) return $result->num_rows;
          else return -1;
    }
    
    
     public function tryToRegister($username,$password,$passwordRepeat){
          if($password!=$passwordRepeat) return -1;
          $query="INSERT INTO user(username,password) VALUES('$username','$password')";
          $result=$this->conn->query($query);
          if($result) return 1 ;
          else return -1;
       }
}