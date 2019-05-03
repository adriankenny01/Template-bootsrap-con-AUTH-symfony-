<?php

namespace App\Form;

use App\Entity\User;

use Symfony\Component\Form\AbstractType;

use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array('attr' =>
            array('class' => 'form-control'), 'label' => false))
            ->add('last_name', TextType::class, array('attr' =>
            array('class' => 'form-control'), 'label' => false))
            // ->add('username', TextType::class, array('attr' =>
            // array('class' => 'form-control'),'label' => false))
            ->add('email', EmailType::class, array('attr' =>
            array('class' => 'form-control'),'label' => false))
            ->add('password', PasswordType::class, array('attr' =>
            array('class' => 'form-control'), 'label' => false));
            
            // ->add('save', SubmitType::class, array(
            //     'label' => 'Crear', 
            //     'attr'  => array('class' => 'btn btn-primary mt-3')
            // ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}