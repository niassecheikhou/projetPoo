<?php
namespace App\Core;

    class Request{
        //fonction qui permet de recuperer l'uri
        public function getUri()
        {
            //explode permet de transformer string="$_SERVER["REQUEST_URI"]" en tableau a partir du critere de /
            $url=explode("/",$_SERVER["REQUEST_URI"]);
            // unset permet de suprimer
            unset($url[0]);
            // unset($url[1]);
            // unset($url[2]);
            // unset($url[3<    
    
            //array values permet de reinitialiser les index 
            return (array_values($url)); 
        }

            // fonction si la methode du request est Get
        public function isGet():bool
        {
          return  $_SERVER['REQUEST_METHOD']=='GET';
        }

         // fonction si la methode du request est Post
        public function isPost():bool
        {
          return  $_SERVER['REQUEST_METHOD']=='POST';
        }
    }