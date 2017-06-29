<?php

namespace App\Models\Login;

use App\Library\Helpers;

class LoginModel
{

    private $email;
    private $password;
    private $app;
    private $userEmailPassword;

    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
        $this->app = \Yee\Yee::getInstance();

        /** @var array -> Extracts email and password from the Database */
        $this->userEmailPassword = $this->app->db['default']->where('email', $this->email)->getOne('users', 'email, password_hash');
    }

    /**
     * Validates the email and password from the login form with the Database.
     * @return boolean  TRUE -> If email and password match.
     * @return boolean  FALSE -> If email and password doesn't match.
     */
    public function validateLogin()
    {
        if ($this->doesUserExist()) {
            if ($this->validatePassword()) {
                return true;
            }
        }
        return false;
    }

    /**
     * Returns whether an user exists or not.
     * @return boolean TRUE -> If user exists.
     * @return boolean FALSE -> If user doesn't exist.
     */
    private function doesUserExist()
    {
        return $this->userEmailPassword['email'] != NULL;
    }

    /**
     * Returns whether the password matches from the database or not.
     * @return boolean TRUE -> If the password is correct.
     * @return boolean FALSE -> If the password is incorrect.
     */
    private function validatePassword()
    {
        $password_hash = $this->userEmailPassword['password_hash'];
        return password_verify($this->password, $password_hash);
    }

}
