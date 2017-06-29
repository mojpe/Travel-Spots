<?php

namespace App\Models\ResetPassword;

use App\Library\Helpers;

class ResetPasswordModel
{

    private $newPassword;
    private $rePassword;
    private $email;
    private $secretCode;
    private $app;

    public function __construct($newPassword, $rePassword, $secretCode)
    {
        $this->newPassword = $newPassword;
        $this->rePassword = $rePassword;
        $this->secretCode = $secretCode;
        $this->app = \Yee\Yee::getInstance();
    }

    public function ValidateSecretCode()
    {
        $query = $this->app->db['default']->where('secret_code', $this->secretCode)->getOne('forgotten_password', null, 'email', 'secret_code');
        $this->email =  $query['email'];
        $this->secretCode =  $query['secret_code'];
        return $query;
    }

    public function UpdateNewPassword()
    {
        $this->app->db['default']->where('email', $this->email)->update('users', ['password_hash' => password_hash($this->newPassword, PASSWORD_DEFAULT)]);
    }

    public function ValidatePassword()
    {
        return Helpers::validatePassword($this->newPassword, $this->rePassword);
    }
    
    public function ClearUsedSecretCode()
    {
        $this->app->db['default']->where('secret_code', $this->secretCode)->delete('forgotten_password');
    }

}
