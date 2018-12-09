<?php

namespace App\Entity;

class Email
{
    private $emailRecipient;
    private $emailSender;
    private $message;
    private $subject;

    /**
     * @param string $emailRecipient
     */
    public function setEmailRecipient($emailRecipient)
    {
        $this->emailRecipient = $emailRecipient;
    }

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
    public function getEmailRecipient()
    {
        return $this->emailRecipient;
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
