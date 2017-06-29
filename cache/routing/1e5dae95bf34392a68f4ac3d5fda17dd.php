<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2017-06-29 07:43:28
 */

$app = Yee\Yee::getInstance();

$app->map("/newArticle", "NewArticleController::___indexAction")->via("GET")->name("newarticle.index");
$app->map("/newArticle", "NewArticleController::___indexNewArticle")->via("POST")->name("newarticle.index");

