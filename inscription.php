<?php

require_once 'libraries/autoload.php';


$view = new \view\Customers();

$register = new \controllers\Customers();

$register_msg = $register->register();

$view->register_form($register_msg);
