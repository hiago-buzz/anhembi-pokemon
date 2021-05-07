<?php

class User {
  private $nick_name;
  private $full_name;
  private $gender;
  private $email;
  private $password;
  private $birth_date;
  private $bio;
  private $create_in;
  private $update_in;
  private $status;

  public function setNickname($nick_name){
    $this->nick_name = $nick_name;
  }

  public function getNickname(){
    return $this->nick_name;
  }

  public function setFullName($full_name){
    $this->full_name = $full_name;
  }
  
  public function getFullName(){
    return $this->full_name;
  }

  public function setEmail($email){
    $this->email = $email;
  }
  
  public function getEmail(){
    return $this->email;
  }
  
  public function setPassword($password){
    $this->password = md5($password);
  }
  
  public function getPassword(){
    return $this->password;
  }

  public function setGender($gender){
    $this->gender = $gender;
  }
  
  public function getGender(){
    return $this->gender;
  }

  public function setBirthDate($birth_date){
    $this->birth_date = $birth_date;
  }
  
  public function getBirthDate(){
    return $this->birth_date;
  }

  public function setBio($bio){
    $this->bio = $bio;
  }
  
  public function getBio(){
    return $this->bio;
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
?>