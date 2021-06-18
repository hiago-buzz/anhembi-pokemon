<?php
require_once '../Controller/UserController.php';


$userId = $_POST["userId"];

$userController = new UserController();

$userController->delete($userId);