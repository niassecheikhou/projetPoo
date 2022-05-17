<?php
namespace App\Core;



class Controller{
    protected Request $request;
    // on a fait une injection de la request dans le controller
    public function __construct(Request $request)
    {
        $this->request = $request;
    }
    // fonction qui permet de charcher une vue
    public function render(string $path, array $data=[])
    {
        $data["Constantes"]=Constantes::class;
        
        
        require_once(Constantes::ROOT()."templates/".$path);
    }


    public function redirectToRoute($uri) 
    {
        header("Location:".Constantes::WEB_ROOT.$uri);
    }
}