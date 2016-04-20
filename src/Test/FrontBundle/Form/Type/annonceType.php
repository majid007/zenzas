<?php

namespace Test\FrontBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Test\FrontBundle\Form\Type\voitureType;


class annonceType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Region', 'entity', array(
                    'required' => false,
                    'mapped' => false,
                    'empty_value' => 'Sélectionner une Région ...',
                    'class' => 'TestFrontBundle:t_region',
                    'choice_label' => 'regionFr',
                )
            )
            ->add('Provincia', 'entity', array(
                    'required' => false,
                    'mapped' => false,
                    'empty_value' => 'Sélectionner une Province/Préfecture ...',
                    'class' => 'TestFrontBundle:t_provincia',
                    'choices' => array(),
                )
            )
            ->add('Ciudad', 'entity', array(
                    'required' => false,
                    'mapped' => false,
                    'empty_value' => 'Sélectionner une Ville ...',
                    'class' => 'TestFrontBundle:t_ciudad',
                    'choices' => array(),
                )
            )
            ->add('Distrito', 'entity', array(
                    'required' => false,
                    'mapped' => false,
                    'empty_value' => 'Sélectionner un Arrondissement ...',
                    'class' => 'TestFrontBundle:t_distrito',
                    'choices' => array(),
                )
            )
            ->add('Barrio', 'entity', array(
                    'required' => false,
                    'mapped' => false,
                    'empty_value' => 'Sélectionner un Quartier ...',
                    'class' => 'TestFrontBundle:t_barrio',
                    'choices' => array(),
                )
            )
            ->add('idAnnonce','hidden')
            ->add('idRegion','hidden')
            ->add('idProvincia','hidden')
            ->add('idCiudad','hidden')
            ->add('idDistrito','hidden')
            ->add('idBarrio','hidden')
            ->add('tVehicule','hidden')
            ->add('titre','text', array('required' => false))
            ->add('description','textarea', array('required' => false))
            ->add('prix','text', array('required' => false))
            ->add('negociable', 'checkbox', array('required' => false))
            ->add('idUser','hidden')
            ->add('visites','hidden')
            ->add('dCreation', 'date')
            ->add('hCreation', 'time')
            ->add('unix','hidden')
            ->add('photo1','file', array('required' => false))
            ->add('photo2','file', array('required' => false))
            ->add('photo3','file', array('required' => false))
            ->add('supprimer','hidden')
            ->add('ValiderVVoiture','submit', array("label"=>"CONTINUER" ))
            /*->add(
                $builder->create('id', 'voiture_form', array('mapped' => false,'by_reference' => true)) // ? => true or false
            )*/
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Test\FrontBundle\Entity\annonce'
        ));
    }

    /**
     * @return string
     */
    public function getName(){
        return 'annonce_form';
    }

}
