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

class BateauController extends Controller
{
    public function bateauxAction()
    {
        return $this->render('TestFrontBundle:Default:index.html.twig');
    }

}


