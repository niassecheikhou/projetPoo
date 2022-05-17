<?php

ini_set("display_errors","ON");
ini_set("error_reporting", E_ALL);

require_once("../vendor/autoload.php");
require_once("../core/fonction.php");
// dd(str_replace("public","",$_SERVER["DOCUMENT_ROOT"]));

require_once("../routes/Route.web.php");



// composseur en faissant de autoloding
// use App\Controller\SecurityController;
// use App\Controller\ClasseController;
// use App\Core\Router;
// use App\Exceptions\RouteNotFoundException;
/* use App\Core\Request; */

// Chemin relatif SecurityController =>(dans ce cas on utilise Use) Use App\Controller\SecurityController;
// Chemin absolu App\Controller\SecurityController =>(dans ce cas on fait seulement) SecurityController::class;



// $request ->getUri();
// // dd($request ->isGet()); 
// dd($request ->isPost()); 



    // use App\Model\AC;
    // use App\Model\Personne;
    // use App\Model\Professeur;
    // use App\Model\User;

    // $ac=new AC();
    // $ac->setNomComplet('Barham niass');
    // $ac->setLogin('niass@gmail.com');
    // $ac->setPassword('niass11');
    // $ac->insert();
    // $ac=AC::findAll();

    // $users=User::findAll();
    // $userConnect=User::findUserLoginAndPassword("niasse@gmail.com","niass11");
    // dd($userConnect);
    
    
    



    
    







