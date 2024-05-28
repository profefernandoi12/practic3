<?php

namespace App\Form;

use App\Entity\Comision;
use App\Entity\Turno;
use App\Entity\Tecnicatura;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ComisionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('anio',NumberType::class,[
                'label' => 'Año',
                'attr' => ['class' => 'form-control']
            ])
            ->add('comision',TextType::class,[
                'label' => 'Comision',
                'attr' => ['class' => 'form-control']
            ])
            ->add('turno',EntityType::class,[
                'class' => Turno::class,
                'choice_label' => 'descripcion',
                'attr' => ['class' => 'form-control']
            ])
            ->add('tecnicatura',EntityType::class,[
                'class' => Tecnicatura::class,
                'choice_label' => 'nombre',
                'attr' => ['class' => 'form-control']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Comision::class,
        ]);
    }
}
