<!DOCTYPE htm>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<title><?php echo $site_title. ' - '. $page_title ; ?></title>
<body>
<h1><?php echo $site_title. ' - '. $page_title ; ?></h1>



<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"></a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="./">Home</a></li>
      <li><a href="tasks">All Tasks</a></li>
      <li><a href="newtask">New Task</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
    <?php 
    session_start();
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
      echo '<li><a href="logout"><span class="glyphicon glyphicon-user"></span> logout</a></li>';
    } else {
      echo '<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>';
      echo '<li><a href="login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
    }
    ?>
    </ul>
  </div>
</nav>
