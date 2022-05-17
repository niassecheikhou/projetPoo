<?php
namespace App\Core;
use App\Exceptions\RouteNotFoundException;

class Router{
    private Request $request;
    private array $routes=[];
    public function __construct()
    {
        $this->request = new Request;
    }
    // definir un tableau qui va contenir toutes les routes de notre application
    // fonction qui permet d'associer une uri a une action
    public function route(string $uri,array $action)
    {
        /* var_dump($this->routes[$uri]=$action); */
        $this->routes[$uri]=$action;
    }   
// permet de recuperer l'uri et de vérifier est ce que l'uri existe dans le tableau de route

    public function resolve()
    {
        $uri="/".$this->request->getUri()[0];
       
          // dd($uri);
          // on verifie est ce que l'uri existe dans le tableau de route
          if(isset($this->routes[$uri])){
            // pour dire que l'uri existe
             $route=($this->routes[$uri]);
             //operation de destruction  en php 
             [$crtClass,$action]=$route;

             // c'est pareil pour ecire:
            //  $crtClass=$route[0];
            //  $action=$route[1];
            // on test est l'existance de la classe et de l'action
            if (class_exists($crtClass) && method_exists($crtClass,$action)) {
              $crtl= new $crtClass($this->request);//$ctrl=new securityController()
            //   $crtl->{$action()};//$ctrl->authentification()
                call_user_func(array($crtl,$action));
            }else {
                throw new RouteNotFoundException();
            }
          }else{
            
            // pour dire que l'uri n'existe pas ie la page demander n'existe pas
            throw new RouteNotFoundException();

          }
    }
}