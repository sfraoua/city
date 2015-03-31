<?php

namespace AppBundle\Controller\Front;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Controller\FrontDefaultController;

class CityController extends FrontDefaultController
{
     /**
     * @Route("/city/{slug}", name="city_page")
     */
    public function indexAction()
    {
        
        return $this->render('front/city.html.twig', array());
    }
}
