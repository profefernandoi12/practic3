<?php

namespace App\Form;

use App\Entity\Localidad;
use App\Entity\Provincia;
use App\Entity\Region;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class LocalidadType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nombre',TextType::class,[
                'label' => 'Nombre',
                'attr' => ['class' => 'form-control']
            ])
            ->add('codigo_postal',TextType::class,[
                'label' => 'Código Postal',
                'attr' => ['class' => 'form-control']
            ])
            ->add('provincia',EntityType::class,[
                'class' => Provincia::class,
                'choice_label' => 'descripcion',
                'attr' => ['class' => 'form-control']
            ])
            ->add('region',EntityType::class,[
                'class' => Region::class,
                'choice_label' => 'numero',
                'attr' => ['class' => 'form-control']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Localidad::class,
        ]);
    }
}
