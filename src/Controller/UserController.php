<?php
require_once '../Controller/PokemonController.php';
require_once '../Model/UserModel.php';
require_once '../Model/PokemonModel.php';
require_once '../DAO/UserDAO.php';
require_once '../DAO/PokemonDAO.php';
require_once '../Helpers/Response.php';
require_once '../Helpers/Authentication.php';

class UserController {
    private $dao;
    private $response;

    function __construct() {
      $this->daoUser = new DAOUser();
      $this->daoPokemon = new DAOPokemon();
      $this->response = new Response();
      $this->auth = new Authentication();
      $this->pokemonModel = new Pokemon();
      $this->pokemonController = new PokemonController();
    }

    public function create($payload){
      $user = $this->generateUser($payload);
      $userId  = $this->daoUser->create($user);
      
      if($userId){
        $payload["favorite"] = 1;
        $payload["user_id"] = $userId;
        $pokemon = $this->pokemonController->generatePokemon($payload);
        $resultPokemon = $this->daoPokemon->create($pokemon);

        if($resultPokemon){
          $token = $this->auth->createSession($user->getNickname(), $userId);
          $this->response->success("Cadastro feito com sucesso!",  json_encode($token));
          return;
        }
      }

      $this->response->error("Erro ao efetuar Cadastro!");
      return;
    }

    public function update($payload){
      $payload["password"] = "";
      $user = $this->generateUser($payload);
      $id = $this->auth->getUserId();
      $response = $this->daoUser->update($user, $id);
      if($response){
        $this->auth->setNickName($user->getNickName());
        $this->response->success("Usuário alterado com sucesso!", json_encode(NULL));
      }else{
        $this->response->error("Não Foi possível alterar o usuário!");
      }
    }

    public function getUser($id){
      $response = $this->daoUser->getUser($id);
      if($response){
          $this->response->success("Usuário encontrado!", json_encode($response));
      }else{
      $this->response->error("Usuário não encontrado!");
      }
    }

    public function delete($id){
      $response = $this->daoUser->delete($id);
      if($response){
          $this->auth->destroySession();
          $this->response->success("Usuário excluido!",  json_encode(NULL));
      }else{
      $this->response->error("Erro ao excluir usuário!");
      }
    }

    public function login($payload) {
      $user = $this->daoUser->login($payload);
      if($user["id"]){
        $token = $this->auth->createSession($user["nick_name"], $user["id"]);
        $this->response->success("Login feito com sucesso!",  json_encode($token));
      }else{
      $this->response->error("Erro ao efetuar login!");
      }
    }

    public function logout(){
      $this->auth->destroySession();
      $this->response->success("Logout feito com sucesso!", json_encode(NULL));
    }

    private function generateUser($payload){
      $date = new DateTime();
      $user = new User();
      
      $now = $date->format('Y-m-d H:i:s');

      $user->setNickname($payload["nick-name"]);
      $user->setFullName($payload["full-name"]);
      $user->setGender($payload["gender"]);
      $user->setEmail($payload["email"]);
      $user->setPassword($payload["password"]);
      $user->setBirthDate($payload["birth-date"]);
      $user->setBio($payload["bio"]);
      $user->setCreateIn($now);
      $user->setUpdateIn($now);

      return $user;
    }
}

?>