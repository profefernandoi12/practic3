<?php

namespace App\Form;

use App\Entity\ExamenFinal;
use App\Entity\Asignatura;
use App\Entity\Docente;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ExamenFinalType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('fecha')
            ->add('asignatura',EntityType::class,[
                'class' => Asignatura::class,
                'choice_label' => 'nombre',
                'attr' => ['class' => 'form-control']
            ])
            ->add('presidente',EntityType::class,[
                'class' => Docente::class,
                'choice_label' => 'persona.nombre',
                'attr' => ['class' => 'form-control']
            ])
            ->add('vocal1',EntityType::class,[
                'class' => Docente::class,
                'choice_label' => 'persona.nombre',
                'attr' => ['class' => 'form-control']
            ])
            ->add('vocal2',EntityType::class,[
                'class' => Docente::class,
                'choice_label' => 'persona.nombre',
                'attr' => ['class' => 'form-control']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ExamenFinal::class,
        ]);
    }
}
