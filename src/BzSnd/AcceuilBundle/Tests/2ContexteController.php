<?php
namespace BzSnd\AccueilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ContexteController extends Controller
{
    public function menuAction()
    {
		$menu = array();
		$menu[] = array('titre' => 'Accueil','route' => 'bzsnd_accueil');

		
        return $this->render(
			'BzSndAccueilBundle:Contexte:menu.html.twig',
			array(
				'menu' => $menu
			)
		);
    }
    
    
	
	/**
	* Méthode informationsAction
	*/



}
?>