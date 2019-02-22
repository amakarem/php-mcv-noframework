<?php
if (!defined('APP_PATH')) die ('No direct script access allowed');
class Users extends DB {
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
    } else {
      return $this->select("SELECT * FROM `tasks`");
    }
  }
}
?>