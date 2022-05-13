<?php
// composseur en faissant de autoloding
require_once("../vendor/autoload.php");
    use App\Model\AC;
    use App\Model\Personne;
    use App\Model\Professeur;
    use App\Model\User;

    Professeur::findAll();



    
    // try {
    //     $ac=new AC();
    //     echo "bonjoiur";
    //     Professeur::findAll();
    //     }
    //     catch(Exception $e){
    //         die($e->getMessage()); 
    //     }


    //composer un outil de gestionnaire de dependences
    //gestionnaire=> un logiel qu'il faut installer dont l'objectif est de telecharger un dependance et de la configurer dans le projet
    //dependence=> toutes les classes qu'on peut ajouter dans nos projet pour optenir des fonctionalités suplementaires
    //hub de dependance => un site ou on regroupe toute les dependance du language 

//NameSpace=>pakage qui un regroupement de fonctionnalite et de classe







// $personne=new personne();
// echo Personne:: table();
// echo User::table();
// echo RP::table();
// Classe::findAll();
