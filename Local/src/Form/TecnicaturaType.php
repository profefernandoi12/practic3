<?php

namespace App\Form;

use App\Entity\Tecnicatura;
use App\Entity\Modalidad;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class TecnicaturaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nombre',TextType::class,[
                'label' => 'Nombre',
                'attr' => ['class' => 'form-control']
            ])
            ->add('duracion',NumberType::class,[
                'label' => 'Duración',
                'attr' => ['class' => 'form-control']
            ])
            ->add('cantidad_asignaturas',NumberType::class,[
                'label' => 'Cantidad de Asignaturas',
                'attr' => ['class' => 'form-control']
            ])
            ->add('numero_resolucion',TextType::class,[
                'label' => 'Número de Resolución',
                'attr' => ['class' => 'form-control']
            ])
            ->add('modalidad',EntityType::class,[
                'class' => Modalidad::class,
                'choice_label' => 'descripcion',
                'attr' => ['class' => 'form-control']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Tecnicatura::class,
        ]);
    }
}
