<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\{SubmitType, TextType, DateType, IntegerType, CheckboxType};


class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // FIXME: Ajouter les champs firstname, lastname, email, birthday

        $builder
            ->add('firstname', TextType::class)
            ->add('lastname', TextType::class)
            ->add('plainPassword', RepeatedType::class, array(
                'mapped' => false,
                'type' => PasswordType::class,
                'first_options'  => array('label' => 'Password'),
                'second_options' => array('label' => 'Repeat Password'),
            ))
            ->add('email', TextType::class)
            ->add('birthday', DateType::class)
            ->add('save', SubmitType::class, array('label' => 'creer'));

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        // FIXME: ajouter la configuration du form
    }
}
