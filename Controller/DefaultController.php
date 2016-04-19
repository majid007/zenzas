<?php

namespace Curso\mainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CursomainBundle:Default:index.html.twig');
    }

    public function ayudaAction($tema)
    {
        //return new Response("<html><body> esa es una ayuda sobre el tema : ".$tema.".</body></html>");
        return $this->render('CursomainBundle:Default:ayuda.html.twig', array("tema" => $tema));
    }
}
