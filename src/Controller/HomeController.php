<?php

namespace App\Controller;

use App\Form\MessageType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(Request $request, MailerInterface $mailer): Response
    {
        $messageForm = $this->createForm(MessageType::class);
        $messageForm->handleRequest($request);

        if ($messageForm->isSubmitted() && $messageForm->isValid()) {

            $this->addFlash('success', 'Votre email à été envoyé avec succès !');
            $email = (new Email())
                ->from($messageForm->get('email')->getData())
                ->to('prabhakar.d@codeur.online')

                //->priority(Email::PRIORITY_HIGH)
                ->subject('Prise de contact de : ' . $messageForm->get('username')->getData())
                ->text('Voici le contenu du message : ' . $messageForm->get('content')->getData());
                //->html('<p>See Twig integration for better HTML integration!</p>');

            try {
                $mailer->send($email);
            } catch (TransportExceptionInterface $e) {
                $this->addFlash('danger', "Erreur dans l'envoi de l'email");

            }


            return $this->redirectToRoute('home');
        }


        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'form' => $messageForm->createView()

        ]);
    }

}
