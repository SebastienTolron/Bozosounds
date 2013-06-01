<?php

namespace BzSnd\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/news" , name ="bz_snd_news")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
}
