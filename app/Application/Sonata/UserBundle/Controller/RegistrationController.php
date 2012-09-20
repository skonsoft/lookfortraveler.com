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

use \FOS\UserBundle\Controller\RegistrationController as BaseController;


/**
 * Controller managing the registration
 *
 * @author Thibault Duplessis <thibault.duplessis@gmail.com>
 * @author Christophe Coevoet <stof@notk.org>
 */
class RegistrationController extends BaseController
{
    public function registerFormAction()
    {
        $form = $this->container->get('fos_user.registration.form');
        return $this->container->get('templating')->renderResponse('ApplicationSonataUserBundle:Registration:registerForm.html.'.$this->getEngine(), array(
            'form' => $form->createView(),
        ));
    }
}
