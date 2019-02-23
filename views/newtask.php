<?php
if (!defined('APP_PATH')) {
    die('No direct script access allowed');
}

$page_title = "New Task";
require "layout/header.php";
?>


<div class="container mt-3">

<div class="w-50">

<?php
if (!empty($_POST['submit'])) {
require "../model/database.php";
require "../controller/tasks.php";
$tasks = new Tasks();
$tasks->newtask();
} 
?>
<form action="newtask" method="post">
<div class="form-group">
<label for="name">Name:</label>
<input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
</div>
<div class="form-group">
<label for="username">Username:</label>
<input type="text" class="form-control" id="username" placeholder="Enter username" name="username" required>
</div>
<div class="form-group">
<label for="email">E-Mail:</label>
<input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" class="form-control" id="email" placeholder="Enter email" name="email" required>
</div>
<div class="form-group">
<label for="details">Details:</label>
<textarea name="details" id="details" class="form-control" placeholder="Enter task details" rows="5" cols="40" required></textarea><br>
<input type="submit" name="submit">
</div>
</form>
</div>
</div>


<?php
require "layout/footer.php";
?>