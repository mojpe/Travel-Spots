<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2017-06-29 07:43:28
 */

$app = Yee\Yee::getInstance();

$app->map("/account/update", "UpdateDetails::___indexAction")->via("GET")->name("updatedetails.index");
$app->map("/account/update", "UpdateDetails::___indexAccountUpdateAction")->via("POST")->name("updatedetails.index");

