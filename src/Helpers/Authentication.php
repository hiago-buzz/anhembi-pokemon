<?php

class Authentication {

  public function validateSession(){
    if(!$_SESSION["user"]){
      header('location: login.php');
    }
  }
}

?>