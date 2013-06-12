<?php
namespace BzSnd\AcceuilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class LibraryController extends Controller
{
    public function jqueryAction()
    {
        return $this->render(
			'BzSndAcceuilBundle:Library:jquery.html.twig',
			array()
		);
    }
}
?>