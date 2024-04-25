<?php

namespace App\Controller;

use App\Entity\Evaluation;
use App\Form\EvaluationType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
//here1 *********************
use App\Repository\EvaluationRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Collections\ArrayCollection;

#[Route('/teacher/evaluation')]
class TeacherEvaluationController extends AbstractController
{
    public static $t='bitatch';

//here1 *********************
    #[Route('/', name: 'teacher_evaluation_index', methods: ['GET'])]
    public function index(EvaluationRepository $evaluationRepository): Response
    {
        return $this->render('teacher/evaluation/index.html.twig', [
            'evaluations' => $evaluationRepository->findAll(),
        ]);
    }


    #[Route('/new', name: 'teacher_evaluation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EvaluationRepository $evaluationRepository,ManagerRegistry $manager): Response
    {
        $em = $manager->getManager();
        $evaluation = new Evaluation();
        $ans=[];
        $form = $this->createForm(EvaluationType::class, $evaluation, ['answers'=>$ans]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $questions = $form->get('questions');
            $options = '';
            $rquestions=$evaluation->getQuestions();
            $i=0;
            foreach($questions as $question){
             $data=$question->get('o1')->get('content')->getData();
             //echo('mama'.$data);
             $options=$question->get('o1')->get('content')->getData().','.$question->get('o2')->get('content')->getData().','.$question->get('o3')->get('content')->getData().','.$question->get('o4')->get('content')->getData();
             $rquestions[$i]->setOptions($options);
             if($question->get('o1')->get('correct')->getData()){$rquestions[$i]->setSolution($question->get('o1')->get('content')->getData());}
             else if($question->get('o2')->get('correct')->getData()){$rquestions[$i]->setSolution($question->get('o2')->get('content')->getData());}
             else if($question->get('o3')->get('correct')->getData()){$rquestions[$i]->setSolution($question->get('o3')->get('content')->getData());}
             else if($question->get('o4')->get('correct')->getData()){$rquestions[$i]->setSolution($question->get('o4')->get('content')->getData());}
             $i++;
             }
             $evaluation->setNbQuestions($i);
           // $evaluationRepository->save($evaluation, true);
           $em->persist($evaluation);
           $em->flush();

            return $this->redirectToRoute('teacher_evaluation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('teacher/evaluation/new.html.twig', [
            'evaluation' => $evaluation,
            'form' => $form,
        ]);
    }



    #[Route('/{id}', name: 'teacher_evaluation_show', methods: ['GET'])]
    public function show(Evaluation $evaluation): Response
    {
        return $this->render('teacher/evaluation/show.html.twig', [
            'evaluation' => $evaluation,
        ]);
    }

    #[Route('{id}/edit', name: 'teacher_evaluation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Evaluation $evaluation, EvaluationRepository $evaluationRepository,ManagerRegistry $manager, $id): Response
    {
        
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
        $form = $this->createForm(EvaluationType::class, $evaluation, ['answers'=>$ans]);
        $form->handleRequest($request);

        if ($form->isSubmitted()&& $form->isValid()) {
            $questions = $form->get('questions');
           $options = '';
           $rquestions=$evaluation->getQuestions();
           $i=0;
           foreach($questions as $question){
            if( $rquestions[$i]!=null){
            $data=$question->get('o1')->get('content')->getData();
            //echo('mama'.$data);
            $options=$question->get('o1')->get('content')->getData().','.$question->get('o2')->get('content')->getData().','.$question->get('o3')->get('content')->getData().','.$question->get('o4')->get('content')->getData();
            //echo("4444444444444444444444444444".','.(count($rquestions)));
            $rquestions[$i]->setOptions($options);
            if($question->get('o1')->get('correct')->getData()){$rquestions[$i]->setSolution($question->get('o1')->get('content')->getData());}
            else if($question->get('o2')->get('correct')->getData()){$rquestions[$i]->setSolution($question->get('o2')->get('content')->getData());}
            else if($question->get('o3')->get('correct')->getData()){$rquestions[$i]->setSolution($question->get('o3')->get('content')->getData());}
            else if($question->get('o4')->get('correct')->getData()){$rquestions[$i]->setSolution($question->get('o4')->get('content')->getData());}
            $i++;
            //echo($i);
            }}
            $em = $manager->getManager();
            foreach ($originalQuestions as $question) {
                if (false === $evaluation->getQuestions()->contains($question)) {
                    // remove the Task from the Tag
                    

                    // if it was a many-to-one relationship, remove the relationship like this
                    $question->setEvaluation(null);

                    $em->persist($question);
                    $em->remove($question);
                }}
                $evaluation->setNbQuestions($i);
            $em->persist($evaluation);
            $em->flush();

            return $this->redirectToRoute('teacher_evaluation_index', [], Response::HTTP_SEE_OTHER);
        
        }
        return $this->renderForm('teacher/evaluation/edit.html.twig', [
            'evaluation' => $evaluation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'teacher_evaluation_delete', methods: ['POST'])]
    public function delete($id,ManagerRegistry $manager,Request $request, Evaluation $evaluation, EvaluationRepository $evaluationRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$evaluation->getId(), $request->request->get('_token'))) {
            
            $em = $manager->getManager();
        $evaluation = $evaluationRepository->find($id);

        $em->remove($evaluation);
        $em->flush();
        }

        return $this->redirectToRoute('teacher_evaluation_index', [], Response::HTTP_SEE_OTHER);
    }
}
