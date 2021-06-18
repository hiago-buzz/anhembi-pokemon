<?php

class Pokemon {

  private $favorite;
  private $user_id;
  private $pokemon_id;
  private $name;
  private $create_in;
  private $update_in;
  private $status;

  public function getFavorite(){
    return $this->favorite;
  }

  public function setFavorite($favorite){
    $this->favorite = $favorite;
  }

  public function getUserId(){
    return $this->user_id;
  }

  public function setUserId($user_id){
    $this->user_id = $user_id;
  }

  public function getPokemonId(){
    return $this->pokemon_id;
  }

  public function setPokemonId($pokemon_id){
    $this->pokemon_id = $pokemon_id;
  }

    public function getPokemonName(){
    return $this->name;
  }

  public function setPokemonName($name){
    $this->name = $name;
  }

  public function setCreateIn($create_in){
    $this->create_in = $create_in;
  }
  
  public function getCreateIn(){
    return $this->create_in;
  }

  public function setUpdateIn($update_in){
    $this->update_in = $update_in;
  }
  
  public function getUpdateIn(){
    return $this->update_in;
  }

  public function setStatus($status){
    $this->status = $status;
  }
  
  public function getStatus(){
    return $this->status;
  }
}