<?php 
    namespace App\Model;
    Use App\Core\Model;
class Classe extends Model{
// fonctions de navigationnelles
    //ManyToMany avec Professeurs 
    public function professeurs():array{
        return [];
    }
     public function __construct(){
       

     }
}