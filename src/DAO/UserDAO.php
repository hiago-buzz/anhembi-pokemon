<?php
require_once(__ROOT__.'/Model/UserModel.php');
require_once(__ROOT__.'/Data/Connect.php');

  class DAOUser{
    
    public function create(User $user){
      $sql = "INSERT INTO user (
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
  }
?>