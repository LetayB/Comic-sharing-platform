<?php

namespace CSP\ComicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CSPComicBundle:Default:index.html.twig', array('name' => $name));
    }
}
