<?php 
    namespace App\Model;
    Use App\Core\Model;
 class Inscription extends Model{ 
     // ManyToOne avec AC
     private int $id;

     public function __construct()
    {
        

    }
            // fonction pour recuperer les AC
    public function ac():AC
    {  
        $sql="select p.* from ".parent::table()." i,personne p where p.id=i.ac_id and p.role like 'ROLE_AC' and i.id=?";
        $result= parent::findById($sql,[$this->id]);

        return $result;
    }
    
      // ManyToOne avec inscription
            // fonction pour recuperer les annees scolaires

    public function anneeScolaire():AnneeScolaire
    {  
        $sql="select a.* from ".parent::table()." i,annee_scolaire a where a.id=i.annee_id and i.id=?";
        $result= parent::findById($sql,[$this->id]);

        return  $result;

    } 

 }