<?php

namespace BzSnd\AcceuilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ContexteeController extends Controller
{
    /**
     * @Route("/menu")
     * @Template()
     */
    public function menuAction()
    {
		$menu = array();
		$menu[] = array('titre' => 'Accueil','route' => 'bz_snd_accueil');
                $menu[] = array('titre' => 'News','route' => 'bz_snd_news');
                $menu[] = array('titre' => 'Musique','route' => 'bz_snd_music');
                $menu[] = array('titre' => 'Le studio ','route' => 'bz_snd_news');
                $menu[] = array('titre' => 'Contact','route' => 'bz_snd_news');
                $menu[] = array('titre' => 'Artistes','route' => 'bz_snd_news');
              
		
        return $this->render(
			'BzSndAcceuilBundle:Contextee:menu.html.twig',
			array(
				'menu' => $menu
			)
		);
    }
    
    
    	/**
	* Méthode informationsAction
	*/
	public function informationsAction() {

		return $this->render(
			'BzSndAcceuilBundle:Contextee:informations.html.twig'
		);
	}
        
        public function basAction() {

		return $this->render(
			'BzSndAcceuilBundle:Contextee:bas.html.twig'
		);
	}
        
               
        
        public function contactAction() {

		return $this->render(
			'BzSndAcceuilBundle:Contextee:contact.html.twig'
		);
	}
        
           public function exemple1Action() {

		return $this->render(
			'BzSndAcceuilBundle:Contextee:contact.html.twig'
		);
	}
        
        
           public function exemple2Action() {

		return $this->render(
			'BzSndAcceuilBundle:Contextee:contact.html.twig'
		);
	}

}
