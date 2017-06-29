<?php

namespace App\Models\Account;

class AccountModel
{
    private $app;

    public function __construct()
    {
        $this->app = \Yee\Yee::getInstance();
    }
    
    public function getAccountDetails()
    {
        return $this->app->db['default']->where("email",  $_SESSION['email'])->getOne("users ");
    }
}