<?php

namespace App\Form;

use App\Entity\Cursada;
use App\Entity\Alumno;
use App\Entity\Comision;
use App\Entity\Asignatura;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class CursadaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('ciclo_lectivo',NumberType::class,[
                'label' => 'Ciclo Lectivo',
                'attr' => ['class' => 'form-control']
            ])
            ->add('alumno',EntityType::class,[
                'class' => Alumno::class,
                'choice_label' => 'persona.nombre',
                'attr' => ['class' => 'form-control']
            ])
            ->add('comision',EntityType::class,[
                'class' => Comision::class,
                'choice_label' => 'comision',
                'attr' => ['class' => 'form-control']
            ])
            ->add('asignatura',EntityType::class,[
                'class' => Asignatura::class,
                'choice_label' => 'nombre',
                'attr' => ['class' => 'form-control']
            ])
            ->add('libre')
            ->add('nota1',NumberType::class,[
                'label' => 'Primera Nota',
                'attr' => ['class' => 'form-control']
            ])
            ->add('nota2',NumberType::class,[
                'label' => 'Segundo Nota',
                'attr' => ['class' => 'form-control']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Cursada::class,
        ]);
    }
}
