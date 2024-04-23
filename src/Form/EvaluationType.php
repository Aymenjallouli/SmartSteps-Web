<?php

namespace App\Form;

use App\Entity\Evaluation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EvaluationType extends AbstractType
{public static $b="";
    public static $index=-1;
    public static $answers;
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {self::$answers=$options['answers'];
        //echo('55555555555555555555555555555555');
        $builder
        ->add('titre', TextType::class, ['disabled'=>!$options['isTeacher']])
        ->add('dateLimite',DateType::class, ['label' => 'to be completed before','disabled'=>!$options['isTeacher']])
        ->add('duree', TextType::class, ['disabled'=>!$options['isTeacher']])
        ->add('questions', CollectionType::class, [
            'entry_type' => QuestionType::class,
            'entry_options' => ['isTeacher' => $options['isTeacher'], 'embedded'=>true],
            'allow_add' =>true,
            'allow_delete' =>true,
            'by_reference' => false,
            ])
        ->add('save',SubmitType::class)
        ;
}


    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Evaluation::class,
            'answers' => null,
            'isTeacher' =>true
        ]);
    }
}