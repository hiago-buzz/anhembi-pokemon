<?php 
require_once '../Model/PokemonModel.php';
require_once '../DAO/PokemonDAO.php';
require_once '../Helpers/Response.php';

class PokemonController {
    private $dao;
    private $response;

    function __construct() {
      $this->daoPokemon = new DAOPokemon();
      $this->response = new Response();
      $this->pokemonModel = new Pokemon();
    }

    public function getSquad($userId){
      $response = $this->daoPokemon->getSquad($userId);
      if($response){
        $this->response->success("Equipe encontrada!", json_encode($response));
      }else{
        $this->response->error("Equipe não encontrada!");
      }
    }

    public function create($payload){
      $this->deleteAll($payload[0]["user_id"]);
      for($i = 0; $i < count($payload); $i++){
        $pokemon = $this->generatePokemon($payload[$i]);
        $response = $this->daoPokemon->create($pokemon);
        if(!$response){
          $this->response->error("Erro ao cadastrar equipe!");
          return;
        }
      }
      $this->response->success("Equipe Cadastrada com sucesso!", json_encode(null));
    }

    public function deleteAll($id){
      return $this->daoPokemon->delete($id);
    }

    public function generatePokemon($payload){
      $date = new DateTime();
      $pokemon = new Pokemon();
      
      $now = $date->format('Y-m-d H:i:s');
      
      $pokemon->setFavorite($payload["favorite"]);
      $pokemon->setUserId($payload["user_id"]);
      $pokemon->setPokemonId($payload["pokemon_id"]);
      $pokemon->setPokemonName($payload["pokemon_name"]);
      $pokemon->setCreateIn($now);
      $pokemon->setUpdateIn($now);

      return $pokemon;
  }
}