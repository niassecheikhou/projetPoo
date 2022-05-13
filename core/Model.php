<?php
  namespace App\Core;
  class Model implements IModel{
    
    // la dependance
    // fonction qui permet de creer dataBase 
    protected static function database():Database
    { 
      return new Database();
    }

    public static function  table()
    {
      $table=get_called_class(); //permet connaitre quelle est la classe qui est appellé
      $table=str_replace("App\\Model\\","",$table);
      $table=($table=="User" or $table=="AC" or $table=="RP" or $table=="Etudiant" or $table=="Professeur")?"personne":strtolower($table); 
      return $table; 
    }
    public function __construct()
    {

    }
    //Redefinition des fonctions
      public function insert():int
      {
          return 0;
      }
      public function update():int
      { 
        return 0;
      }
      public static function delete(int $id):int
      {
        // appel de de la fonction dataBase 
        $db=self::dataBase();
        // ouvrir la connection
        $db->connexionBD();
        // pour executer la requette 
        // pour executer la requette 
        // Requete non preparer ie la variable 
        //est injecter lors de l'ecriture de la requete
        $sql ="delete from ".self::table()." where id=$id";
        $result=$db->executeUpdate( $sql);
        // pour fermer la connection
        $db->closeConnexion();
        
        return $result;
      }
      public static function findAll():array
      {
        // appel de de la fonction dataBase 
        $db=self::dataBase();
        // ouvrir la connection
        $db->connexionBD();
        // pour executer la requette 
           $sql ="select * from ".self::table(). "";
           $result=$db->executeSelect( $sql);
        // pour fermer la connection
        $db->closeConnexion();
        
        return $result;
      } 
      public static function findById(int $id):object|null
      {
        // appel de de la fonction dataBase 
        $db=self::dataBase();
        // ouvrir la connection
        $db->connexionBD();
        // pour executer la requette 
        // Requete  preparer ie la variable 
        //est injecter lors de l'execution de la requete
        // ?=> est appeler jocker: 
        //dont le premier est a la position 0 et le second s'il existe a la position 1
           $sql ="select * from ".self::table()." where id=?";
          $result=$db->executeSelect( $sql,[$id,]);
        // pour fermer la connection
        $db->closeConnexion();
        
        return $result;
      }
      public static function findBy(string $sql,array $data=null,$single=false):object|null|array
      {

        // appel de de la fonction dataBase 
        $db=self::dataBase();
        // ouvrir la connection
        $db->connexionBD();
           
          $result=$db->executeSelect( $sql,$data,$single=false );
        // pour fermer la connection
        $db->closeConnexion();
        
        return $result;
      }
  } 