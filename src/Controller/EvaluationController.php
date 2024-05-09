<?php

namespace App\Controller;

use App\Entity\Evaluation;
use App\Entity\Note;
use App\Form\EvaluationType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
//here1 *********************
use App\Repository\EvaluationRepository;
use App\Repository\NoteRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Collections\ArrayCollection;

#[Route('/evaluation')]
class EvaluationController extends AbstractController
{
    public static $t='bitatch';

//here1 *********************
    #[Route('/', name: 'app_evaluation_index', methods: ['GET'])]
    public function index(EvaluationRepository $evaluationRepository): Response
    {
        return $this->render('evaluation/index.html.twig', [
            'evaluations' => $evaluationRepository->findAll(),
        ]);
    }


 

    #[Route('/{id}', name: 'app_evaluation_pass', methods: ['GET', 'POST'])]
    public function pass(Request $request, Evaluation $evaluation, EvaluationRepository $evaluationRepository,ManagerRegistry $manager, $id): Response
    {
        

        // Create an ArrayCollection of the current Tag objects in the database
        $evaluation = $evaluationRepository->find($id);
        $objectB = clone $evaluation;

        $originalQuestions = new ArrayCollection();

        // Create an ArrayCollection of the current Tag objects in the database
        $evaluation = $evaluationRepository->find($id);
        foreach ($evaluation->getQuestions() as $question) {
            $originalQuestions->add($question);
        }  
        
       $answers = $evaluation->getQuestions();
       $ans=[];
       $i=0;
        foreach($answers as $question)
        {
            $ans[$i]=$question->getOptions().','.$question->getSolution();
            $i++;
        }
        //echo($i.'bbbbbb');
        $form = $this->createForm(EvaluationType::class, $evaluation, ['answers'=>$ans, 'isTeacher'=>false]);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $questions = $form->get('questions');
           $options = '';
           $i=0;
           $rquestions=$evaluation->getQuestions();
           $score=0;
           foreach($questions as $question){
            if( $rquestions[$i]!=null){
            $options=explode(',', $rquestions[$i]->getOptions());
            if($question->get('o1')->get('correct')->getData()&& $options[0]==$rquestions[$i]->getSolution()){$score++;}
            else if($question->get('o2')->get('correct')->getData()&& $options[1]==$rquestions[$i]->getSolution()){$score++;}
            else if($question->get('o3')->get('correct')->getData()&& $options[2]==$rquestions[$i]->getSolution()){$score++;}
            else if($question->get('o4')->get('correct')->getData()&& $options[3]==$rquestions[$i]->getSolution()){$score++;}
            $i++;
            //echo($i);
            }}
            $note = new Note();
            $note->setIdEvaluation(1);
            $note->setIdEtudiant(20);
            $note->setNote($score/$i*100);
            $em = $manager->getManager();
            
            $em->persist($note);
            $em->flush();

            return $this->redirectToRoute('app_evaluation_index', [], Response::HTTP_SEE_OTHER);
        
        }
        return $this->renderForm('evaluation/_form.html.twig', [
            'evaluation' => $evaluation,
            'form' => $form,
        ]);
    }
}
