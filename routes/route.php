<?php
if (!defined('APP_PATH')) die ('No direct script access allowed');
switch ($request) {
    case '/' :
        require  '../views/index.php';
        break;
    case '/tasks' :
        require  '../views/tasks.php';
        break;
    case '/task' :
        require  '../views/task.php';
        break;
    case '/newtask' :
        require  '../views/newtask.php';
        break;
    case '/about' :
        require  '../views/about.php';
        break;
    default: 
        require  '../views/404.php';
        break;
}
