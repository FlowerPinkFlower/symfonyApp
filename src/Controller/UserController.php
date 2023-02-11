<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/* Reéfléchir quel type de site internet on veut créer.
Site marchant
Blog
Qu'est ce que l'on veut montrer sur le site.
*/

/* Il faut créer deux status. Celui de l'administrateur qui aura accès à tout le site. 
L'utilisateut qui aura accès à la page d'accueil et à son compte.
Il faut gérer la création, la suppression et la modification d'un compte

Pour réserver l'accès exclusif à l'administrateur il faut rajouter un try and catch avec l'access role admin.
L'administrateur a accès à toutes les informations cependant le MDP doit être haché
Ex:Si une personne écrit directement dans la barre de recherche .../categorie il sera rediriger vers home. Ca se trouve dans le catch return home
*/

/* REGISTRATION CONTROLLER
De mémoire il permet la création d'un nouvel utilisateur.

*/


/* SECURITY CONTROLLER
De mémoire de sécuriser la connection et deconnection.
Il faut que le login fonctionne ne arrière plan donc l'activer dans tous les repository
*/

/* STORE CONTROLLER
Page d'accueil du site. Penser à mettre les conseils d'utilisations
Rajouter les réseaux sociaux si besoin
*/

class UserController extends AbstractController
{
    /**
     * @Route("/user", name="app_user")
     */
    public function index(): Response
    {
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }


    /**
     * @Route("/home", name="home")
     */
    public function home(): Response
    {
        return $this->render('base.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }
}
