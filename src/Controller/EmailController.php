<?php

namespace App\Controller;

use App\Entity\Email;
use App\Form\SendAnEmailType;
use Mailgun\Mailgun;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class EmailController extends AbstractController
{
    public function email(\Swift_Mailer $mailer, Request $request)
    {
        $email = new Email();

        $form = $this->createForm(SendAnEmailType::class, $email);

        $form->handleRequest($request);

        $message = (new \Swift_Message($email->getSubject()))
            ->setTo($email->getEmailRecipient())
            ->setFrom($email->getEmailSender())
            ->setSubject($email->getSubject())
            ->setBody($email->getMessage(), 'text/plain')
        ;

        if($form->isSubmitted() && $form->isValid()){
            $mailer->send($message);
        }

        return $this->render('email/view.html.twig', [
            'email_form' => $form->createView(),
        ]);
    }
}
