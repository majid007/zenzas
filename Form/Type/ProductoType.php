<?php

namespace Curso\mainBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre','text', array('required'=> true))
            ->add('descripcion', 'text', array('required'=> true))
            ->add('precio','integer', array('required'=> true))
            ->add('precio2','integer', array('mapped'=> false))
            ->add('Guardar','submit')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Curso\mainBundle\Entity\Producto'
        ));
    }

    /**
     * @return string
     */
    public function getName(){
        return 'producto_form';
    }

}
