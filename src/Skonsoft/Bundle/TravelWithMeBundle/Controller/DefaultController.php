<?php

namespace Skonsoft\Bundle\TravelWithMeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SkonsoftTravelWithMeBundle:Default:index.html.twig');
    }
}
