<?php

namespace App\Form;

use App\Entity\Cour;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Cour1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Matiere', null, [
                'label' => 'Subject Name',
                'attr' => [
                    'placeholder' => 'Enter Subject Name',
                    'class' => 'form-control'
                ]
            ])
            ->add('Date_Debut', DateType::class, [
                'label' => 'Start Date',
                'widget' => 'single_text',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('Date_Fin', DateType::class, [
                'label' => 'End Date',
                'widget' => 'single_text',
                'attr' => [
                    'class' => 'form-control'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Cour::class,
        ]);
    }
}
