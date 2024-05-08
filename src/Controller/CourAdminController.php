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
use Symfony\Component\HttpFoundation\JsonResponse;



#[Route('/admin/cour')]
class CourAdminController extends AbstractController
{
    #[Route('/', name: 'admin_cour_index', methods: ['GET'])]
    public function index(CourRepository $courRepository): Response
    {
        $cours = $courRepository->findAll();

        return $this->render('cour_admin/index.html.twig', [
            'cours' => $cours,
        ]);
    }

    #[Route('/new', name: 'admin_cour_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $cour = new Cour();
        $form = $this->createForm(Cour1Type::class, $cour);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($cour);
            $entityManager->flush();

            return $this->redirectToRoute('admin_cour_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('cour_admin/new.html.twig', [
            'cour' => $cour,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'admin_cour_show', methods: ['GET'])]
    public function show(Cour $cour, EntityManagerInterface $entityManager, $id): Response
    {
        $cour = $entityManager->getRepository(Cour::class)->find($id);
        return $this->render('cour_admin/show.html.twig', [
            'cour' => $cour,
        ]);
    }

    #[Route('/{id}/edit', name: 'admin_cour_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Cour $cour, EntityManagerInterface $entityManager, $id): Response
    {
        $cour = $entityManager->getRepository(Cour::class)->find($id);
        $form = $this->createForm(Cour1Type::class, $cour);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('admin_cour_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('cour_admin/edit.html.twig', [
            'cour' => $cour,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'admin_cour_delete', methods: ['POST'])]
    public function delete(Request $request, Cour $cour, EntityManagerInterface $entityManager, $id): Response
    {
        $cour = $entityManager->getRepository(Cour::class)->find($id);
        if ($this->isCsrfTokenValid('delete'.$cour->getId(), $request->request->get('_token'))) {
            $entityManager->remove($cour);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin_cour_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}/new_unite', name: 'admin_cour_new_unite', methods: ['GET', 'POST'])]
    public function newUnite(Request $request, Cour $cour, EntityManagerInterface $entityManager): Response
    {
        $unite = new Unite();
        $unite->setIdCour($cour); // Associer l'unité au cours actuel
        $form = $this->createForm(UniteType::class, $unite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($unite);
            $entityManager->flush();

            return $this->redirectToRoute('admin_cour_units', ['id' => $cour->getId()]);
        }

        return $this->renderForm('cour_admin/new_unite.html.twig', [
            'cour' => $cour,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/units', name: 'admin_cour_units', methods: ['GET'])]
    public function showUnits(Cour $cour, EntityManagerInterface $entityManager, $id): Response
    {
        $cour = $entityManager->getRepository(Cour::class)->find($id);
        // Récupérer les unités du cours spécifique
        $unites = $cour->getUnites();

        return $this->render('cour_admin/units.html.twig', [
            'cour' => $cour,
            'unites' => $unites,
        ]);
    }

    /**
 * @Route("/search", name="search")
 */
public function search(Request $request)
{
    $searchTerm = $request->query->get('q');

    $entityManager = $this->getDoctrine()->getManager();
    $repository = $entityManager->getRepository(Unite::class);
    $results = $repository->createQueryBuilder('u')
        ->where('u.Titre LIKE :searchTerm')
        ->setParameter('searchTerm', '%' . $searchTerm . '%')
        ->getQuery()
        ->getResult();

    $formattedResults = [];
    foreach ($results as $unite) {
        $formattedResults[] = [
            'id' => $unite->getId(),
            'Num_unite' => $unite->getNumUnite(),
            'Titre' => $unite->getTitre(),
            'Statut' => $unite->getStatut(),
            'Contenu' => $unite->getContenu(),
        ];
    }

    return new JsonResponse($formattedResults);
}
}
