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

#[Route('/admin/unite')]
class UniteAdminController extends AbstractController
{
    #[Route('/', name: 'admin_unite_index', methods: ['GET'])]
    public function index(UniteRepository $uniteRepository): Response
    {
        return $this->render('unite_admin/index.html.twig', [
            'unites' => $uniteRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'admin_unite_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, ValidatorInterface $validator): Response
    {
        $unite = new Unite();
        $form = $this->createForm(UniteType::class, $unite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Valider les données de l'entité Unite
            $errors = $validator->validate($unite);
            if (count($errors) > 0) {
                // Gérer les erreurs de validation
                // Vous pouvez afficher les erreurs ou rediriger vers une autre page
            }

            $entityManager->persist($unite);
            $entityManager->flush();

            return $this->redirectToRoute('admin_unite_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('unite_admin/new.html.twig', [
            'unite' => $unite,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'admin_unite_show', methods: ['GET'])]
    public function show(Unite $unite, EntityManagerInterface $entityManager, $id): Response
    {
        $unite = $entityManager->getRepository(Unite::class)->find($id);
        return $this->render('unite_admin/show.html.twig', [
            'unite' => $unite,
        ]);
    }

    #[Route('/{id}/edit', name: 'admin_unite_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Unite $unite, EntityManagerInterface $entityManager, ValidatorInterface $validator, $id): Response
    {
        $unite = $entityManager->getRepository(Unite::class)->find($id);
        $form = $this->createForm(UniteType::class, $unite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Valider les données de l'entité Unite
            $errors = $validator->validate($unite);
            if (count($errors) > 0) {
                // Gérer les erreurs de validation
                // Vous pouvez afficher les erreurs ou rediriger vers une autre page
            }

            $entityManager->flush();

            return $this->redirectToRoute('admin_unite_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('unite_admin/edit.html.twig', [
            'unite' => $unite,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'admin_unite_delete', methods: ['POST'])]
    public function delete(Request $request, Unite $unite, EntityManagerInterface $entityManager, $id): Response
    {
        $unite = $entityManager->getRepository(Unite::class)->find($id);
        if ($this->isCsrfTokenValid('delete'.$unite->getId(), $request->request->get('_token'))) {
            $entityManager->remove($unite);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin_unite_index', [], Response::HTTP_SEE_OTHER);
    }
}
