<!DOCTYPE htm>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
  border-right:1px solid #bbb;
}

li:last-child {
  border-right: none;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}

table, td, th {
  border: 1px solid black;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th {
  height: 50px;
}
</style>
</head>
<title><?php echo $site_title. ' - '. $page_title ; ?></title>
<body>
<h1><?php echo $site_title. ' - '. $page_title ; ?></h1>

<ul>
  <li><a href="./">Home</a></li>
  <li><a href="tasks">All Tasks</a></li>
  <li><a href="newtask">New Task</a></li>

</ul>

<hr>