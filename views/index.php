<?php
if (!defined('APP_PATH')) die ('No direct script access allowed');
$page_title = "Main Page";
require "layout/header.php";
?>
<div class="container">
<h3><a href="tasks">View all tasks</a></h3>
<h3><a href="newtask">Open New tasks</a></h3>
</div>
<?php
require "layout/footer.php";
?>