<?php
session_start();
class Authentication {

  public function destroySession(){
    session_destroy();
  }

  public function createSession($nick_name, $id){
    $date = new DateTime();
    $_SESSION['nick_name'] = $nick_name;
    $_SESSION['user_id'] = $id;
    $_SESSION['token'] = md5($nick_name . $date->getTimestamp());
    return $_SESSION['token'];
  }

  public function validateSession(){
    if(!$_SESSION["token"]){
      header('location: login.php');
    }
  }

  public function getNickname(){
    return $_SESSION["nick_name"];
  }

  public function getUserId(){
    return $_SESSION["user_id"];
  }

  public function setNickName($name){
    $_SESSION['nick_name'] = $name;
  }
}

?>