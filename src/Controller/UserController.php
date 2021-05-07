<?php
require_once __ROOT__.'/DAO/UserDAO.php';
require_once __ROOT__.'/Helper/Response.php';

class UserController {
    private $dao;
    private $response;

    function __construct() {
      $this->dao = new DAOUser();
      $this->response = new Response();
    }

    private function create($payload){
      $user = $this->generateUser($payload);
      $result  = $this->dao->create($user);
      if($result){
        $this->response->success("Usuário Cadastrado com sucesso", null);
      }else{
        $this->response->error("Erro ao cadastrar usuário");
      }
    }

    private function generateUser($payload){
      $date = new DateTime();
      $user = new User();
      
      $now = $date->format('Y-m-d H:i:s');

      $user->setNickname($payload["nick_name"]);
      $user->setFullName($payload["full_name"]);
      $user->setGender($payload["gender"]);
      $user->setEmail($payload["email"]);
      $user->setPassword($payload["password"]);
      $user->setBirthDate($payload["birth_date"]);
      $user->setBio($payload["bio"]);
      $user->setCreateIn($now);
      $user->setUpdateIn($now);

      return $user;
    }
}

?>