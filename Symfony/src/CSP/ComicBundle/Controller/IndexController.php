<?php

// src/CSP/ComicBundle/Controller/IndexController.php

namespace CSP\ComicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class IndexController extends Controller
{
    public function indexAction()
    {
      $content = $this->get('templating')->render('CSPComicBundle:Index:index.html.twig');
      return new Response($content);
    }
}