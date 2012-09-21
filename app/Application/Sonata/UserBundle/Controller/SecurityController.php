<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Application\Sonata\UserBundle\Controller;

use \FOS\UserBundle\Controller\SecurityController as BaseController;

class SecurityController extends BaseController
{
    public function loginFormAction()
    {
        $csrfToken = $this->container->get('form.csrf_provider')->generateCsrfToken('authenticate');

        return $this->container->get('templating')->renderResponse("ApplicationSonataUserBundle:Security:loginForm.html.twig", array('csrf_token' => $csrfToken));
    }
    
    public function userNavbarAction()
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        return $this->container->get('templating')->renderResponse("ApplicationSonataUserBundle:Security:userNavbar.html.twig", array('user'=>$user) );
    }

}
