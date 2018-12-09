<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EmailRepository")
 */
class Email
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    private $emailRecipient;
    private $emailSender;
    private $message;
    private $subject;

    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $emailRecipient
     */
    public function setEmailRecipient($emailRecipient)
    {
        $this->emailRecipient = $emailRecipient;
    }

    /**
     * @param mixed $emailSender
     */
    public function setEmailSender($emailSender)
    {
        $this->emailSender = $emailSender;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @param mixed $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    /**
     * @return mixed
     */
    public function getEmailRecipient()
    {
        return $this->emailRecipient;
    }

    /**
     * @return mixed
     */
    public function getEmailSender()
    {
        return $this->emailSender;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @return mixed
     */
    public function getSubject()
    {
        return $this->subject;
    }
}
