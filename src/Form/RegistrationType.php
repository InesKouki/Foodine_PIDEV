<?php

namespace App\Form;

use App\Entity\User;
use Gregwar\CaptchaBundle\Type\CaptchaType;
use http\Message;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use function PHPUnit\Framework\equalTo;
use Symfony\Component\Validator\Constraints as Assert;


class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Nom',null,array(
                'attr' => array(
                     'placeholder' => 'Nom..',
                'required'=> true,
                    )))
            ->add('Prenom',null,array(
                'attr' => array(
                     'placeholder' => 'Prenom..')))
            ->add('Username',null,array(
                'attr' => array(
                     'placeholder' => 'Username..')))
            ->add('Email',null,array(
                'attr' => array(
                     'placeholder' => 'username@gmail.com..')))
            
            ->add('Password',PasswordType::class)
            ->add('Confirm_password',PasswordType::class)
            ->add('file', FileType::class, [
                'label' => 'Choisissez votre image' ,
                'mapped' => false,
                'required' => true


            ])->add('captcha', CaptchaType::class, array(
                'width' => 200,
                'height' => 50,
                'length' => 6,
            ));

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
