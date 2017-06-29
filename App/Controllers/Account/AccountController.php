<?php

use Yee\Managers\Controller\Controller;
use Yee\Managers\CacheManager;
use App\Models\Account\AccountModel;

class AccountController extends Controller
{
    /**
    * @Route('/account')
    * @Name('account.index')
    */
    public function indexAction()
    {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();
        
        if(isset($_SESSION['isLogged'])){
            
            $accountModel = new AccountModel();
            
            $javascript = array(
                
            );
            
            $data = array(
                'title' => 'My Account',
                "accountData" => $accountModel->getAccountDetails(),
                'javascript' => $javascript
            );
            
            $app->render('pages/account.tpl', $data);
        } else{
            $app->redirect('/login');
        }
    }
}