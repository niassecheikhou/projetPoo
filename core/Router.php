<?php
namespace App\Core;

class Router{
    private Request $request;
    public function __construct()
    {
        $this->request = new Request;
    }
    // definir un tableau qui va contenir toutes les routes de notre application
    private array $routes=[];
    // fonction qui permet d'associer une uri a une action
    public function route(string $uri,array $action)
    {
        $this->routes[$uri]=$action;
    }   
// permet de recuperer l'uri et de vérifier est ce que l'uri existe dans le tableau de route

    public function resolve()
    {
        $uri= $this->request->getUri();
        dd($uri);
    }
}