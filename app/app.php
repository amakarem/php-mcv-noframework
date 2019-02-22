<?PHP
if (!defined('APP_PATH')) die ('No direct script access allowed');

$url = $_SERVER['PHP_SELF'];
$url = str_replace('index.php','',$url);
$request = $_SERVER['REQUEST_URI'];

if ($_SERVER['QUERY_STRING'] != '') {
    $get_string = $_SERVER['QUERY_STRING'];
    parse_str($get_string, $get_order);
    $request = str_replace($get_string,'',$request);
    $request = str_replace('?','',$request);
}

$request = str_replace($url,'/',$request);

require '../config.php';
require "../routes/route.php";
