<?php
if (!defined('APP_PATH')) die ('No direct script access allowed');
$page_title = "Tasks List";
require "layout/header.php";
?>


<div class="container">
<table class="table table-hover">
<tr>
<th><a href="tasks?sort=id">ID</a></th>
<th><a href="tasks?sort=name">Name</a></th>
<th><a href="tasks?sort=username">Username</a></th>
<th><a href="tasks?sort=email">Email</a></th>
<th><a href="tasks?sort=status">Status</a></th>
<th>View</th>
</tr>
<?php
require "../model/database.php";
require "../controller/tasks.php";

$tasks = new Tasks();
foreach ($tasks->getall() as $u) {
    echo "<tr>";
    echo "<td><a href='task?id=" . $u['id'] . "'> " . $u['id'] . "</td>";
    echo "<td>" . $u['name'] . "</td>";
    echo "<td>" . $u['username'] . "</td>";
    echo "<td>" . $u['email'] . "</td>";
    if($u['status'] == 0) {
        echo "<td> Active </td>";
    } else {
        echo "<td>Not Active </td>";
    }
    echo "<td><a class='btn btn-primary' href='task?id=" . $u['id'] . "'> View </a>";
    if($loggedin == true) {
        echo " <a class='btn btn-primary' href='edittask?id=".$u['id']."' role='button'>Edit</a>";
    }
    echo "</td></tr>";
}
?>
</table>
</div>


<?php
require "layout/footer.php";
?>