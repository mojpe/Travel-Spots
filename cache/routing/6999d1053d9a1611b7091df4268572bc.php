<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2017-06-29 07:43:28
 */

$app = Yee\Yee::getInstance();

$app->map("/account/password", "ChangePassword::___indexAction")->via("GET")->name("passwordchange.index");
$app->map("/account/password", "ChangePassword::___indexPasswordChangeAction")->via("POST")->name("passwordchange.index");

