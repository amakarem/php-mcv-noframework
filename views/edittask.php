<?php
if (!defined('APP_PATH')) {
    die('No direct script access allowed');
}

$page_title = "View Task";
require "layout/header.php";
?>


<div class="container">

<form action="" method="post">

<?php
if (isset($get_order['id'])) {
    require "../model/database.php";
    require "../controller/tasks.php";

    if (!empty($_POST['submit'])) {
        $tasks = new Tasks();
        $tasks->edittask();
    }


    $tasks = new Tasks();
    foreach ($tasks->view() as $u) {
?>
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="<?php echo $u['name']; ?>">
            </div>
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $u['username']; ?>">
            </div>
            <div class="form-group">
                <label>email</label>
                <input type="text" name="email" class="form-control" value="<?php echo $u['email']; ?>">
            </div>
            <div class="form-group">
                <label>Status</label>
                <select name="status">
                <option value="0" <?php if ($u['status'] == 0) { echo "selected";} ?>>Active</option>
                <option value="1" <?php if ($u['status'] == 1) { echo "selected";} ?>>Not Active</option>
                </select>
            </div>
            <div class="form-group">
                <label>Details</label>
                <textarea name="details" id="details" class="form-control" rows="5" cols="40" required><?php echo $u['task']; ?></textarea>
            </div>
            <input type="submit" name="submit" value="Save" class="btn btn-primary">
<?php
    }
}
?>

</form>
</div>


<?php
require "layout/footer.php";
?>