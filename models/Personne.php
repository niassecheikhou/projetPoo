<?php
    namespace App\Model;
    Use  App\Core\Model;
    // une classe concrete
    // une classe abstract
    abstract class Personne extends Model{ 
       // creation des attribut instance 
       //ie un attribut creer pour chaque objet
        protected int $id;
        protected string $nomComplet;
        protected static string $role;
        protected static string $table='personne';

        // les atributs de class  ou static
        //qui sont des attributs partager a l'ensemble des objets de la classes
        private static int $nbrePersonne;

        //constructeur
        public function __construct(){
            // parent::table();
        }
        // Getters 
        public function getId():int{
            return $this->id;
        }
        public function getNomComplet():string{
            return $this->nomComplet;
        }
        public static function getNbrePersonne():int{
            return self::$nbrePersonne;
        }
        //& setters
        public function setId(int $id):self{
            $this->id=$id;
            return $this; 
        }
        public function setNomComplet(string $nomComplet):self{
            $this->nomComplet=$nomComplet;
            return $this;
        }
        public static function setNobrePersonne(int $nbrePersonne):void{
            self::$nbrePersonne=$nbrePersonne;
        }
        // // Redefinition de methodes  
        // public static function findAll():array{  
        //     $sql="select * from personne where role like '".self::$role."'";  
        //     return [];
        //   }

    }