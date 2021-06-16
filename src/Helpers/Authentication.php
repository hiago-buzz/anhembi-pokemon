<?php
session_start();
class Authentication {

  public function destroySession(){
    session_destroy();
  }

  public function createSession($nick_name){
    $date = new DateTime();
    $_SESSION['nick_name'] = $nick_name;
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
}

?>