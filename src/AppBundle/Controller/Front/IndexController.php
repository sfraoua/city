<?php

namespace AppBundle\Controller\Front;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Controller\FrontDefaultController;

class IndexController extends FrontDefaultController
{
     /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        
        return $this->render('front/index.html.twig', array());
    }
}
