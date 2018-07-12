<?php
require 'vendor/autoload.php';
use \Rossi56\controllers\ControllerContact;






class Router {

  private $contact;

  public function __construct() 
  {
    $this->contact = new ControllerContact;
    
    
  }

  

  /**
   * Traite une requête entrante
   *
   * @return void
   */
  public function routerReq() 
  {
    
    try 
    {
      if (isset($_GET['action']))
       {
        
        if ($_GET['action'] == 'Accueil') 
        {  
          
               require ('views/accueil.php');
           
        
        }
        elseif ($_POST['action'] == 'Contact') 
        {
          if(empty($_POST))
          {
            $this->contact->contact($email, $nom, $texte); 
          }
          else
          {
              extract($_POST);
              $this->contact->contact($email, $nom, $texte); 
          }          
                          
        }
       
            }
                else
                throw new \Exception("Erreur 404 -Page Introuvable");        
            }
      catch (\Exception $e) 
      {
        $errors = $e->getMessage();
        require('views/Accueil.php');
      }
    }
}

 
