<?php

namespace NXProject\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{
    public function indexAction()
    {
        return $this->render('NXProjectBlogBundle:Blog:index.html.twig');
    }
}
