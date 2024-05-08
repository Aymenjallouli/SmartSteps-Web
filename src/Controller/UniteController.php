<?php

namespace App\Controller;

use App\Entity\Unite;
use App\Form\UniteType;
use App\Repository\UniteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Component\HttpFoundation\HeaderUtils;

#[Route('/unite')]
class UniteController extends AbstractController
{
    #[Route('/', name: 'app_unite_index', methods: ['GET'])]
    public function index(Request $request, UniteRepository $uniteRepository): Response
    {
        $search = $request->query->get('search');
        $sort = $request->query->get('sort');
        
        // Utilisez la méthode findBySearchAndSort pour récupérer les résultats filtrés
        $unites = $uniteRepository->findBySearchAndSort($search, $sort);

        return $this->render('unite/index.html.twig', [
            'unites' => $unites,
            'currentSort' => $sort, // Passez le paramètre de tri actuel au modèle
        ]);
    }

    #[Route('/new', name: 'app_unite_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, ValidatorInterface $validator): Response
    {
        $unite = new Unite();
        $form = $this->createForm(UniteType::class, $unite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
       
            $errors = $validator->validate($unite);
            if (count($errors) > 0) {
                
            }

            $entityManager->persist($unite);
            $entityManager->flush();

            return $this->redirectToRoute('app_unite_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('unite/new.html.twig', [
            'unite' => $unite,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_unite_show', methods: ['GET'])]
    public function show(Unite $unite, EntityManagerInterface $entityManager, $id): Response
    {
        $unite = $entityManager->getRepository(Unite::class)->find($id);
        return $this->render('unite/show.html.twig', [
            'unite' => $unite,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_unite_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Unite $unite, EntityManagerInterface $entityManager, ValidatorInterface $validator, $id): Response
    {
        $unite = $entityManager->getRepository(Unite::class)->find($id);

        $form = $this->createForm(UniteType::class, $unite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
   
            $errors = $validator->validate($unite);
            if (count($errors) > 0) {
             
            }

            $entityManager->flush();

            return $this->redirectToRoute('app_unite_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('unite/edit.html.twig', [
            'unite' => $unite,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_unite_delete', methods: ['POST'])]
    public function delete(Request $request, Unite $unite, EntityManagerInterface $entityManager, $id): Response
    {
        $unite = $entityManager->getRepository(Unite::class)->find($id);

        if ($this->isCsrfTokenValid('delete'.$unite->getId(), $request->request->get('_token'))) {
            $entityManager->remove($unite);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_unite_index', [], Response::HTTP_SEE_OTHER);
 
 
    }



    #[Route('/{id}/pdf', name: 'app_unite_pdf', methods: ['GET'])]
    public function generatePdf(Unite $unite)
    {
        $options = new Options();
        $options->set('defaultFont', 'Arial');
        $dompdf = new Dompdf($options);
    
        $html = $this->renderView('unite/pdf.html.twig', [
            'unite' => $unite
        ]);
    
        $dompdf->loadHtml($html);
        $dompdf->render();
    
        $output = $dompdf->output();
        file_put_contents('unite'.$unite->getId().'.pdf', $output);
    
        // Envoyer le PDF en téléchargement
        $response = new Response($output);
        $disposition = HeaderUtils::makeDisposition(
            HeaderUtils::DISPOSITION_ATTACHMENT,
            'unite'.$unite->getId().'.pdf'
        );
        $response->headers->set('Content-Disposition', $disposition);
    
        return $response;
    }
}
