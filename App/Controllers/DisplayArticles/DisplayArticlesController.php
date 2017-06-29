<?php

use Yee\Managers\Controller\Controller;
use Yee\Managers\CacheManager;
use App\Models\DisplayArticles\DisplayArticlesModel;

class DisplayArticleController extends Controller
{

    /**
     * @Route('/articles')
     * @Name('article.index')
     */
    public function indexAction()
    {
        $app = $this->getYee();

        if (isset($_SESSION['isLogged'])) {
            $javascript = array(
            );

            $displayArticlesModel = new DisplayArticlesModel();
            $data = array(
                'title' => 'Articles',
                'articles' => $displayArticlesModel->getAllArticles()
            );

            $app->render('/pages/displayArticles.tpl', $data);
        } else {
            $app->redirect('/login');
        }
    }

}
