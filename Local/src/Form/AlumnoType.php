<?php

namespace App\Form;

use App\Entity\Alumno;
use App\Form\PersonaType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class AlumnoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titulo_sec',TextType::class,[
                'label' => 'Titulo Secundario',
                'attr' => ['class' => 'form-control']
            ])
            ->add('escuela_sec',TextType::class,[
                'label' => 'Escuela Secundaria',
                'attr' => ['class' => 'form-control']
            ])
            ->add('anio_egreso',NumberType::class,[
                'label' => 'Año de Egreso',
                'attr' => ['class' => 'form-control']
            ])
            ->add('persona',PersonaType::class,[
                'label' => false
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Alumno::class,
        ]);
    }
}
