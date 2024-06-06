<?php

namespace App\Form;

use App\Entity\Asignatura;
use App\Entity\Tecnicatura;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\Range;

class AsignaturaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nombre',TextType::class,[
                'label' => 'Nombre',
                'attr' => ['class' => 'form-control']
            ])
            ->add('anio', NumberType::class, [
                'label' => 'Año',
                'attr' => ['class' => 'form-control'],
                'constraints' => [
                    new Range([
                        'min' => 1,
                        'max' => 3, // Corrección aquí
                        'minMessage' => 'El año de cursada debe ser 1, 2 o 3' 
                    ])
                ]
            ])
            ->add('programa',TextType::class,[
                'label' => 'Programa',
                'attr' => ['class' => 'form-control']
            ])
            ->add('tecnicatura',EntityType::class,[
                'class' => Tecnicatura::class,
                'choice_label' => 'nombre',
                'attr' => ['class' => 'form-control']
            ])
            #->add('correlativas')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Asignatura::class,
        ]);
    }
}
