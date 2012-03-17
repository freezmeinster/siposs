<?php

namespace Siposs\StaticBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('SipossStaticBundle::under.html.twig');
    }
}
