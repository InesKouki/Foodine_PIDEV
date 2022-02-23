<?php

namespace App\Form;

use App\Entity\Evenement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Image;
use Symfony\Component\Validator\Constraints\NotNull;

class EvenementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $imageConstraints = [
            new Image([
                'maxSize' => '5M'
            ])
        ];

        $evt = $builder->getData();


        if (!$evt->getImage()) {
            $imageConstraints[] = new NotNull([
                'message' => 'Veuillez ajouter une image',
            ]);
        }

        $builder
            ->add('name' ,TextType::class, array (
                'attr' => array('class' => 'form-control'),
                'data_class' => null,
                )
            )
            ->add('description', TextareaType::class, array (
                'attr' => array('class' => 'form-control') ))
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

            ->add('image',FileType::class, array (
                'constraints' => $imageConstraints,
                'mapped'=>false,
                'attr' => array('class' => 'form-control') ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Evenement::class,
        ]);
    }
}
