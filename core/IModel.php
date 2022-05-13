<?php 
namespace App\Core;

interface IModel{
    // instances
    public function update():int;
    public function insert():int; 
    // static methods
    public static function delete(int $id):int;
    public static function findAll():array; 
    public static function findById(int $id):object|null;
    public static function findBy(string $sql,array $data=null,$single=false):object|null|array;
   
}
//methodes static est une methode de classe
//pour appeler une methode static on fait:
/**
 * classe::methode()
 * 
 *  Classe:: delete(1) // dlete from classe where id=1;
 * 
 * classe::finAll() //select *from classe;
 * 
 * classe::intert(["classe1","niveau","filiere"])
 * insert into classe (libelle,niveau,filiere) value(classe1)
**/
// methodes instances est une methode d'objet
// elle a bessoin de l'etat de l'objet ie la valeur de ses attributs
//pour appeler une methode d'instance on fait:
/**
 * $obj=new class()
 * $obj->setId(1)
 * $obj->setLibelle("classe 1")
 * $obj->update()
 * //update from classe set libelle='classe 1' where id=1; 
**/
/* $obj=new class()
 * $obj->setId(1)
 * $obj->delete //delete from classe where id=1;
 * 
 * 
**/