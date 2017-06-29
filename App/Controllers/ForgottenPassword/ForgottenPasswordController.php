<?php

use Yee\Managers\Controller\Controller;
use Yee\Managers\CacheManager;
use App\Models\ForgottenPassword\ForgottenPasswordModel;
use App\Library\MessageHandler;

class ForgottenPasswordController extends Controller
{

    /**
     * @Route('/forgotten-password')
     * @Name('forgottenPassword.index')
     */
    public function indexAction()
    {
        $app = $this->getYee();

        $javascript = array(
            '/js/forgottenPassword.js'
        );

        $data = array(
            'title' => 'Forgotten Password',
            'javascript' => $javascript
        );

        $app->render('/pages/forgottenPassword.tpl', $data);
    }

    /**
     * @Route('/forgotten-password')
     * @Name('ajaxForgottenPassword.index')
     * @Method('post')
     */
    public function indexChangePasswordAction()
    {
        $app = $this->getYee();

        $email = $app->request()->post('email');

        $forgottenPasswordModel = new ForgottenPasswordModel($email);

        if ($forgottenPasswordModel->DatabaseEmailValidation()) {
            $forgottenPasswordModel->InsertSecretCodeInDatabase();
            $forgottenPasswordModel->SendEmail();
            MessageHandler::addMessage('success', 'An email has been sent to your email address');
        } else {
            MessageHandler::addMessage('error', 'Error');
        }
        
        echo json_encode(MessageHandler::getMessages());
    }

}
