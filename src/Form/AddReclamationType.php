<?php

namespace App\Form;

use App\Entity\Reclamation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddReclamationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Description')
            ->add('Type',ChoiceType::class,[
                'choices' => [
                    'Livraison en retard' => "Livraison en retard",
                    'Commande erronée' => "Commande erronée",
                    'Autre' => "Autre",
                ],
                'expanded' => true,
                'multiple'=> false,
                'label' => 'Type'
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reclamation::class,
        ]);
    }
}
