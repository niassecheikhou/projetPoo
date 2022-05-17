<?php
namespace App\Controller;

use App\Core\Request;
use App\Core\Controller;

class SecurityController extends Controller{
   
    //fonction qui permet de se connecter
    public function authentication()
    {
    
        // 1 :l'affichage du formulaire de connexion qui est une method GET
        if ($this->request->isGet()){
            // dd('je suis dans le controller security dans l\'action authentification');
            $this->render("security/login.html.php");
             
            }
        // 2 : le traitement apres soumission du formulaire qui est une requette Post
    }
     //fonction qui permet de se deconnecter
     public function deconnexion()
     {
        //dd('je suis dans le controller security dans l\'action deconnecxion');
        $this->redirectToRoute("login");
        
     }
}