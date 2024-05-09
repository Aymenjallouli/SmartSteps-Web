<?php

namespace App\Controller;

use App\Entity\Question;
use App\Form\ExtQuestionType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
//here1 *********************
use App\Repository\QuestionRepository;
use App\Repository\EvaluationRepository;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;

class QuestionController extends AbstractController
{
 
   
    #[Route('/workshop', name: 'app_index', methods: ['GET'])]
    public function index(QuestionRepository $questionRepository): Response
    {
        return $this->render('base.html.twig');
    }

    #[Route('/aboutme', name: 'app_aboutme', methods: ['GET'])]
    public function about1(QuestionRepository $questionRepository): Response
    {
        return $this->render('question/about.html.twig');
    }


//here1 *********************
    #[Route('/list', name: 'app_question_index', methods: ['GET'])]
    public function list(QuestionRepository $questionRepository): Response
    {
        return $this->render('question/show.html.twig', [
            'questions' => $questionRepository->findAll(),
        ]);
    }


    public function new(Request $request, QuestionRepository $questionRepository,EvaluationRepository $evaluationRepository,ManagerRegistry $manager, $id): Response
    {
        $evaluation = $evaluationRepository->find($id);
        $em = $manager->getManager();
        $question = new Question();
        $question->setEvaluation($evaluation);
        $form = $this->createForm(ExtQuestionType::class, $question);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
           // $questionRepository->save($question, true);
           $answers = $form->get('answers')->getData();
           $options = '';
           foreach($answers as $answer){
            $options=$options.','.$answer['content'];
            if($answer['correct']){$solution = $answer['content'];}
            }
            $options = substr($options, 1);
           $question->setOptions($options);
           $question->setSolution($solution);
           $em->persist($question);
           $em->flush();

            return $this->redirectToRoute('app_question_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('question/new.html.twig', [
            'question' => $question,
            'form' => $form,
        ]);
    }



    public function show(Question $question): Response
    {
        return $this->render('question/show.html.twig', [
            'question' => $question,
        ]);
    }

    public function edit(Request $request, Question $question, QuestionRepository $questionRepository,ManagerRegistry $manager): Response
    {
        $form = $this->createForm(QuestionType::class, $question);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $manager->getManager();
            $em->persist($question);
            $em->flush();

            return $this->redirectToRoute('app_question_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('question/edit.html.twig', [
            'question' => $question,
            'form' => $form,
        ]);
    }

    public function delete($id,ManagerRegistry $manager,Request $request, Question $question, QuestionRepository $questionRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$question->getId(), $request->request->get('_token'))) {
            
            $em = $manager->getManager();
        $question = $questionRepository->find($id);

        $em->remove($question);
        $em->flush();
        }

        return $this->redirectToRoute('app_question_index', [], Response::HTTP_SEE_OTHER);
    }
}
