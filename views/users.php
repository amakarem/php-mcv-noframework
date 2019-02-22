<?php
if (!defined('APP_PATH')) die ('No direct script access allowed');
$page_title = "Users List";
require "layout/header.php";
?>


<div class="contaner">
<?php
require "../model/database.php";
require "../controller/users.php";

$users = new Users();
foreach ($users->get() as $u) {
    echo "<li>" . $u['name'] . "</li>";
}
?>
</div>


<?php
require "layout/footer.php";
?>