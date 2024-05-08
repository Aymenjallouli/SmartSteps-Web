<?php

namespace App\Controller;

use App\Entity\Cour;
use App\Entity\Unite;
use App\Form\UniteType;
use App\Form\Cour1Type;
use App\Repository\CourRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\TwilioService;

#[Route('/cour')]
class CourController extends AbstractController
{
    #[Route('/', name: 'app_cour_index', methods: ['GET'])]
    public function index(Request $request, CourRepository $courRepository): Response
    {
        $search = $request->query->get('search');
        $sort = $request->query->get('sort');

        // Récupérer les cours en fonction de la recherche et du tri
        $cours = $courRepository->findBySearchAndSort($search, $sort);

        return $this->render('cour/index.html.twig', [
            'cours' => $cours,
        ]);
    }

    #[Route('/new', name: 'app_cour_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, TwilioService $twilioService): Response
    {
        $cour = new Cour();
        $form = $this->createForm(Cour1Type::class, $cour);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($cour);
            $entityManager->flush();
    
            // Envoie un SMS après l'ajout du cours
            $message = 'Nouveau cours ajouté : ' . $cour->getMatiere();
            try {
                $twilioService->sendSms('+21629082917', $message);
            } catch (\Exception $e) {
                // Gérer l'erreur ici
                $this->addFlash('error', 'Erreur lors de l\'envoi du SMS : ' . $e->getMessage());
            }
    
            $this->addFlash('success', 'Le cours a été ajouté avec succès.');
    
            return $this->redirectToRoute('app_cour_index', [], Response::HTTP_SEE_OTHER);
        }
    
        return $this->renderForm('cour/new.html.twig', [
            'cour' => $cour,
            'form' => $form,
        ]);
    }
    

    #[Route('/{id}', name: 'app_cour_show', methods: ['GET'])]
    public function show(Cour $cour, EntityManagerInterface $entityManager, $id): Response
    {
        $cour = $entityManager->getRepository(Cour::class)->find($id);

        return $this->render('cour/show.html.twig', [
            'cour' => $cour,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_cour_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Cour $cour, EntityManagerInterface $entityManager, $id): Response
    {
        $cour = $entityManager->getRepository(Cour::class)->find($id);

        $form = $this->createForm(Cour1Type::class, $cour);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_cour_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('cour/edit.html.twig', [
            'cour' => $cour,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_cour_delete', methods: ['POST'])]
    public function delete(Request $request, Cour $cour, EntityManagerInterface $entityManager, $id): Response
    {
        $cour = $entityManager->getRepository(Cour::class)->find($id);

        if ($this->isCsrfTokenValid('delete'.$cour->getId(), $request->request->get('_token'))) {
            $entityManager->remove($cour);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_cour_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}/new_unite', name: 'app_cour_new_unite', methods: ['GET', 'POST'])]
    public function newUnite(Request $request, Cour $cour, EntityManagerInterface $entityManager): Response
    {
        $unite = new Unite();
        $unite->setIdCour($cour); // Associer l'unité au cours actuel
        $form = $this->createForm(UniteType::class, $unite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($unite);
            $entityManager->flush();

            return $this->redirectToRoute('app_cour_units', ['id' => $cour->getId()]);
        }

        return $this->renderForm('cour/new_unite.html.twig', [
            'cour' => $cour,
            'form' => $form,
        ]);
    }

    
    #[Route('/{id}/units', name: 'app_cour_units', methods: ['GET'])]
    public function showUnits(Cour $cour, EntityManagerInterface $entityManager, $id): Response
    {
        $cour = $entityManager->getRepository(Cour::class)->find($id);

        // Récupérer les unités du cours spécifique
        $unites = $cour->getUnites();
    
        return $this->render('cour/units.html.twig', [
            'cour' => $cour,
            'unites' => $unites,
        ]);
    }

}
