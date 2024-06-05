<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('email',EmailType::class,[
            'label' => 'Email',
            'attr' => ['class' => 'form-control']
        ])
        // ->add('roles')
        // ->add('password')
         ->add('nombre',TextType::class,[
            'label' => 'Nombre',
            'attr' => ['class' => 'form-control']
        ])
         ->add('apellido',TextType::class,[
            'label' => 'Apellido',
            'attr' => ['class' => 'form-control']
        ])

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
             'label'=>'* Roles',
             'attr' => ['class' => 'form-control']
         ])
         ->add('password', RepeatedType::class, array(
             'type' => PasswordType::class,
             'first_options'  => array('label' => '* Password','attr' => ['class' => 'form-control']),
             'second_options' => array('label' => '* Repetir Password','attr' => ['class' => 'form-control']),))

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
