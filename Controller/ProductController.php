<?php

namespace Curso\mainBundle\Controller;

use Curso\mainBundle\Form\Handler\ProductoHandler;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Curso\mainBundle\Entity\Producto;
use Curso\mainBundle\Form\Type\ProductoType;
use Symfony\Component\HttpFoundation\Request;

class ProductController extends Controller
{
	public function nuevoProductoAction(Request $request){
		$em = $this->getDoctrine()->getManager();
		$productos = $em->getRepository('CursomainBundle:Producto')->findAll();

		$formHandler = $this->get('producto_handler');

		if($formHandler->process()){ echo 'validado'; }

		return $this->render("CursomainBundle:Default:formulario.html.twig", array(
			"form" => $formHandler->getForm()->createView(),
			"productos" => $productos
		));

	}
}