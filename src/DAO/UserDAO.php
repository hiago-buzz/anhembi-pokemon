<?php
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
      $p_sql->execute();
      
      return $connect->getInstance()->lastInsertId();
     
    }

    public function update(User $user, $id){
      $sql = "UPDATE users SET
        nick_name = COALESCE(:nick_name, nick_name),
        full_name = COALESCE(:full_name, full_name),
        gender = COALESCE(:gender, gender),
        bio = COALESCE(:bio, bio),
        update_in = COALESCE(:update_in, update_in)
        WHERE id = :id
      ";

      $connect = new Connect();
      $p_sql = $connect->getInstance()->prepare($sql);

      $p_sql->bindValue(":nick_name", $user->getNickname());
      $p_sql->bindValue(":full_name", $user->getFullName());
      $p_sql->bindValue(":gender", $user->getGender());
      $p_sql->bindValue(":bio", $user->getBio());
      $p_sql->bindValue(":update_in", $user->getUpdateIn());
      $p_sql->bindValue(":id", $id);
      return $p_sql->execute();
    }

    public function getUser($id){
      $sql = "SELECT
        us.id,
        us.bio, 
        DATE_FORMAT(us.birth_date,'%Y-%m-%d') as birthDate,
        us.create_in as createIn,
        us.email,
        us.full_name as fullName,
        us.gender, 
        us.nick_name as nickName, 
        sq.Pokemon_id as pokemonId,
        sq.name as pokemonName
       FROM users us 
       INNER JOIN squads sq ON sq.User_id = us.id AND sq.favorite = 1 AND sq.status = 1
       WHERE us.id = :id 
       AND us.status = 1";

      $connect = new Connect();
      $p_sql = $connect->getInstance()->prepare($sql);
      $p_sql->bindValue(":id", $id);

      $p_sql->execute();
      $response = $p_sql->fetchObject();
      return $response;
    }

    public function delete($id){
      $sql = "DELETE FROM users WHERE id = :id";
      $connect = new Connect();
      $p_sql = $connect->getInstance()->prepare($sql);
      $p_sql->bindValue(":id", $id);
      return $p_sql->execute();
    }
    public function login($user){
      $sql = "SELECT nick_name, id FROM users WHERE email = :email AND password = :password AND status = 1";

      $connect = new Connect();
      $p_sql = $connect->getInstance()->prepare($sql);

      $p_sql->bindValue(":email", $user['email']);
      $p_sql->bindValue(":password", md5($user['password']));
      $p_sql->execute();
      $response = $p_sql->fetchAll();
      if(!empty($response)){
        return $response[0];
      }
      return NULL;
    }
  }
?>