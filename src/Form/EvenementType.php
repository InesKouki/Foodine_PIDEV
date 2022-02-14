<?php

namespace App\Form;

use App\Entity\Evenement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EvenementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('description', TextareaType::class, array (
                'attr' => array('class' => 'form-control') ))
            ->add('day',ChoiceType::class ,
                    array (
                    'attr' => array('class' => 'form-select') ,
                    'choices'  => [
                        'Lundi' => '1',
                        'Mardi' => '2',
                        'Mercredi' => '3',
                        'Jeudi' => '4',
                        'Vendredi' => '5',
                        'Samedi' => '6',
                        'Dimanche' => '7'
                    ]))
            ->add('dateDeb', DateType::class, array(
                'widget' => 'single_text',
                'html5' => true,
                'required' => true,
                'attr' => array('class' => 'form-control input-inline datepicker',
                    'data-provide' => 'datepicker',
                    'data-format' => 'dd-mm-yyyy',
                )))
            ->add('dateFin', DateType::class, array(
                'widget' => 'single_text',
                'html5' => true,
                'required' => true,
                'attr' => array('class' => 'form-control input-inline datepicker',
                    'data-provide' => 'datepicker',
                    'data-format' => 'dd-mm-yyyy',
                )))
            ->add('image',FileType::class,['mapped'=>false])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Evenement::class,
        ]);
    }
}
