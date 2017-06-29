<?php

use Yee\Managers\Controller\Controller;
use Yee\Managers\CacheManager;
use App\Library\MessageHandler;
use App\Models\Login\LoginModel;

class LoginController extends Controller
{

    /**
     * @Route('/login')
     * @Name('login.index')
     */
    public function indexAction()
    {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();

        if (!isset($_SESSION['isLogged'])) {
            $javascript = array(
                '/js/login.js'
            );

            $data = array(
                "title" => "Login",
                'javascript' => $javascript
            );

            $app->render('pages/login.tpl', $data);
        } else {
            $app->redirect('/');
        }
    }

    /**
     * @Route('/login')
     * @Name('ajax.index')
     * @Method('post')
     */
    public function indexLoginAction()
    {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();

        $email = $app->request()->post('email');
        $password = $app->request()->post('password');

        /** @var Ajax Model */
        $loginModel = new LoginModel($email, $password);

        if (!$loginModel->validateLogin()) {
            MessageHandler::addMessage('error', 'Email or password doesn\'t match!');
        }
        if (MessageHandler::$errors == 0) {
            $_SESSION['isLogged'] = true;
            $_SESSION['email'] = $email;
            MessageHandler::addMessage('success', "You have logged in");
        }
        echo json_encode(MessageHandler::getMessages());
    }

}
