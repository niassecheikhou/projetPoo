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
           //self::$role="ROLE_AC";
            // $this->inscriptions=[];1ere approche
        }
        public static function findAll():array
      {
         $sql= "select *from ".str_replace("app\\model\\","",parent::table())." where role not like 'ROLE_AC'";
         echo $sql;
         return [];
      }
        
    
    }