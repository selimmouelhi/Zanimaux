<?php

namespace PidevBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PidevBundle:Default:index.html.twig');
    }

    public function indexFrontAction()
    {
        return $this->render('PidevBundle:Front:index.html.twig');
    }

    public function indexBackAction()
    {
        return $this->render('PidevBundle:Back:index.html.twig');
    }

    public function loginAction(){
        return $this->render('@Pidev/login.html.twig');
    }
    public function afficherAction(){

        return $this->render('PidevBundle:Front:exemple_forum.html.twig');

    }
}
