<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    public function home()
    {
        return $this->render('Home/view.html.twig', [
        ]);
    }

    public function aboutMe()
    {
        return $this->render('AboutMe/view.html.twig', [
        ]);
    }
}
