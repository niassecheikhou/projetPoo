<?php 
    namespace App\Model;

    class AC extends User{
     //AC herite de User donc il a touu les attribut de User
        // Attribut navigationnel entre Attache et inscription 
          // OneToMany avec inscription
          // 1ere approche
          // private array $inscriptions;

        // fonction navigationnelle entre Attache et inscription 
          // OneToMany avec inscription
          // 2ere approche
        public function inscriptions():array { 
            return [];
        }

     public function __construct()
        {
           parent::$role="ROLE_AC";
            // $this->inscriptions=[];1ere approche
        }
        public static function findAll():array
      {
        // appel de de la fonction dataBase 
        $db=parent::database();
        // ouvrir la connection
        $db->connexionBD();
          $sql= "select  `id`,`nom_complet`,`role`,`login`,`password` from ".parent::table()." where role like 'ROLE_AC'";
          $results=$db->executeSelect($sql);
            // pour fermer la c
            
         $db->closeConnexion();
        
        //  $sql= "select *from ".str_replace("app\\model\\","",parent::table())." where role not like 'ROLE_AC'";
         return $results;
         
         
      }
      public function insert():int
      {
           // appel de de la fonction dataBase 
           $db=parent::database();
           
           // ouvrir la connection
           $db->connexionBD();
          
              $sql = "INSERT INTO `personne` (`nom_complet`, `role`,`login`,`password`) VALUES (?,?,?,?)";   
              
              
              $result=$db->executeUpdate($sql,[$this->nomComplet,parent::$role,$this->login,$this->password]);
              
              // pour fermer la connection
           $db->closeConnexion();
           
          return $result;
       
      }
  
        
    
    }