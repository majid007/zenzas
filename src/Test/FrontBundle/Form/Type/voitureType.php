<?php

namespace Test\FrontBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class voitureType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idAnnonce', 'hidden')
            ->add('idMarca', 'entity', array(
                    'required' => false,
                    'mapped' => false,
                    'empty_value'=>'Sélectionner une Marque ...',
                    'class'=>'TestFrontBundle:marcas_autos',
                    'choice_label'=>'description',
                )
            )
            ->add('Modelo', 'entity', array(
                    'required' => false,
                    'mapped' => false,
                    'empty_value'=>'Sélectionner un Modèle ...',
                    'class'=>'TestFrontBundle:modelo_auto',
                    'choices' => array(),
                )
            )
            ->add('idModelo','hidden')
            ->add('version', 'choice', array(
                    'choices'   => array('700'=>'799 cm³ ou moins','800'=>'800 - 899 cm³','900'=>'900 - 999 cm³','1000'=>'1000 - 1099 cm³','1100'=>'1100 - 1199 cm³','1200'=>'1200 - 1299 cm³','1300'=>'1300 - 1399 cm³','1400'=>'1400 - 1499 cm³','1500'=>'1500 - 1599 cm³','1600'=>'1600 - 1699 cm³','1700'=>'1700 - 1799 cm³','1800'=>'1800 - 1899 cm³','1900'=>'1900 - 1999 cm³','2000'=>'2000 - 2099 cm³','2100'=>'2100 - 2199 cm³','2200'=>'2200 - 2299 cm³','2300'=>'2300 - 2399 cm³','2400'=>'2400 - 2499 cm³','2500'=>'2500 - 2599 cm³','2600'=>'2600 - 2699 cm³','2700'=>'2700 - 2799 cm³','2800'=>'2800 - 2899 cm³','2900'=>'2900 - 2999 cm³','3000'=>'3000 - 3099 cm³','3100'=>'3100 - 3199 cm³','3200'=>'3200 - 3299 cm³','3300'=>'3300 - 3399 cm³','3400'=>'3400 - 3499 cm³','3500'=>'3500 - 3599 cm³','3600'=>'3600 - 3699 cm³','3700'=>'3700 - 3799 cm³','3800'=>'3800 - 3899 cm³','3900'=>'3900 - 3999 cm³','4000'=>'4000 - 4099 cm³','4100'=>'4100 - 4199 cm³','4200'=>'4200 - 4299 cm³','4300'=>'4300 - 4399 cm³','4400'=>'4400 - 4499 cm³','4500'=>'4500 - 4599 cm³','4600'=>'4600 - 4699 cm³','4700'=>'4700 - 4799 cm³','4800'=>'4800 - 4899 cm³','4900'=>'4900 - 4999 cm³','5000'=>'5000 cm³ ou plus'),
                    'required'  => false,
                    'empty_value'=>'Cylindrée en (cm³)',
                )
            )
            ->add('dFabrication', 'text', array('required' => false))
            ->add('dMatriculation', 'text', array('required' => false))
            ->add('km', 'choice', array(
                    'choices'   => array("0"=>"0 - 4 999 km","5000"=>"5 000 - 9 999 km","10000"=>"10 000 - 14 999 km","15000"=>"15 000 - 19 999 km","20000"=>"20 000 - 24 999 km","25000"=>"25 000 - 29 999 km","30000"=>"30 000 - 34 999 km","35000"=>"35 000 - 39 999 km","40000"=>"40 000 - 44 999 km","45000"=>"45 000 - 49 999 km","50000"=>"50 000 - 54 999 km","55000"=>"55 000 - 59 999 km","60000"=>"60 000 - 64 999 km","65000"=>"65 000 - 69 999 km","70000"=>"70 000 - 74 999 km","75000"=>"75 000 - 79 999 km","80000"=>"80 000 - 84 999 km","85000"=>"85 000 - 89 999 km","90000"=>"90 000 - 94 999 km","95000"=>"95 000 - 99 999 km","100000"=>"100 000 - 109 999 km","110000"=>"110 000 - 119 999 km","120000"=>"120 000 - 129 999 km","130000"=>"130 000 - 139 999 km","140000"=>"140 000 - 149 999 km","160000"=>"150 000 - 159 999 km","160000"=>"160 000 - 169 999 km","170000"=>"170 000 - 179 999 km","180000"=>"180 000 - 189 999 km","190000"=>"190 000 - 199 999 km","200000"=>"200 000 - 249 999 km","250000"=>"250 000 - 299 999 km","300000"=>"300 000 - 349 999 km","350000"=>"350 000 - 399 999 km","400000"=>"400 000 - 449 999 km","450000"=>"450 000 - 499 999 km","500000"=>"Plus de 500 000 km"),
                    'required'  => false,
                    'empty_value'=>'Kilométrage en (km)',
                )
            )
            ->add('idTransmission', 'entity', array(
                    'required' => false,
                    'empty_value'=>'Transmission',
                    'class'=>'TestFrontBundle:t_transmission',
                    'choice_label'=>'descripcionFr',
                )
            )
            ->add('puissance','integer', array('max_length'=>2))
            ->add('carburant', 'entity', array(
                    'required' => false,
                    'empty_value'=>'Carburant',
                    'class'=>'TestFrontBundle:t_combustible',
                    'choice_label'=>'descripcionFr',
                )
            )
            ->add('carrosserie', 'entity', array(
                    'required' => false,
                    'empty_value'=>'Carrosserie',
                    'class'=>'TestFrontBundle:t_carroceria_auto',
                    'choice_label'=>'descripcionFr',
                )
            )
            ->add('portes', 'choice', array(
                    'choices'   => array('3'=>'2 / 3','5'=>'4 / 5','7'=>'6 / 7','9'=>'Autres'),
                    'required'  => false,
                    'empty_value'=>'Portes',
                )
            )
            ->add('sieges','integer', array('max_length'=>2))
            ->add('colorExt')
            ->add('tapisserie')
            ->add('colorInt')
            ->add('aduana')
            ->add('etat')
            ->add('tVoiture')
            ->add('tMoteur')
            ->add('nbVitesses')
            ->add('nbCylindres')
            ->add('poids')
            ->add('consommation')
            ->add('consUrbain')
            ->add('consExtraUrbain')
            ->add('metallisee')
            ->add('securite')
            ->add('confort')
            ->add('infoDivertissement')
            ->add('autres')
            ->add('Guardar','submit')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class'=>'Test\FrontBundle\Entity\voiture',
        ));
    }

    /**
     * @return string
     */
    public function getName(){
        return 'voiture_form';
    }
}
