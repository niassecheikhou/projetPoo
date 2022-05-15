<?php 
    namespace App\Model;
    Use App\Core\Model;

class Classe extends Model{
    private int $id;
      
    public function __construct(){
       

    }
// fonctions de navigationnelles
    //ManyToMany avec Professeurs 
    public function professeurs():array|null
    {
        // ici on definit la requete pour recuperer les professeurs d'une classe
        $sql = "select.....";
        $result= parent::findById($sql,[$this->id]);
        return $result;
    }

    
}