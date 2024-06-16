<?php

namespace App\Form;

use App\Entity\Alumno;
use App\Form\PersonaType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

class AlumnoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titulo_sec',TextType::class,[
                'label' => 'Titulo Secundario',
                'attr' => ['class' => 'form-control']
            ])
            ->add('escuela_sec',TextType::class,[
                'label' => 'Escuela Secundaria',
                'attr' => ['class' => 'form-control']
            ])
            ->add('anio_egreso',NumberType::class,[
                'label' => 'Año de Egreso',
                'attr' => ['class' => 'form-control']
            ])
            ->add('persona',EntityType::class,[
                'class' => Persona::class,
                'query_builder' => function(EntityRepository $er) : QueryBuilder {
                    return $er->createQueryBuilder('p')
                    ->leftJoin('App\Entity\Alumno','a','WITH','p.id = a.persona')
                    ->leftJoin('App\Entity\Docente','d','WITH','p.id = d.persona')
                    ->where('a.persona IS NULL')
                    ->andWhere('d.persona IS NULL');
                },
                'choice_label' => function($persona){
                    return 'Nombre : ' . $persona->getNombre() . ' , '. 'Apellido :' . $persona->getApellido() . ' , ' . 'Dni :' . $persona->getDnipasaporte();
                },
                'attr' => ['class' => 'form-control']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Alumno::class,
        ]);
    }
}
