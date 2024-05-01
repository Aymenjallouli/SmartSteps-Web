<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    #[Route(path: '/connexion', name: 'login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // Check if the user is already authenticated
        if ($this->getUser()) {
            return $this->redirectToRoute('home'); // Redirect to the home page or another appropriate route
        }

        // Get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // Get the last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        // Retrieve the user based on the last username
        $user = $this->getDoctrine()->getRepository(User::class)->findOneBy(['email' => $lastUsername]);

        // Check if the user exists and is verified
        if ($user && !$user->isVerified()) {
            // User is not verified, display an error message or render a template
            return $this->render('security/not_verified.html.twig');
        }

        // Render the login form
        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error
        ]);
    }


    #[Route(path: '/deconnexion', name: 'logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
    /**
     * Check for role and redirect
     *
     * @Route("/connexion/succes", name="login_success")
     * 
     * @return Response
     */
    public function onLoginSuccess()
    {
        if ($this->isGranted('ROLE_ADMIN')) return $this->redirectToRoute('admin_dashboard_index');
        else return $this->redirectToRoute('home_index');
    }
}
