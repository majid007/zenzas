<?php
/**
 * Created by PhpStorm.
 * User: MAGID
 * Date: 10/03/2016
 * Time: 16:19
 */

namespace Test\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MotoController extends Controller
{
    public function motosAction()
    {
        return $this->render('TestFrontBundle:Default:index.html.twig');
    }

}


