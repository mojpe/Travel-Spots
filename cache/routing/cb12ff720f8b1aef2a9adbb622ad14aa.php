<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2017-06-29 09:58:29
 */

$app = Yee\Yee::getInstance();

$app->map("/signup", "SignupController::___indexAction")->via("GET")->name("signup.index");
$app->map("/signup", "SignupController::___indexPostAction")->via("POST")->name("post action");

