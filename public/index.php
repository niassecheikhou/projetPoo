<?php
// composseur en faissant de autoloding
ini_set("display_errors","ON");
ini_set("error_reporting", E_ALL);

require_once("../vendor/autoload.php");
require_once("../core/fonction.php");

     use App\Controller\SecurityController;
     use App\Controller\ClasseController;
    use App\Core\Request;
    use App\Core\Router;

     


$request =new Router();
$router->route('/login',[SecurityController::class,"authentication"]);
$router->route('/logout',[SecurityController::class,"deconnexion"]);

$router->route('/classes',[SecurityController::class,"ListerClasse"]);
$router->route('/classes/add',[SecurityController::class,"CreerClasse"]);

$router->resolve();

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
    
    
    



    
    







