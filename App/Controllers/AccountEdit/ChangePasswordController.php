<?php

use Yee\Managers\Controller\Controller;
use Yee\Managers\CacheManager;

class ChangePassword extends Controller
{

    /**
     * @Route('/account/password')
     * @Name('passwordChange.index')
     */
    public function indexAction()
    {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();

        if (isset($_SESSION['isLogged'])) {
            $javascript = array(
                '/js/changePassword.js'
            );

            $data = array(
                "title" => "Change Password",
                'javascript' => $javascript
            );

            $app->render('pages/passwordEdit.tpl', $data);
        } else {
            $app->redirect('/login');
        }
    }

    /**
     * @Route('/account/password')
     * @Name('passwordChange.index')
     * @Method('post')
     */
    public function indexPasswordChangeAction()
    {
                /** @var Yee\Yee $yee */
        $app = $this->getYee();
        
        var_dump($app->post());
        die;
    }

}
