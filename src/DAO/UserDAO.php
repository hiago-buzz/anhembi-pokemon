<?php

require_once '../Model/UserModel.php';
require_once '../Data/Connect.php';

  class DAOUser{
    
    public function create(User $user){
      $sql = "INSERT INTO users (
        nick_name,
        full_name,
        gender,
        email,
        password,
        birth_date,
        bio,
        create_in
      )
      VALUES (
      :nick_name,
      :full_name,
      :gender,
      :email,
      :password,
      :birth_date,
      :bio,
      :create_in
      )";
      
      $connect = new Connect();
      $p_sql = $connect->getInstance()->prepare($sql);

      $p_sql->bindValue(":nick_name", $user->getNickname());
      $p_sql->bindValue(":full_name", $user->getFullName());
      $p_sql->bindValue(":gender", $user->getGender());
      $p_sql->bindValue(":email", $user->getEmail());
      $p_sql->bindValue(":password", $user->getPassword());
      $p_sql->bindValue(":birth_date", $user->getBirthDate());
      $p_sql->bindValue(":bio", $user->getBio());
      $p_sql->bindValue(":create_in", $user->getCreateIn());

      return $p_sql->execute();
     
    }

    public function login($user){
      $sql = "SELECT nick_name FROM users WHERE email = :email AND password = :password AND status = 1";

      $connect = new Connect();
      $p_sql = $connect->getInstance()->prepare($sql);

      $p_sql->bindValue(":email", $user['email']);
      $p_sql->bindValue(":password", md5($user['password']));
      $p_sql->execute();
      $response = $p_sql->fetchAll();
      if(!empty($response)){
        return $response[0]['nick_name'];
      }
      return NULL;
    }
  }
?>