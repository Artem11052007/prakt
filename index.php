<?php
require_once __DIR__ . '/Model.php';
require_once __DIR__ . '/Controller.php';
$model = new Model();
$controller = new Controller($model);
$controller->route();