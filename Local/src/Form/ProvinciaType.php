<?php

namespace App\Form;

use App\Entity\Provincia;
use App\Entity\Pais;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ProvinciaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('descripcion',TextType::class,[
                'label' => 'Descripcion',
                'attr' => ['class' => 'form-control']
            ])
            ->add('pais',EntityType::class,[
                'class' => Pais::class,
                'choice_label' => 'descripcion',
                'attr' => ['class' => 'form-control']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Provincia::class,
        ]);
    }
}
