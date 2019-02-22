<?php
if (!defined('APP_PATH')) die ('No direct script access allowed');
class Users extends DB {
  function getall(){
      return $this->select("SELECT * FROM `users`");

  }

  function view(){
    global $get_order;
    if(isset ($get_order['id'])) {
      return $this->select("SELECT * FROM `users` where id = ".$get_order['id']);
    }
  }

  function login(){
    $username = $_POST['username'];
    $password = $_POST['password'];
    return $this->select("SELECT * FROM `users` where username = '".$username. "' and password = md5('".$password. "') ");
  }
}
?>