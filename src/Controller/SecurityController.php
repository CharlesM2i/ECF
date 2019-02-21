<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SecurityController extends AbstractController
{
    /**
     * @Route("/loginSecurity", name="loginSecurity")
     */
    public function login(\Symfony\Component\HttpFoundation\Request $request, 
            \Symfony\Component\Security\Http\Authentication\AuthenticationUtils $utils)
    {
        $error = $utils->getLastAuthenticationError();
        $lastUserName = $utils->getLastUsername();
        
        return $this->render('connexion/connexion.html.twig', [
            'error' => $error,
            'lastUserName' => $lastUserName
        ]);
    }
}
