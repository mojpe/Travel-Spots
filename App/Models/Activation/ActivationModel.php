<?php

namespace App\Models\Activation;

class ActivationModel
{
    private $activationCode;
    
    public function __construct($activationCode)
    {
        $this->activationCode = $activationCode;
    }
    
    /**
    * Updates the DataBase and sets the appropriate user to active.
    */
    public function activateAccount()
    {
        $app = \Yee\Yee::getInstance();
        
        $data = array(
        'active' => 1,
        'activation_code' => ''
        );
        
        $app->db['default']->where('activation_code', $this->activationCode)->update('users',$data);
    }
    
    /**
    * Checks whether the activation code exists in the DataBase,
    * @return boolean TRUE -> If the activation code exists in the database.
    * @return boolean FALSE -> If the activation code doesn't exists in the database.
    */
    public function doesActivationCodeExist()
    {
        $app = \Yee\Yee::getInstance();
        if($app->db['default']->where('activation_code', $this->activationCode)->getOne('users')){
            return TRUE;
        }
        return FALSE;
    }
    
}