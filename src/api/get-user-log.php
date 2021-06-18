<?php
require_once '../Controller/UserController.php';
require_once '../Helpers/Authentication.php';

$userController = new UserController();
$auth = new Authentication();

$userController->getUser($auth->getUserId());