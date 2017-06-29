<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2017-06-29 07:43:28
 */

$app = Yee\Yee::getInstance();

$app->map("/test", "TestController::___indexAction")->via("GET")->name("test.index");
$app->map("/test/:action", "TestController::___indexButtonAction")->via("POST")->name("indexbuttonaction");

