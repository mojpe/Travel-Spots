<?php

use Yee\Managers\Controller\Controller;
use Yee\Managers\CacheManager;
use App\Models\ResetPassword\ResetPasswordModel;

class ResetPasswordController extends Controller
{

    /**
     * @Route('/reset-password/:secret_code')
     * @Name('resetPassword.index')
     */
    public function indexAction($secretCode)
    {
        $app = $this->getYee();

        if ($app->db['default']->where('secret_code', $secretCode)->getOne('forgotten_password', 'secret_code')) {
            $javascript = array(
            );

            $data = array(
                'title' => 'Reset Password'
            );

            $app->render('/pages/resetPassword.tpl', $data);
        } else {
            $app->redirect('/signup');
        }
    }

    /**
     * @Route('/reset-password/:secret_code')
     * @Name('resetPassword.index')
     * @Method('post')
     */
    public function indexResetPasswordAction($secretCode)
    {
        $app = $this->getYee();

        $newPassword = trim($app->request()->post('new-password'));
        $rePassword = trim($app->request()->post('repeat-new-password'));

        $resetPasswordModel = new ResetPasswordModel($newPassword, $rePassword, $secretCode);

        if ($resetPasswordModel->ValidateSecretCode()) {
            if ($resetPasswordModel->ValidatePassword()) {

                $resetPasswordModel->UpdateNewPassword();
                $resetPasswordModel->ClearUsedSecretCode();
                $app->redirect('/login');
            }
        }
    }

}
