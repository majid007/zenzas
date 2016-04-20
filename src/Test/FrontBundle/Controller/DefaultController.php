<?php

namespace Test\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TestFrontBundle:Default:index.html.twig');
    }



    /*public function annoncesAction(Request $request)
    {
        //var_dump($request);
        return $this->render('TestFrontBundle:Default:annonces.html.twig');
    }

    public function vendreAction(Request $request)
    {
        return $this->render('TestFrontBundle:Default:vendre.html.twig');
    }

    public function acheterAction(Request $request)
    {
        return $this->render('TestFrontBundle:Default:acheter.html.twig');
    }

    public function louerAction(Request $request)
    {
        return $this->render('TestFrontBundle:Default:louer.html.twig');
    }*/
}
