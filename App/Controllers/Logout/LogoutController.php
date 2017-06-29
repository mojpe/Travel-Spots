<?php

use Yee\Managers\Controller\Controller;
use Yee\Managers\CacheManager;

use App\Models\Activation\ActivationModel;

class LogoutController extends Controller
{
    /**
    * @Route('/logout')
    * @Name('logout.index')
    */
    public function indexAction()
    {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();
        
        session_unset();
        session_destroy();
        $app->redirect('/');
    }
}