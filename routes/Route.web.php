<?php

use App\Core\Router;
use App\Controller\ClasseController;
use App\Controller\SecurityController;
use App\Exceptions\RouteNotFoundException;
// definition des routes => Ajout des routes dans le tableau
$router =new Router();
$router->route('/login',[SecurityController::class,"authentication"]);
$router->route('/logout',[SecurityController::class,"deconnexion"]);
$router->route('/classes',[ClasseController::class,"ListerClasse"]);
$router->route('/add-classes',[ClasseController::class,"CreerClasse"]);

try {
    //Essaie  de ressoudre la route => rechercher si la route setrouve dans le tableau
    $router->resolve();
} catch (RouteNotFoundException $ex) {
    //capture l'exception et affiche le
    echo $ex->message;
}