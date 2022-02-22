<?php

namespace App\Form;

use App\Entity\Table;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TableType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('numerotable')
            ->add('imagetable',FileType::class, [

                'label'=>'choisir ' ,
                'mapped'=>false
            ])
            ->add('nbplacetable')
            ->add('etat',ChoiceType::class,array('choices'=>array(
                'disponible'=>'disponible',
                'non disponible'=>'non_disponible',
            ),'expanded'=>true
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Table::class,
        ]);
    }
}
