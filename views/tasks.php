<?php
if (!defined('APP_PATH')) die ('No direct script access allowed');
$page_title = "Users List";
require "layout/header.php";
?>


<div class="contaner">
<table width="100%">
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

$users = new Users();
foreach ($users->getall() as $u) {
    echo "<tr>";
    echo "<td><a href='task?id=" . $u['id'] . "'> " . $u['id'] . "</td>";
    echo "<td>" . $u['name'] . "</td>";
    echo "<td>" . $u['username'] . "</td>";
    echo "<td>" . $u['email'] . "</td>";
    if($u['status'] = 1) {
        echo "<td> Active </td>";
    } else {
        echo "<td>Not Active </td>";
    }
    echo "<td><a href='task?id=" . $u['id'] . "'> View </td>";
    echo "</tr>";
}
?>
</table>
</div>


<?php
require "layout/footer.php";
?>