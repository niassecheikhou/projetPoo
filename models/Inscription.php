<?php 
 class Inscription extends Model{ 
     // ManyToOne avec AC
     private int $id;

     public function __construct()
    {
        

    }

    public function ac():AC
    {  
        $sql="select p.* from ".parent::table()." i,personne p where p.id=i.ac_id and p.role like 'ROLE_AC' and i.id=".$this->id;
        return new AC();
    }
      // ManyToOne avec inscription

    public function anneeScolaire():AnneeScolaire
    {  
        $sql="select a.* from ".parent::table()." i,annee_scolaire a where a.id=i.annee_id and i.id=".$this->id;
        return new AnneeScolaire();

    } 

 }