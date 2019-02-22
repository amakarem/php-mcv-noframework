<?php
if (!defined('APP_PATH')) die ('No direct script access allowed');
switch ($request) {
    case '/' :
        require  '../views/index.php';
        break;
    case '/users' :
        require  '../views/users.php';
        break;
    case '/about' :
        require  '../views/about.php';
        break;
    default: 
        require  '../views/404.php';
        break;
}