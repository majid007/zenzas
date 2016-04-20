<?php
/**
 * Created by PhpStorm.
 * User: MAGID
 * Date: 21/03/2016
 * Time: 15:58
 */

namespace Test\FrontBundle\Form\Handler;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;

class VehiculeHandler
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
     * @return bool
     */
    public function processNewAnnonce(){
        $this->form->handleRequest($this->request);
        if($this->request->isMethod('post') && $this->form->isValid()){
            if(($this->form->get('photo1')->getData()) != null){$this->loadImg('photo1');}
            if(($this->form->get('photo2')->getData()) != null){$this->loadImg('photo2');}
            if(($this->form->get('photo3')->getData()) != null){$this->loadImg('photo3');}

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

    /**
     * @param $ref
     */
    private function loadImg($ref){
        $validFileType = array('jpg','jpeg','gif','png','bmp');
        $idAnnunce = $this->form->get('idAnnonce')->getData();
        $image = $this->form->get($ref)->getData();
        $ext = $image->guessExtension();
        if(in_array(strtolower($ext), $validFileType) && isset($ext)){
            if($ref == 'photo1'){
                $imageName = 'f1-'.$idAnnunce.'.'.$ext;
                $this->form->getData()->setPhoto1($imageName);
            }
            if($ref == 'photo2'){
                $imageName = 'f2-'.$idAnnunce.'.'.$ext;
                $this->form->getData()->setPhoto2($imageName);
            }
            if($ref == 'photo3'){
                $imageName = 'f3-'.$idAnnunce.'.'.$ext;
                $this->form->getData()->setPhoto3($imageName);
            }
            $image->move('uploads',$imageName);
        }
        //$x = $this->form->get('photo1')->getData()->getSize();
    }
}