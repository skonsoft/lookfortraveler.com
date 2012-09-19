<?php

namespace Skonsoft\Bundle\LookForTravelerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SkonsoftLookForTravelerBundle:Default:index.html.twig');
    }
}
