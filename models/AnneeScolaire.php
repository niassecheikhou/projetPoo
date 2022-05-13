<?php 
 class AnneeScolaire extends Model{
     // OneToMany avec inscription
    protected $id_annee;
    protected $libelle;

     public function __construct(){
        self::$table='annee_scolaire';

     }

 }