<?php

namespace App\Validator;

use Symfony\Component\Form\FormError;
use Symfony\Component\Form\FormInterface;

class SendAnEmailFormValidator
{
    public function Validate(FormInterface $form)
    {
        if($form->isSubmitted()){
            if($form->get('emailRecipient')->getData() === null){
                $form->get('emailRecipient')->addError(new FormError("Please enter an address"));
            }
            if($form->get('subject')->getData() === null){
                $form->get('subject')->addError(new FormError("Please enter a subject"));
            }
            if($form->get('emailSender')->getData() === null){
                $form->get('emailSender')->addError(new FormError("Please enter your address"));
            }
            if($form->get('message')->getData() === null){
                $form->get('message')->addError(new FormError("Please enter a message"));
            }
        }
    }
}