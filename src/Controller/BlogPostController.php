<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogPostController extends AbstractController
{
    public function blog()
    {
        return $this->render('Blog/view.html.twig', [
            'controller_name' => 'BlogPostController',
        ]);
    }
}
