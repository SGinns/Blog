<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SendAnEmailType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('emailRecipient', EmailType::class, ["label" => "TO: "])
            ->add('subject', TextType::class, ["label" => "Subject: "])
            ->add('emailSender', EmailType::class, ["label" => "FROM: "])
            ->add('message', TextType::class, ["label" => "Message: "])
            ->add('submit', SubmitType::class, ["label" => "Submit"])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
        ]);
    }
}
