<?php

namespace App\Form;

use App\Entity\Planning;
use App\Entity\Recette;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Image;
use Symfony\Component\Validator\Constraints\NotNull;

class RecetteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $imageConstraints = [
            new Image([
                'maxSize' => '5M'
            ])
        ];

        $evt = $builder->getData();


        if (!$evt->getImagerecette()) {
            $imageConstraints[] = new NotNull([
                'message' => 'Veuillez ajouter une image',
            ]);
        }
        $builder
            ->add('nom')
            ->add('description')
            ->add('imagerecette' , FileType::class, array(
                'constraints' => $imageConstraints,
                'mapped'=>false
            ))

            ->add('ingredient')
            ->add('planningid', EntityType::class ,
                ['class'=>Planning::class,
                    'choice_label'=>'nom',
                    'attr'=>array('class'=>'form-select')])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Recette::class,
        ]);
    }
}
