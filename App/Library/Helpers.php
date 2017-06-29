<?php

namespace App\Library;

class Helpers
{
    /**
    * Validates an email
    *
    * @param string (email)
    * @return boolean TRUE -> If email is valid.
    */
    public static function validateEmail($email)
    {
        return filter_var(trim($email), FILTER_VALIDATE_EMAIL);
    }
    
    /**
    * Validates a password
    *
    * @param string
    * @param string
    * @return boolean TRUE -> If the password matches and it has valid length.
    */
    public static function validatePassword($password, $rePassword)
    {
        $password = trim($password);
        $rePassword = trim($rePassword);
        
        if($password == $rePassword){
            return preg_match("/\b(.{6,20})\b/", $password);
        }
        return FALSE;
    }
    
    public static function stringLengthValidation($string, $from, $to)
    {
        return !(strlen($string) < $from || strlen($string) > $to);
    }
    
    
    public static function get_client_ip()
    {
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
        else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if(getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
        else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }
}