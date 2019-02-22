<?php
if (!defined('APP_PATH')) die ('No direct script access allowed');
class DB {
  private $pdo = null;
  private $stmt = null;

  function __construct(){
    global $dbconfig;
    try {
      $this->pdo = new PDO(
        "mysql:host=".$dbconfig['server'].";dbname=".$dbconfig['name'].";charset=".$dbconfig['charset'], $dbconfig['username'], $dbconfig['password'], 
        [
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
          PDO::ATTR_EMULATE_PREPARES => false,
        ]
      );
    } catch (Exception $ex) { die($ex->getMessage()); }
  }

  function __destruct(){
    if ($this->stmt!==null) { $this->stmt = null; }
    if ($this->pdo!==null) { $this->pdo = null; }
  }

  function select($sql, $cond=null){
    $result = false;
    try {
      $this->stmt = $this->pdo->prepare($sql);
      $this->stmt->execute($cond);
      $result = $this->stmt->fetchAll();
    } catch (Exception $ex) { die($ex->getMessage()); }
    $this->stmt = null;
    return $result;
  }
}
?>