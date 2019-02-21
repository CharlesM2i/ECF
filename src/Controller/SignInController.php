<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class SignInController extends AbstractController
{
    /**
     * @Route("/signIn", name="signIn")
     */
    public function signIn()
    {
        return $this->render('signIn/signIn.html.twig', [
            'signInController' => 'SignInController',
        ]);
    }
}
