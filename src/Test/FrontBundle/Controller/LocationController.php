<?php

namespace Test\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class LocationController extends Controller
{
    function provincesFrByRegionAction($idRegion)
    {
        $provinces = $this->getDoctrine()->getManager()->getRepository('TestFrontBundle:t_provincia')->findByidRegion($idRegion);
        $provincesJSON = array();
        foreach($provinces as $prov){ $provincesJSON[]=array('id'=> $prov->getId(), 'provinciaFr' => $prov->getProvinciaFr()); }
        return new Response(json_encode($provincesJSON));
    }

    function provincesArByRegionAction($idRegion)
    {
        $provinces = $this->getDoctrine()->getManager()->getRepository('TestFrontBundle:t_provincia')->findByidRegion($idRegion);
        $provincesJSON = array();
        foreach($provinces as $prov){ $provinciesJSON[]=array('id'=> $prov->getId(), 'provinciaAr' => $prov->getProvinciaAr()); }
        return new Response(json_encode($provincesJSON));
    }

    function villesFrByProvinceAction($idProvince)
    {
        $villes = $this->getDoctrine()->getManager()->getRepository('TestFrontBundle:t_ciudad')->findByidProvincia($idProvince);
        $villesJSON = array();
        foreach($villes as $ville){ $villesJSON[]=array('id'=> $ville->getId(), 'ciudadFr' => $ville->getCiudadFr(), 'extencion' => $ville->getExtencion()); }
        return new Response(json_encode($villesJSON));
    }

    function arrondissementsFrByVilleAction($idVille)
    {
        $arrondissements = $this->getDoctrine()->getManager()->getRepository('TestFrontBundle:t_distrito')->findByidCiudad($idVille);
        $arrondissementsJSON = array();
        foreach($arrondissements as $arrond){ $arrondissementsJSON[]=array('id'=> $arrond->getId(), 'distritoFr' => $arrond->getDistritoFr(), 'extencion' => $arrond->getExtencion()); }
        return new Response(json_encode($arrondissementsJSON));
    }

    function quartiersFrByArrondissementAction($idArrondissement)
    {
        $quarties = $this->getDoctrine()->getManager()->getRepository('TestFrontBundle:t_barrio')->findByidCiudad($idArrondissement);
        $quartiesJSON = array();
        foreach($quarties as $quartie){ $quartiesJSON[]=array('id'=> $quartie->getId(), 'barrioFr' => $quartie->getBarrioFr()); }
        return new Response(json_encode($quartiesJSON));
    }

}
