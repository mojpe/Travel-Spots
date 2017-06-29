<?php

use Yee\Managers\Controller\Controller;
use Yee\Managers\CacheManager;

class TestController extends Controller
{

    /**
     * @Route('/test')
     * @Name('test.index')
     */
    public function indexAction()
    {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();

        if (!$this->isDatabasePresidentsEmpty()) {
            $webPage = file_get_contents('http://presidentsusa.net/presvplist.html');
            preg_match_all('#<td>[0-9]+\.\s*<a href=".*">(.+) \(.*\)<\/a>#', $webPage, $presidents);

            $this->addPresidentsInDatabase($presidents[1]);
        }

        $javascript = '/App/Controllers/Test/test.js';

        $data = array(
            "title" => "Test",
            'presidents' => $this->getAllPresidents(),
            'javascript' => $javascript
        );

        $app->render('pages/test.tpl', $data);
    }

    /**
     * @Route('/test/:action')
     * @Name('indexButtonAction')
     * @Method('post')
     */
    public function indexButtonAction($action)
    {
        $app = $this->getYee();

        var_dump($app->request()->post('id'));
        var_dump($app->request()->post('president'));

        if ($action == 'save') {
            die('here we save data');
        }
    }

    public function addPresidentsInDatabase($presidents)
    {
        $app = Yee\Yee::getInstance();

        foreach ($presidents as $president) {
            $app->db['default']->insert('presidents', ['president' => $president]);
        }
    }

    public function isDatabasePresidentsEmpty()
    {
        $app = Yee\Yee::getInstance();
        return $app->db['default']->get('presidents');
    }

    public function getAllPresidents()
    {
        $app = Yee\Yee::getInstance();
        return $app->db['default']->rawQuery('SELECT * FROM presidents ORDER BY id ASC');
    }

}
