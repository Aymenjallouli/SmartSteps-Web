<?php

namespace App\Form;

use App\Entity\Unite;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Cour;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class UniteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Num_unite', null, [
                'label' => 'Unit Number',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Enter unit number'],
            ])
            ->add('Titre', null, [
                'label' => 'Title',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Enter title'],
            ])
            ->add('Statut', ChoiceType::class, [
                'label' => 'Statut',
                'attr' => ['class' => 'form-control'],
                'choices' => [
                    'In Progress' => 'EnCours',
                    'To Do' => 'Afaire',
                    'Completed' => 'Terminé',
                ],
                'placeholder' => 'Select statut',
                'required' => true,
            ])
            ->add('Contenu', null, [
                'label' => 'Content',
                'attr' => ['class' => 'form-control', 'rows' => 6, 'placeholder' => 'Enter content'],
            ])
            ->add('id_Cour', EntityType::class, [
                'class' => Cour::class,
                'choice_label' => 'Matiere',
                'label' => 'Course',
                'attr' => ['class' => 'form-control'],
                'placeholder' => 'Select a course',
                'required' => true,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Unite::class,
        ]);
    }
}
