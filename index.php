<?php
require_once 'Model.php';
require_once 'Controller.php';

$model = new Model();
$controller = new Controller($model);

$controller->route();