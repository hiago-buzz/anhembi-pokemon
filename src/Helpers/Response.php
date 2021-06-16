<?php

class Response {

  public function success($message, $data){
    echo '{"success": true, "message":"'.$message.'","data":"'.$data.'"}';
  }

  public function error($err){
    $err = json_encode($err);
    echo '{"success": false, "message":'.$err.'}';
  }
}