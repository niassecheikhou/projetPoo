<?php
    namespace App\Model;
 
    class RP extends User{

        public function __construct(){
            self::$role="ROLE_RP";
        }
        public static function findAll():array
      {
          $sql= "select *from " .parent::table(). " where role not like ?";
          
          return parent::findBy($sql,[ self::$role],true);
      }
         
    }