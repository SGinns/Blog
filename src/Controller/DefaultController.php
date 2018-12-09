<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    public function home()
    {
        return $this->render('home/view.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
}