<?php

use Yee\Managers\Controller\Controller;
use Yee\Managers\CacheManager;
use App\Models\Activation\ActivationModel;

class ActivationController extends Controller
{

    /**
     * @Route('/activation/:activation_code')
     * @Name('activation.index')
     */
    public function indexAction($activationCode)
    {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();
        /** @var Activation Mode  */
        $activationModel = new ActivationModel($activationCode);

        if ($activationModel->doesActivationCodeExist()) {
            $activationModel->activateAccount();

            $app->redirect('/login');
        } else {
            $app->redirect('/signup');
        }
    }

}
