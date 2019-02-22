<?PHP
if (!defined('APP_PATH')) die ('No direct script access allowed');

$url = $_SERVER['PHP_SELF'];
$url = str_replace('index.php','',$url);
$request = $_SERVER['REQUEST_URI'];
$request = str_replace($url,'/',$request);
require '../config.php';


require "../routes/route.php";
