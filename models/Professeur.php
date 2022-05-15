<?php 
    namespace App\Model;

class Professeur extends Personne{
    private string $grade;
    public function __construct(){
        parent::$role="ROLE_PROFESSEUR";
        // self::table();
    
    }

    // fonctions de navigationnelles
    //ManyToMany avec classe 
    public function classes():array{
        return [];
    }
    public static function findAll():array
    {
        
         // appel de de la fonction dataBase 
         $db=parent::database();
         // ouvrir la connection
         $db->connexionBD();
      
         $sql= "select `nom_complet`, `role`, `grade` from ".parent::table()." where role like 'ROLE_PROFESSEUR'";
         $results=$db->executeSelect($sql);
            // pour fermer la c
            
         $db->closeConnexion();
        
        return $results;
    }
    public function insert():int
    {
         // appel de de la fonction dataBase 
         $db=parent::database();
         
         // ouvrir la connection
         $db->connexionBD();
        
            $sql = "INSERT INTO `personne` (`nom_complet`, `role`, `grade`) VALUES (?,?,?)";   
            
            
            $result=$db->executeUpdate($sql,[$this->nomComplet,parent::$role,$this->grade]);
            
            // pour fermer la connection
         $db->closeConnexion();
         
        return $result;
     
    }


    //insert
    //update
    //delete
    
   // selectAll()=> select * from table;
   //selectById()=>select *from table where id=1;

    /**
     * Get the value of grade
     */ 
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set the value of grade
     *
     * @return  self
     */ 
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }
}