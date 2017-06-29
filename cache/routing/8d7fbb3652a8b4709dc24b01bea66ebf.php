<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2017-06-29 07:43:28
 */

$app = Yee\Yee::getInstance();

$app->map("/activation/:activation_code", "ActivationController::___indexAction")->via("GET")->name("activation.index");

