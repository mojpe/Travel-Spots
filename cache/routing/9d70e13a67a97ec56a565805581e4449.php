<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2017-06-29 07:43:28
 */

$app = Yee\Yee::getInstance();

$app->map("/forgotten-password", "ForgottenPasswordController::___indexAction")->via("GET")->name("forgottenpassword.index");
$app->map("/forgotten-password", "ForgottenPasswordController::___indexChangePasswordAction")->via("POST")->name("ajaxforgottenpassword.index");

