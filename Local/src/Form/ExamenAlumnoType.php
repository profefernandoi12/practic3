<?php

namespace App\Form;

use App\Entity\ExamenAlumno;
use App\Entity\ExamenFinal;
use App\Entity\Cursada;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ExamenAlumnoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nota',NumberType::class,[
                'label' => 'Nota',
                'attr' => ['class' => 'form-control']
            ])
            ->add('tomo',TextType::class,[
                'label' => 'Tomo',
                'attr' => ['class' => 'form-control']
            ])
            ->add('folio',TextType::class,[
                'label' => 'Folio',
                'attr' => ['class' => 'form-control']
            ])
            ->add('examen_final',EntityType::class,[
                'class' => ExamenFinal::class,
                'choice_label' => 'asignatura.nombre',
                'attr' => ['class' => 'form-control']
            ])
            ->add('cursada',EntityType::class,[
                'class' => Cursada::class,
                'choice_label' => 'ciclolectivo',
                'attr' => ['class' => 'form-control']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ExamenAlumno::class,
        ]);
    }
}
