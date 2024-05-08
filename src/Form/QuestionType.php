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

class QuestionType extends AbstractType
{
    public static $solution;
    private $option;

    public function buildForm(FormBuilderInterface $builder, array $options): void
    { 
        //echo('aaaaaaaaaaaaaaaaaaaaa');
        //echo(EvaluationType::$index);
        if(EvaluationType::$index<count(EvaluationType::$answers)&&EvaluationType::$answers!=null&&EvaluationType::$index!=-1){
            $this->option = explode(",", EvaluationType::$answers[EvaluationType::$index]);
            self::$solution = end($this->option);
        }    
       if(!isset($this->option)){$this->option=[ null,null,null,null];}
       // print_r($this->option);
        $builder
        ->add('num', TextType::class, ['disabled'=>!$options['isTeacher'], "label"=>false])
        ->add('enonce', TextType::class, ['disabled'=>!$options['isTeacher'],"label"=>false])
        ->add('o1', AnswerType::class, ['mapped'=>false,'answer'=>$this->option[0], 'isTeacher'=>$options['isTeacher']])
        ->add('o2', AnswerType::class, ['mapped'=>false,'answer'=>$this->option[1], 'isTeacher'=>$options['isTeacher']])
        ->add('o3', AnswerType::class, ['mapped'=>false,'answer'=>$this->option[2], 'isTeacher'=>$options['isTeacher']])
        ->add('o4', AnswerType::class, ['mapped'=>false,'answer'=>$this->option[3], 'isTeacher'=>$options['isTeacher']]);
        
        /*->add('answers', CollectionType::class,[
            'entry_type' => AnswerType::class,
            'entry_options' => $this->getEntryOptions(),
            'allow_add' => true, 
            'allow_delete'=> true,
            
            'constraints' => array(
                new Callback(array($this, 'validateQuestion'))
            ),
            'mapped' => false
        ])*/
        //echo($builder->get('num'));
       // echo("wwwwwwwwwwwwwwwwwwwwwwww");
        if($options['embedded']==false)
        ; 
        EvaluationType::$index++;
    }
    public function validateQuestion($o1, ExecutionContext $context) {
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
    


    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Question::class,
            'isTeacher' =>true,
            'embedded' =>false
        ]);
    }
}