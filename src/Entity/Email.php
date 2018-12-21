<?php

namespace App\Entity;

class Email
{
    public $emailSender;
    public $message;
    public $subject;

    /**
     * @param string $emailSender
     */
    public function setEmailSender($emailSender)
    {
        $this->emailSender = $emailSender;
    }

    /**
     * @param string $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @param string $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    /**
     * @return string
     */
    public function getEmailSender()
    {
        return $this->emailSender;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }
}
