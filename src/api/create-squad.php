<?php
require_once '../Controller/PokemonController.php';
require_once '../Helpers/Authentication.php';

$pokemonController = new PokemonController();
$auth = new Authentication();

$payload = $_POST["data"];
$pokemonController->create($payload);