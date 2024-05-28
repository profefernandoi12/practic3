<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('email')
        // ->add('roles')
        // ->add('password')
         ->add('nombre')
         ->add('apellido')

         //rempllazo roles y pasword por lo siguiente:

         ->add('roles', ChoiceType::class, [
             'choices' => [
                 'Usuario'=> 'ROLE_USER',   
                 'Administrador'=> 'ROLE_SUPER_ADMIN',  #administrador con acceso total a todas las funciones
                 'Personal'=> 'ROLE_ADMIN', #usuarios como preceptores q no tendran acceso a todas las opciones
                 'Docente' => 'ROLE_DOCENTE',  #acceso a las funciones de docente
                 'Alumno' => 'ROLE_ALUMNO',  #acceo a los alumnos
             ],
             'expanded' => false,
             'multiple' => true,
             'label'=>'* Roles'
         ])
         ->add('password', RepeatedType::class, array(
             'type' => PasswordType::class,
             'first_options'  => array('label' => '* Password'),
             'second_options' => array('label' => '* Repetir Password'),))

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
