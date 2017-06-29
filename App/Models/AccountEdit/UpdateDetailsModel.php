<?php

namespace App\Models\AccountEdit;

use App\Library\Helpers;

class UpdateDetailsModel
{

    public function updateInfoInDatabase($post)
    {
        $app = \Yee\Yee::getInstance();
        $data = array();
        
        if ($post['name'] == 'firstname') {
            $data['first_name'] = $post['value'];
        }
        if ($post['name'] == 'lastname') {
            $data['last_name'] = $post['value'];
        }

        $app->db['default']->where('email', $_SESSION['email'])->update('users', $data);
    }

}
