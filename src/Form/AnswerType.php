<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class AnswerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('content',TextType::class, [
            'disabled'=>!$options['isTeacher'],
            'data'=>$options['answer'], 
            'constraints' => [
                new NotBlank(),
            ],
        ])
        ->add('correct', CheckboxType::class, ['data' => $this->checksolution($options), 'label'=>false])
        ;
       
    }
    public function checksolution($options){
        if($options['isTeacher'] && $options['answer']!=null && $options['answer'] == QuestionType::$solution)
        return true;
        else return false;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'answer' => null,
            'isTeacher'=>true
        ]);
    }
}