<?php

use Yee\Managers\Controller\Controller;
use Yee\Managers\CacheManager;
use App\Models\AccountEdit\UpdateDetailsModel;
use App\Models\Account\AccountModel;

class UpdateDetails extends Controller
{

    /**
     * @Route('/account/update')
     * @Name ('updateDetails.index')
     */
    public function indexAction()
    {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();

        if (isset($_SESSION['isLogged'])) {

            $accountModel = new AccountModel();

            $javascript = array(
                '/js/accountUpdate.js'
            );

            $data = array(
                "title" => "Update Account",
                'javascript' => $javascript,
                'accountData' => $accountModel->getAccountDetails()
            );

            $app->render('pages/updateAccountDetails.tpl', $data);
        } else {
            $app->redirect('/login');
        }
    }

    /**
     * @Route('/account/update')
     * @Name ('updateDetails.index')
     * @Method('post')
     */
    public function indexAccountUpdateAction()
    {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();

        $ajaxAccountEditModel = new UpdateDetailsModel();
        $ajaxAccountEditModel->updateInfoInDatabase($_POST);
    }

}
