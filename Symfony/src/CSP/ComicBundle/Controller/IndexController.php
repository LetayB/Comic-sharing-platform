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

    public function comicsAction(Request $request)
    {
  		$repository = $this
		  ->getDoctrine()
		  ->getManager()
		  ->getRepository('CSPComicBundle:Comic')
		;

		$listComics = $repository->findAll();

		return $this->render('CSPComicBundle:Comic:comics.html.twig', array(
      // Tout l'intérêt est ici : le contrôleur passe
      // les variables nécessaires au template !
      'listComics' => $listComics
    ));
    }

  

	

    


    public function uploadAction(Request $request)
	{
	    $comic = new Comic();

	    $user = $this->getUser();



	    $comic->setAuthor($user->getId());
	    

	    $form = $this->createFormBuilder($comic)
	        ->add('title')
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
	    	$comic->preUpload();
		      // On l'enregistre notre objet $advert dans la base de données, par exemple
		      $em = $this->getDoctrine()->getManager();
		      $em->persist($comic);
		      $em->flush();

		      $comic->upload();

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

	public function personnalAction(){
		$repository = $this
		  ->getDoctrine()
		  ->getManager()
		  ->getRepository('CSPComicBundle:Comic')
		;

		$listComics = $repository->findBy(
		  array('author' => $this->getUser()->getId()), // Critere
		  array('id' => 'desc'),        // Tri
		  20,                              // Limite
		  0                               // Offset
		);


		return $this->render('CSPComicBundle:Comic:personnal.html.twig', array(
      // Tout l'intérêt est ici : le contrôleur passe
      // les variables nécessaires au template !
      'listComics' => $listComics
    ));

	}


	public function comicAction($id){
		$repository = $this
		  ->getDoctrine()
		  ->getManager()
		  ->getRepository('CSPComicBundle:Comic')
		;

		$listComics = $repository->findBy(
		  array('id' => $id), // Critere
		  array('id' => 'desc'),        // Tri
		  1,                              // Limite
		  0                               // Offset
		);


		return $this->render('CSPComicBundle:Comic:comic.html.twig', array(
      // Tout l'intérêt est ici : le contrôleur passe
      // les variables nécessaires au template !
      'listComics' => $listComics
    ));

	}


}



















