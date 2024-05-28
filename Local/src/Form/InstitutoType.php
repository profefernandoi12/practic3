<?php

namespace App\Form;

use App\Entity\Instituto;
use App\Entity\Localidad;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class InstitutoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nombre',TextType::class,[
                'label' => 'Nombre',
                'attr' => ['class' => 'form-control']
            ])
            ->add('numero',TextType::class,[
                'label' => 'Número',
                'attr' => ['class' => 'form-control']
            ])
            ->add('url_instituto',TextType::class,[
                'label' => 'URL Instituto',
                'attr' => ['class' => 'form-control']
            ])
            ->add('tipo',TextType::class,[
                'label' => 'Tipo',
                'attr' => ['class' => 'form-control']
            ])
            ->add('email',EmailType::class,[
                'label' => 'Email',
                'attr' => ['class' => 'form-control']
            ])
            ->add('calle',TextType::class,[
                'label' => 'Calle',
                'attr' => ['class' => 'form-control']
            ])
            ->add('altura',TextType::class,[
                'label' => 'Altura',
                'attr' => ['class' => 'form-control']
            ])
            ->add('numero_cue',TextType::class,[
                'label' => 'Número de CUE',
                'attr' => ['class' => 'form-control']
            ])
            ->add('instituto',TextType::class,[
                'label' => 'Instituto',
                'attr' => ['class' => 'form-control']
            ])
            ->add('localidad',EntityType::class,[
                'class' => Localidad::class,
                'choice_label' => 'nombre',
                'attr' => ['class' => 'form-control']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Instituto::class,
        ]);
    }
}
