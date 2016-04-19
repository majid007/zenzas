<?php
/**
 * Created by PhpStorm.
 * User: MAGID
 * Date: 18/03/2016
 * Time: 18:03
 */

namespace Curso\mainBundle\Form\Handler;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;

class ProductoHandler
{
    /**
     * @var Form
     */
    protected $form;
    /**
     * @var Request
     */
    protected $request;
    /**
     * @var
     */
    protected $em;

    /**
     * @param Form $form
     * @param Request $request
     * @param EntityManager $em
     */
    public function __construct(Form $form, Request $request, EntityManager $em){
        $this->form    = $form;
        $this->request = $request;
        $this->em      = $em;
    }

    /**
     * @return bool
     */
    public function process(){
        $this->form->handleRequest($this->request);

        if($this->request->isMethod('post') && $this->form->isValid()){
            $this->onSuccess();
            return true;
        }
        return false;
    }

    /**
     * @return Form
     */
    public function getForm(){
        return $this->form;
    }

    /**
     *
     */
    protected function onSuccess(){
        $this->em->persist($this->form->getData());
        $this->em->flush();
    }
}