<?php

use Yee\Managers\Controller\Controller;
use Yee\Managers\CacheManager;
use App\Models\Signup\SignupModel;
use App\Library\MessageHandler;
use App\Library\EmailSender;

class SignupController extends Controller
{

    /**
     * @Route('/signup')
     * @Name('signup.index')
     */
    public function indexAction()
    {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();

        if (!isset($_SESSION['isLogged'])) {
            $javascript = array(
                '/js/signup.js'
            );

            $data = array(
                "title" => "Sign Up",
                'javascript' => $javascript
            );

            $app->render('pages/signup.tpl', $data);
        } else {
            $app->redirect('/');
        }
    }

    /**
     * @Route('/signup')
     * @Name('post action')
     * @Method('post')
     */
    public function indexPostAction()
    {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();

        $email = $app->request()->post('email');
        $password = $app->request()->post('password');
        $rePassword = $app->request()->post('re-password');


        /** @var SignUp Model */
        $signupModel = new SignupModel($email, $password, $rePassword);

        if (!$signupModel->validateSignup()) {
            MessageHandler::addMessage('error', 'Validation Error has occured.');
        }
        if ($signupModel->doesEmailExist()) {
            MessageHandler::addMessage('error', 'Account has been taken!');
        }
        if (MessageHandler::$errors == 0) {
            $signupModel->register();


            $mail_data = array(
                'mail_title' => "Account Activation",
                'mail_content' => "Activation code: ",
                'mail_sender' => "It's me !",
                'activation_code' => $signupModel->activationCode
            );

            $emailSender = new EmailSender('mr@root.com', 'pierre.jerman@gmail.com', 'Account Activation', $mail_data, 'signup');
            //$emailSender->buildEmail()->sendEmail();

            MessageHandler::addMessage('success', 'Registration is successful.');
        }

        $data = array(
            "title" => "Sign Up",
            'messages' => MessageHandler::getMessagesAsHTML('p', 'message-text')
        );

        $app->render('pages/signup.tpl', $data);
    }

}
