<?php

namespace App\Controller;

use App\Entity\Email;
use App\Form\SendAnEmailType;
use App\Validator\SendAnEmailFormValidator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class EmailController extends AbstractController
{
    public $SendAnEmailFormValidator;

    public function __construct(SendAnEmailFormValidator $emailFormValidator)
    {
        $this->SendAnEmailFormValidator = $emailFormValidator;
    }

    public function email(\Swift_Mailer $mailer, Request $request)
    {
        $email = new Email();

        $form = $this->createForm(SendAnEmailType::class, $email);

        $form->handleRequest($request);

        $this->SendAnEmailFormValidator->Validate($form);

        $message = (new \Swift_Message($email->getSubject()))
            ->setTo("steven.ginns@gmail.com")
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
