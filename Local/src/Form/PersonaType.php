<?php

namespace App\Form;

use App\Entity\Persona;
use App\Entity\Pais;
use App\Entity\Localidad;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;



class PersonaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nombre',TextType::class,[
                'label' => 'Nombre',
                'attr' => ['class' => 'form-control']
            ])
            ->add('apellido',TextType::class,[
                'label' => 'Apellido',
                'attr' => ['class' => 'form-control']
            ])
            ->add('fecha_nacimiento')
            ->add('dni_pasaporte',TextType::class,[
                'label' => 'Dni o Pasaporte',
                'attr' => ['class' => 'form-control']
            ])
            ->add('genero',TextType::class,[
                'label' => 'Género',
                'attr' => ['class' => 'form-control']
            ])
            ->add('email',EmailType::class,[
                'label' => 'Email',
                'attr' => ['class' => 'form-control']
            ])
            ->add('telefono',TextType::class,[
                'label' => 'Teléfono',
                'attr' => ['class' => 'form-control']
            ])
            ->add('partido',TextType::class,[
                'label' => 'Partido',
                'attr' => ['class' => 'form-control']
            ])
            ->add('calle',TextType::class,[
                'label' => 'Calle',
                'attr' => ['class' => 'form-control']
            ])
            ->add('numero',TextType::class,[
                'label' => 'Número',
                'attr' => ['class' => 'form-control']
            ])
            ->add('piso',NumberType::class,[
                'label' => 'Piso',
                'attr' => ['class' => 'form-control']
            ])
            ->add('departamento',TextType::class,[
                'label' => 'Departamento',
                'attr' => ['class' => 'form-control']
            ])
            ->add('pasillo',TextType::class,[
                'label' => 'Pasillo',
                'attr' => ['class' => 'form-control']
            ])
            ->add('pais',EntityType::class,[
                'class' => Pais::class,
                'choice_label' => 'descripcion',
                'attr' => ['class' => 'form-control']
            ])
            ->add('localidad',EntityType::class,[
                'class' => Localidad::class,
                'choice_label' => 'nombre',
                'attr' => ['class' => 'form-control']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Persona::class,
        ]);
    }
}
