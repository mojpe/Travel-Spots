<?php

namespace App\Models\DisplayArticles;

class DisplayArticlesModel{
    
    public function getAllArticles()
    {
        $app = \Yee\Yee::getInstance();
        
        return $app->db['default']->get('articles',null,  array('title', 'author', 'date', 'content', 'main_picture', 'location'));
    }
}