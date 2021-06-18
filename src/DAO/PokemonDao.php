<?php
require_once '../Data/Connect.php';


class DaoPokemon {
  
  public function create(Pokemon $pokemon){
    $sql = "INSERT INTO squads (
      favorite,
      User_id,
      Pokemon_id,
      name,
      create_in
    )
    VALUES (
      :favorite,
      :user_id,
      :pokemon_id,
      :name,
      :create_in
    )";
    
    $connect = new Connect();
    $p_sql = $connect->getInstance()->prepare($sql);

    $p_sql->bindValue(":favorite", $pokemon->getFavorite());
    $p_sql->bindValue(":user_id", $pokemon->getUserId());
    $p_sql->bindValue(":pokemon_id", $pokemon->getPokemonId());
    $p_sql->bindValue(":name", $pokemon->getPokemonName());
    $p_sql->bindValue(":create_in", $pokemon->getCreateIn());

 
    $p_sql->execute();
      
    return $connect->getInstance()->lastInsertId();
  }

  public function delete($id){
    $sql = "DELETE FROM squads WHERE User_id = :id";
    $connect = new Connect();
    $p_sql = $connect->getInstance()->prepare($sql);
    $p_sql->bindValue(":id", $id);
    return $p_sql->execute();
  }

  public function getSquad($userId){
     $sql = "SELECT
      id,
      Pokemon_id as pokemonId,
      name as pokemonName,
      favorite
       FROM squads 
       WHERE User_id = :id 
       AND status = 1";

      $connect = new Connect();
      $p_sql = $connect->getInstance()->prepare($sql);
      $p_sql->bindValue(":id", $userId);

      $p_sql->execute();
      $response = $p_sql->fetchAll(PDO::FETCH_ASSOC);
      return $response;
  }
}