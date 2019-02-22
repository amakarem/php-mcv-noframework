<?php
if (!defined('APP_PATH')) {
    die('No direct script access allowed');
}

$page_title = "New Task";
require "layout/header.php";
?>


<div class="container mt-3">

<div class="w-50">
<form action="" method="post">
<div class="form-group">
<label for="name">Name:</label>
<input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
</div>
<div class="form-group">
<label for="username">Username:</label>
<input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
</div>
<div class="form-group">
<label for="email">E-Mail:</label>
<input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
</div>
<div class="form-group">
<label for="details">Details:</label>
<textarea name="details" id="details" class="form-control" placeholder="Enter task details" rows="5" cols="40"></textarea><br>
<input type="submit">
</div>
</form>
</div>
<?php
require "../model/database.php";
require "../controller/tasks.php";

?>

</div>


<?php
require "layout/footer.php";
?>