<?php
if (!defined('APP_PATH')) {
    die('No direct script access allowed');
}

$page_title = "Login";
require "layout/header.php";
?>



<?php
// Processing form data when form is submitted
if (!empty($_POST['username'])){
    require "../model/database.php";
    require "../controller/users.php";
    $users = new Users();
    foreach ($users->login() as $u) {
        if(isset($u['username'])) {
            $_SESSION["loggedin"] = true;
            header('Location: ' . 'tasks'); 
        }
    }
}
?>

<div class="container">
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>
        <form action="login" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>

        </form>
</div> 

<?php
require "layout/footer.php";
?>