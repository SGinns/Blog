<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class JavaScriptTestingController extends AbstractController
{
    public function javaScriptHome()
    {
        return $this->render('JavaScriptTesting/view.html.twig', [
            'controller_name' => 'JavaScriptTestingController',
        ]);
    }
}
