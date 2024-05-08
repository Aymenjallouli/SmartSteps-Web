<?php

namespace App\Controller;
use App\Entity\Evaluation;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\EvaluationRepository;


#[Route('/calendar')]
class EvaluationCaldendarController extends AbstractController
{
    #[Route('/', name: 'app_evaluation_caldendar')]
    public function index(EvaluationRepository $evaluationRepository): Response
    {
        $events = $evaluationRepository->findAll();
        $evals = [];
        foreach($events as $event){
            $evals[] = [
                'title' => $event->getTitre(), 
                'start' => $event->getDateLimite()->format('Y-m-d'), 
                'end' => $event->getDateLimite()->format('Y-m-d'),
                'description' => 'Nb questions: '.strval($event->getNbQuestions()).' Duree: '.strval($event->getDuree() ),
                'backgroundColor' => '#89CFF0',
                'allDay' => true,

 
            ];
        }
        $data = json_encode($evals);
        return $this->render('evaluation_caldendar/index.html.twig', compact('data')
        );
    }
}
