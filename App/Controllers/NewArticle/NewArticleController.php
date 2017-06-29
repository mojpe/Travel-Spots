<?php

use Yee\Managers\Controller\Controller;
use Yee\Managers\CacheManager;
use App\Models\NewArticle\NewArticleModel;

class NewArticleController extends Controller
{

    /**
     * @Route('/newArticle')
     * @Name('newArticle.index')
     */
    public function indexAction()
    {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();

        if (isset($_SESSION['isLogged'])) {
            $javascript = array(
                '/js/newArticle.js'
            );

            $data = array(
                "title" => "New Article",
                'javascript' => $javascript
            );

            $app->render('pages/newArticle.tpl', $data);
        } else {
            $app->redirect('/login');
        }
    }

    /**
     * @Route('/newArticle')
     * @Name('newArticle.index')
     * @Method('post')
     */
    public function indexNewArticle()
    {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();



        $title = $app->request()->post('article-title');
        $content = $app->request()->post('article-content');
        $location = $app->request()->post('location');
        $latitude = $app->request()->post('lat');
        $longtitude = $app->request()->post('lng');

        $newArticleModel = new NewArticleModel($title, $content, $location, $latitude, $longtitude);

        if ($newArticleModel->validateTitleLength() && $newArticleModel->validateContextLength()) {
            $newArticleModel->addArticleToDatabase();
            $app->redirect('/articles');
        }
    }

}
