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

class AnnonceController extends Controller
{
    public function vehiculeAction(Request $request)
    {
        $formHandler = $this->get('annonce_handler');

        if($formHandler->processNewAnnonce()){
            $formHandler->getForm()->get('idAnnonce')->getData();
            $id = $formHandler->getForm()->get('idAnnonce')->getData();
            return $this->redirect($this->generateUrl("test_front_newVoiture", array("id" => $id)));
        }

        return $this->render('TestFrontBundle:Default:newAnnonce.html.twig', array(
            'form'    => $formHandler->getForm()->createView(),
        ));
    }
}


