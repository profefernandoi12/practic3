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
use Symfony\Component\Validator\Constraints\Range;


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
            ->add('libre', null, [
                'label' => 'Libre',
                'attr' => ['class' => 'form-control']
            ])
            ->add('nota1', NumberType::class, [
                'label' => 'Primera Nota',
                'attr' => ['class' => 'form-control'],
                'constraints' => [
                    new Range([
                        'min' => 1,
                        'max' => 10,
                        'minMessage' => 'Rango de notas entre 1 y 10',
                        'maxMessage' => 'Rango de notas entre 1 y 10'
                    ])
                ]
            ])
            ->add('nota2', NumberType::class, [
                'label' => 'Segunda Nota',
                'attr' => ['class' => 'form-control'],
                'constraints' => [
                    new Range([
                        'min' => 1,
                        'max' => 10,
                        'minMessage' => 'Rango de notas entre 1 y 10',
                        'maxMessage' => 'Rango de notas entre 1 y 10'
                    ])
                ]
            ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Cursada::class,
        ]);
    }
}
