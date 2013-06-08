<?php

namespace BzSnd\MusicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/music/", name = "bz_snd_music")
     * @Template()
     */
    public function indexAction()
    {
        return array ();
    }
}
