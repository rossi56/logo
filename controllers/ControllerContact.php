<?php
namespace Rossi56\controllers;

use Projet5\controllers;
use \Rossi56\models\ContactManager;


/**
 * Contrôleur de la page de contact
 */
class ControllerContact
{
    private $contact;
   

    public function __construct()
    {
        $this->contact = new ContactManager;
      
    }


    /**
     * Fonction de la page de contact
     *
     * @param [type] $email
     * @param [type] $nom
     * @param [type] $texte
     * @return void
     */
    public function contact($email, $nom, $texte)
    {
        $contact = $this->contact->contact($email, $nom, $texte);
       
        

        $validation = true; 
    
        if(empty($nom) || empty($email) || empty($texte)) {
            $validation = false;
          
        }
    
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $validation = false;
       
        }
    
        if($validation) {
           
            $to = "rossi56@hotmail.fr";  
            $sujet = "Nouveau message de " . $nom ;
            $message = '
            <h1>Nouveau message de ' . $nom . '</h1>
            <h2>Adresse e-mail : ' . $email . '</h2>
            <p>' . nl2br($texte) . '</p>  
            ';
            //  retour à la ligne du texte enregistré
            $headers = 'From: ' . $nom .  '<' . $email . '>' . "\r\n"; 
            //retour à la ligne plusieurs headers
            $headers .= 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    
            mail($to, $sujet, $message, $headers);

            //Destruction des champs après envoi du formulaire, éviter qu'il soit envoyé plusieurs fois
            unset($_POST["nom"]);
            unset($_POST["email"]);
            unset($_POST["texte"]);
        }

        header ('Location: Accueil');
      
    }

}

