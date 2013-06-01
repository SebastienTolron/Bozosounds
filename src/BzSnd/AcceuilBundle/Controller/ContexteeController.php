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

}
