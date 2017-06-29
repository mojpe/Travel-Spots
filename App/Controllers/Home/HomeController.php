<?php

use Yee\Managers\Controller\Controller;
use Yee\Managers\CacheManager;

class HomeController extends Controller
{
    /**
    * @Route('/')
    * @Name('home.index')
    */
    
    public function indexAction( )
    {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();
        
        $data = array(
        "title" => "Home"
        );
        
        $app->render('pages/home.tpl', $data );
    }
}