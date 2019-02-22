<?php
if (!defined('APP_PATH')) die ('No direct script access allowed');
class Users extends DB {
  function get(){
    return $this->select("SELECT * FROM `users`");
  }
}
?>