<?php

namespace App\Models\ForgottenPassword;

use App\Library\EmailSender;

class ForgottenPasswordModel
{

    private $email;
    private $secretCode;
    private $app;

    public function __construct($email)
    {
        $this->email = $email;
        $this->app = \Yee\Yee::getInstance();
    }

    public function DatabaseEmailValidation()
    {
        return $this->app->db['default']->where('email', $this->email)->getOne('users');
    }

    public function InsertSecretCodeInDatabase()
    {
        $this->secretCode = uniqid();
        $data = array(
            'email' => $this->email,
            'secret_code' => $this->secretCode
        );
        $this->app->db['default']->insert('forgotten_password', $data);
    }

    public function SendEmail()
    {
        $mail_data = array(
            'mail_title' => "Reset Password",
            'mail_content' => "If you are not using Secret Spots, you can ignore this email.",
            'mail_sender' => "It's me !",
            'resetPassword_code' => $this->secretCode
        );

        $emailSender = new EmailSender('mr@root.com', 'pierre.jerman@gmail.com', 'Reset Password', $mail_data, 'resetPassword');
        
        $emailSender->buildEmail()->sendEmail();
    }

}
