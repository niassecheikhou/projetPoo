<?php
namespace App\Core;

    class DataBase
    {
        private \PDO|null $pdo=null;
        public function connexionBD():void{
            $this->pdo= new \PDO("mysql:dbname=poo_projet_n1;host=localhost:3303","root","");
        }
        public function closeConnection():void
        {
            
            $this->pdo= null; 
        }
        public function executeSelect(string $sql, array $data=[],bool $single=false):object|array|null
        {
            return null;
        }
        public function executeUpdate(string $sql, array $data=[]):int
        {
            return 0;
        }
    }