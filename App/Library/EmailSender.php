<?php

namespace App\Library;

class EmailSender
{
    private $sender;
    private $receiver;
    private $subject;
    private $data = array();
    private $template;
    
    private $htmlMessage;
    
    public function __construct($sender, $receiver, $subject, $data, $template)
    {
        $this->sender = $sender;
        $this->receiver = $receiver;
        $this->subject = $subject;
        $this->data = $data;
        $this->template = $template;
        return $this;
    }
    
    /**
    * Builds the emal body and inserts the data within the email body.
    * @return \App\Library\EmailSender
    */
    function buildEmail()
    {
        $app = \Yee\Yee::getInstance();
        
        $app->view()->appendData($this->data);
        $this->htmlMessage = $app->view()->render('/mail/' . $this->template . '.tpl');
        
        return $this;
    }
    
    /**
    * Sets the email headers and sends the email to receiver.
    */
    function sendEmail()
    {
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= "From: <$this->sender> \r\n";
        
        mail($this->receiver, $this->subject, $this->htmlMessage, $headers);
    }
}