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
use Symfony\Component\HttpFoundation\Response;

class VoitureController extends Controller
{
    public function newVoitureAction(Request $request, $id)
    {
        /*
        $em = $this->getDoctrine()->getManager();
        $regions = $em->getRepository('TestFrontBundle:t_region')->findAll();
        */
        $formHandler = $this->get('voiture_handler');

        if($formHandler->process()){ echo 'validado'; }

        return $this->render('TestFrontBundle:Default:newVoiture.html.twig', array(
            'form2'    => $formHandler->getForm()->createView(),
            'id' => $id
            /*'regions' => $regions*/

        ));
    }
    function modelesByMarqueAction($idMarque)
    {
        $modeles = $this->getDoctrine()->getManager()->getRepository('TestFrontBundle:modelo_auto')->findByidMarca($idMarque);
        $modelesJSON = array();
        foreach($modeles as $modele){ $modelesJSON[]=array('id'=> $modele->getId(), 'modele' => $modele->getDescription()); }
        return new Response(json_encode($modelesJSON));
    }



}


