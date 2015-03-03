<?php

// src/CSP/ComicBundle/Controller/IndexController.php

namespace CSP\ComicBundle\Controller;

use CSP\ComicBundle\Entity\Comic;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class IndexController extends Controller
{
    public function indexAction(Request $request)
    {
  		
      $content = $this->get('templating')->render('CSPComicBundle:Index:index.html.twig');
      return new Response($content);
    }

    public function uploadAction(Request $request)
	{
	    $comic = new Comic();
	    

	    $form = $this->createFormBuilder($comic)
	        ->add('title')
	        ->add('author')
	        ->add('file','file')
	        ->add('alt')
	        ->getForm()
	    ;


	    // On fait le lien Requête <-> Formulaire
	    // À partir de maintenant, la variable  contient les valeurs entrées dans le formulaire par le visiteur
	    $form->handleRequest($request);

	    // On vérifie que les valeurs entrées sont correctes
	    // (Nous verrons la validation des objets en détail dans le prochain chapitre)
	    if ($form->isValid()) {
	    	$comic->upload();
		      // On l'enregistre notre objet $advert dans la base de données, par exemple
		      $em = $this->getDoctrine()->getManager();
		      $em->persist($comic);
		      $em->flush();

		      $request->getSession()->getFlashBag()->add('notice', 'Comic bien enregistrée.');

		     return $this->render('CSPComicBundle:Index:new.html.twig', array(
            'form' => $form->createView(),
        ));
    	}

	    return $this->render('CSPComicBundle:Index:new.html.twig', array(
            'form' => $form->createView(),
        ));

	}

	public function fluxAction(){
		$repository = $this
		  ->getDoctrine()
		  ->getManager()
		  ->getRepository('CSPComicBundle:Comic')
		;

		$listComics = $repository->findAll();

		return $this->render('CSPComicBundle:Comic:flux.html.twig', array(
      // Tout l'intérêt est ici : le contrôleur passe
      // les variables nécessaires au template !
      'listComics' => $listComics
    ));

	}
}



















