<?php

namespace App\Form;

use App\Entity\Classroom;
use App\Entity\Evenement;
use App\Entity\Produit;
use App\Entity\Promotion;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PercentType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PromotionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('produit', EntityType::class, [
                    'class'=>Produit::class,
                    'choice_label'=>'name',
                    'attr' => array('class' => 'form-select')

                ]
            )
            ->add('evenement', EntityType::class, [
                    'class'=>Evenement::class,
                    'choice_label'=>'name',
                    'attr' => array('class' => 'form-select')
                ]
            )
            ->add('pourcentage', PercentType::class, [
                'attr' => array('class' => 'form-control'),
                'symbol' => false
    ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Promotion::class,
        ]);
    }
}
