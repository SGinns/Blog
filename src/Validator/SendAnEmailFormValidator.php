<?php

namespace App\Validator;

use Symfony\Component\Form\FormError;
use Symfony\Component\Form\FormInterface;

class SendAnEmailFormValidator
{
    public function Validate(FormInterface $form)
    {
        if($form->isSubmitted()){
            if($form->get('subject')->getData() === null){
                return $form->get('subject')->addError(new FormError("Please enter a subject"));
            }
            if($form->get('emailSender')->getData() === null){
                return $form->get('emailSender')->addError(new FormError("Please enter your address"));
            }
            if($form->get('message')->getData() === null){
                return $form->get('message')->addError(new FormError("Please enter a message"));
            }
        }
    }
}