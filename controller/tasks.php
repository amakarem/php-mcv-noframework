<?php
if (!defined('APP_PATH')) die ('No direct script access allowed');
class Tasks extends DB {
  function getall(){
    global $get_order;
    if(isset ($get_order['sort'])) {
      return $this->select("SELECT * FROM `tasks` order by ".$get_order['sort']);
    } else {
      return $this->select("SELECT * FROM `tasks`");
    }
  }

  function view(){
    global $get_order;
    if(isset ($get_order['id'])) {
      return $this->select("SELECT * FROM `tasks` where id = ".$get_order['id']);
    }
  }

  function newtask(){
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $task = $_POST['details'];
      return $this->insert("INSERT INTO `tasks` (`name`, `username`, `email`, `task`) VALUES ('".$name."', '".$username."', '".$email."', '".$task."')");
  }
}
?>