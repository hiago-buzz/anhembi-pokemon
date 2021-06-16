<?php

require_once '../Controller/UserController.php';


$payload = $_POST;

$userController = new UserController();

$userController->create($payload);