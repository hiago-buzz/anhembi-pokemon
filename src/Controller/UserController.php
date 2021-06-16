<?php
require_once '../DAO/UserDAO.php';
require_once '../Helpers/Response.php';
require_once '../Helpers/Authentication.php';

class UserController {
    private $dao;
    private $response;

    function __construct() {
      $this->dao = new DAOUser();
      $this->response = new Response();
      $this->auth = new Authentication();
    }

    public function create($payload){
      $user = $this->generateUser($payload);
      $result  = $this->dao->create($user);
       if($result){
        $token = $this->auth->createSession($user->getNickname());
        $this->response->success( "Cadastro feito com sucesso!",  $token);
      }else{
        $this->response->error( "Erro ao efetuar Cadastro!");
      }
    }

    public function login($payload) {
      $nick_name = $this->dao->login($payload);
      if($nick_name){
        $token = $this->auth->createSession($nick_name);
        $this->response->success("Login feito com sucesso!",  $token);
      }else{
      $this->response->error("Erro ao efetuar login!");
      }
    }

    public function logout(){
      $this->auth->destroySession();
      $this->response->success("Logout feito com sucesso!",  NULL);
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

    private function returnSession($result, $user, $message, $erro){
     
    }
}

?>