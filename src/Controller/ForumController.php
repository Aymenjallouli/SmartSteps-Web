<?php

namespace App\Controller;

use App\Entity\Forum;
use App\Form\ForumType;
use App\Form\CommentaireType; 
use App\Entity\Commentaire;
use App\Repository\ForumRepository;
use Doctrine\ORM\EntityManagerInterface;
use MercurySeries\FlashyBundle\FlashyNotifier;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twilio\Exceptions\ConfigurationException;
use Twilio\Exceptions\TwilioException;
use Twilio\Rest\Client;

#[Route('/forum')]
class ForumController extends AbstractController
{
    #[Route('/', name: 'app_forum_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $forums = $entityManager
            ->getRepository(Forum::class)
            ->findAll();

        return $this->render('forum/index.html.twig', [
            'forums' => $forums,
        ]);
    }

    #[Route('/new', name: 'app_forum_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager,FlashyNotifier $flashy): Response
    {
        $forum = new Forum();
        $form = $this->createForm(ForumType::class, $forum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $form['image']->getData();
            $fileName = uniqid().'.'.$file->guessExtension();

            // Move the file to the directory where your images are stored
            $file->move(
                $this->getParameter('image_directory'),
                $fileName
            );

            // Set the 'image' property with the file name
            $forum->setImage($fileName);
            $entityManager->persist($forum);
            $entityManager->flush();

           // Send an SMS notification about the new forum creation
             $this->sendTwilioMessage($forum);

            $flashy->success(' thank you for sharing your forum!', 'http://your-awesome-link.com');

            return $this->redirectToRoute('app_forum_index', [], Response::HTTP_SEE_OTHER);
            $flashy->success(' thank you for sharing your forum!', 'http://your-awesome-link.com');
            $flashy->success(' thank you for sharing your forum!', 'http://your-awesome-link.com');

    

        }

        return $this->renderForm('forum/new.html.twig', [
            'forum' => $forum,
            'form' => $form,
        ]);
     
        
    }
    

#[Route('/{id}', name: 'app_forum_show', methods: ['GET', 'POST'])]
public function show(Request $request, Forum $forum, EntityManagerInterface $entityManager,FlashyNotifier $flashy): Response
{
    $commentaire = new Commentaire(); 
    $commentForm = $this->createForm(CommentaireType::class, $commentaire);
    $commentForm->handleRequest($request);

    if ($commentForm->isSubmitted() && $commentForm->isValid()) {
        $commentaire->setIdForum($forum); 
        $entityManager->persist($commentaire);
        $entityManager->flush();
        $flashy->success(' thank you for sharing your forum!', 'http://your-awesome-link.com');

        return $this->redirectToRoute('app_forum_show', ['id' => $forum->getId()], Response::HTTP_SEE_OTHER);
    }

    
    $comments = $entityManager
        ->getRepository(Commentaire::class)
        ->findBy(['idForum' => $forum]);

    return $this->render('forum/show.html.twig', [
        'forum' => $forum,
        'comments' => $comments, 
        'commentForm' => $commentForm->createView(), 
    ]);
}




    #[Route('/{id}/edit', name: 'app_forum_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Forum $forum, EntityManagerInterface $entityManager,FlashyNotifier $flashy): Response
    {
        $form = $this->createForm(ForumType::class, $forum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $form['image']->getData();

            if ($file) {
                $fileName = uniqid().'.'.$file->guessExtension();
                $file->move(
                    $this->getParameter('image_directory'),
                    $fileName
                );
                $forum->setImage($fileName);
            $entityManager->flush();
                $flashy->success(' thank you for sharing your forum!', 'http://your-awesome-link.com');
                   

            return $this->redirectToRoute('app_forum_index', [], Response::HTTP_SEE_OTHER);
        }}

        return $this->renderForm('forum/edit.html.twig', [
            'forum' => $forum,
            'form' => $form,
        ]);
    }

    #[Route('/delete/{id}', name: 'app_forum_delete', methods: ['POST'])]
    public function delete(Request $request, Forum $forum, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$forum->getId(), $request->request->get('_token'))) {
            $entityManager->remove($forum);
            $entityManager->flush();
        }
        return $this->redirectToRoute('app_forum_index', [], Response::HTTP_SEE_OTHER);
    }


    /**
     * @throws ConfigurationException
     * @throws TwilioException
     */
    private function sendTwilioMessage(Forum $forum): void
    {
        $twilioAccountSid = $this->getParameter('twilio_account_sid');
        $twilioAuthToken = $this->getParameter('twilio_auth_token');
        $twilioPhoneNumber = $this->getParameter('twilio_phone_number');

        $twilioClient = new Client($twilioAccountSid, $twilioAuthToken);

        
        $twilioClient->messages->create(
            '+21625985364', // Replace with the recipient's phone number
            [
                'from' =>$twilioPhoneNumber,
                'body' => 'A new forum has been created: ' . $forum->getTitre(),
            ]
        );
    }

#[Route('/aaaa/statttt', name: 'app_forum_stat', methods: ['GET', 'POST'])]
public function top3MostCommentedForums(ForumRepository $forumRepository): Response
{
    $top3Forums = $forumRepository->findTop3MostCommentedForums();

    return $this->render('forum/stat.html.twig', [
        'top3Forums' => $top3Forums,
    ]);
}




}

