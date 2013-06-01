<?php

namespace BzSnd\AcceuilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/" , name="bz_snd_accueil")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
}
