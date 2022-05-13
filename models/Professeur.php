<?php 
    namespace App\Model;

class Professeur extends Personne{
    
    public function __construct(){
        self::$role="ROLE_PROFESSEUR";
        self::table();
    }

    // fonctions de navigationnelles
    //ManyToMany avec classe 
    public function classes():array{
        return [];
    }
    public static function findAll():array
    {
        $sql= "select *from ".parent::table()." where role like 'ROLE_PROFESSUER'";
        echo $sql;
        return [];
    }


    //insert
    //update
    //delete
    
   // selectAll()=> select * from table;
   //selectById()=>select *from table where id=1;
}