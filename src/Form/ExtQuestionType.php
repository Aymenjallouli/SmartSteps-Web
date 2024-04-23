<?php

namespace App\Form;

use App\Entity\Question;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\ExecutionContextInterface;
use Symfony\Component\Validator\Context\ExecutionContext;
use Symfony\Component\Validator\Constraints\CallbackValidator;
use Symfony\Component\Validator\Constraints\Callback;
use App\Form\QuestionType;

class ExtQuestionType extends QuestionType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    { 
        $builder
        ->add('num')
        ->add('enonce')
        ->add('answers', CollectionType::class,[
            'entry_type' => AnswerType::class,
            'data' => [null,null,null,null],
            'allow_delete'=> true,
            
            'constraints' => array(
                new Callback(array($this, 'validateQuestion'))
            ),
            'mapped' => false
        ])
        ->add('save',SubmitType::class)
        ; 
        EvaluationType::$index++;
    }
    public function validateQuestion($answers, ExecutionContext $context) {
        $correct = 0;
        foreach ($answers as $answer) {
            if ($answer['correct']) {
                $correct++;
                if($correct==2) break;
            }
        }
        if ($correct!=1) {
            $context
            ->addViolation("Entrez une seule solution");
        }
    }
}