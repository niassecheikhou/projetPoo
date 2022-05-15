<?php
namespace App\Core;

    class DataBase
    {
        private \PDO|null $pdo=null;
        public function connexionBD():void{
            $this->pdo= new \PDO("mysql:dbname=poo_projet_n1;host=localhost:3303","root","");
        }
        public function closeConnexion():void
        {
            $this->pdo= null; 
        }
        public function executeSelect(string $sql, array $data=[],bool $single=false):object|array|null
        {
            $query=$this->pdo->prepare($sql);
            $query->execute($data);
            if ($single){
                //si single est eagale a true 
                //\PDO::FETCH_OBJ: pour recuperer les données de la BD sous format Objet
                $result=$query->fetch(\PDO::FETCH_OBJ);
                // pour compter les eureurs si l'utilisateur n'existe pas
                // dans ce cas il me retourne null
                if  ($query->rowCount()==0) {
                return null;
                }

            }else{
                // si single est egale a false 
                //\PDO::FETCH_ASSOC: pour recuperer
                // les données sous format de tableau des noms des colonnes
                $result=$query->fetchAll(\PDO::FETCH_OBJ);
            }
            return $result;
        }
        public function executeUpdate(string $sql, array $data=[]):int
        {
            $query=$this->pdo->prepare($sql);
             $query->execute($data);
            // insert on returne le dernier id qui a été gener 
            return $query->rowCount();
        }
    }