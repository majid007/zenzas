<?php
/**
 * Created by PhpStorm.
 * User: MAGID
 * Date: 16/03/2016
 * Time: 12:23
 */

namespace Curso\mainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Curso\mainBundle\Entity\Producto;
use Curso\mainBundle\Form\ProductoType;
use Symfony\Component\HttpFoundation\Request;

class InfoController extends Controller
{
    public function nosotrosAction($nombre, $apellidos, $nacimiento)
    {
        return new Response("<html><body>Mi pagina de info propia. mi nombre es ".$nombre." y mis apellidos :".$apellidos."</body></html>");
        //return $this->render('CursomainBundle:Default:ayuda.html.twig', array("tema" => $tema));
    }

    public function pagina_estaticaAction($pagina)
    {
        /*
        $response = $this->forward("CursomainBundle:Info:nosotros", array("nombre" => "Maj", "apellidos" => "Ber", "nacimiento" => "Nad" ));
        return $response;
        */

        if($pagina == "quienes_somos"){
            return $this->redirect($this->generateUrl("cursomain_info", array("pagina" => "donde")));
        }
        if($pagina == "quien" || $pagina == "donde")
        {
            return $this->render('CursomainBundle:Default:'.$pagina.'.html.twig', array());
        }else{
            throw $this->createNotFoundException("pagina no encontrada aq");
        }

    }

    public function nuevoProductoAction(){
        // create a task and give it some dummy data for this example
        $producto = new Producto();
        /*$producto->setNombre('Probando formulario');
        $producto->setPrecio(300);*/
        /*$form = $this->createFormBuilder($producto)
        ->add('nombre', 'text')
        ->add('precio', 'integer')
        ->add('guardar', 'submit')
        ->getForm();
        return $this->render('CursoMainBundle:Default:formulario.html.twig', array('form' => $form->createView(),
        ));*/
        $form = $this->createForm(new ProductoType());
        return $this->render("CursomainBundle:Default:formulario.html.twig", array(
            "form"=>$form->createView()
        ));

    }
}
