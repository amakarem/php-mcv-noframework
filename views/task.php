<?php
if (!defined('APP_PATH')) die ('No direct script access allowed');
$page_title = "Users List";
require "layout/header.php";
?>


<div class="contaner">

<?php
require "../model/database.php";
require "../controller/tasks.php";

$users = new Users();
foreach ($users->view() as $u) {
    echo "<p><b>ID: </b>" . $u['id'] . "</p>";
    echo "<p><b>Name: </b>" . $u['name'] . "</p>";
    echo "<p><b>Username: </b>" . $u['username'] . "</p>";
    echo "<p><b>Email: </b>" . $u['email'] . "</p>";
    echo "<p><b>Status: </b>";
    if($u['status'] = 1) {
        echo "Active </p>";
    } else {
        echo "Not Active </p>";
    }
    echo "<p><b>Details: </b>" . $u['issue'] . "</p?";
}
?>

</div>


<?php
require "layout/footer.php";
?>