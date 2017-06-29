<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2017-06-29 07:43:28
 */

$app = Yee\Yee::getInstance();

$app->map("/reset-password/:secret_code", "ResetPasswordController::___indexAction")->via("GET")->name("resetpassword.index");
$app->map("/reset-password/:secret_code", "ResetPasswordController::___indexResetPasswordAction")->via("POST")->name("resetpassword.index");

