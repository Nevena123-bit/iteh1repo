<?php
require 'Database.php';
class FilmoviControl{
    private static  $instance=null;
    public $res ;
    public $filmovi;
    public $searchRes;

   private function __construct()
   {
   
   }

   public static function getInstance(){
       if(self::$instance==null) self::$instance=new FilmoviControl();
       return self::$instance;
  
   }

   public function getAllReziseri()
   {
       $query="SELECT * from reziser";
       $this->filmovi=Database::getInstance()->conn->query($query);
       
   }
   function InsertFilm($Ime,$DatumPrikazivanja,$RaziserID){
       $query ="INSERT INTO grad(Ime,DatumPrikazivanja,RezisedID) VALUES('$Ime','$DatumPrikazivanja','$RaziserID')";
       if(Database::getInstance()->conn->query($query)) return 1;
        return -1;
   }
   function UpdateFilm($id,$ime,$DatumPrikazivanja,$RaziserID){
       $query="UPDATE grad SET
        Ime='$ime',DatumPrikazivanja='$DatumPrikazivanja',RezisedID='$RaziserID'
        WHERE FilmID='$id'";
        if(Database::getInstance()->conn->query($query)) return 1;
         return -1;
   }
   function DeleteFilm($id){
       $query="DELETE FROM film WHERE FilmID='$id'";
       if(Database::getInstance()->conn->query($query)) return 1;
        return -1;

   }
   function getAllFilmovi(){


       $query="SELECT f.FilmID as FilmID ,f.Ime as ImeFilma,r.Ime as ImeRezisera,f.DatumPrikazivanja as DatumPrikazivanja,r.ReziserID as ReziserID FROM reziser r JOIN film f ON f.RezisedID=r.ReziserID;";
       
       $this->res=Database::getInstance()->conn->query($query);
       if($this->res->num_rows!=0) return "Success";
       
       else return "Failed";
   }
   function searchData($searchQuery){
       $query="SELECT g.FilmID as FilmID ,d.Ime as ImeRezisera,g.Ime as ImeFilma,g.DatumPrikazivanja as DatumPrikazivanja,d.ReziserID as ReziserID FROM Reziser d JOIN film g ON d.ReziserID=g.RezisedID WHERE g.Ime LIKE '%$searchQuery%'";
  $this->res=Database::getInstance()->conn->query($query);
       if($this->res->num_rows!=0) return 1;
       
       else return -1;
   }
}