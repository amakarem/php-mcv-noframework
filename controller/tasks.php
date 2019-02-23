<?php
if (!defined('APP_PATH')) {
    die('No direct script access allowed');
}

class Tasks extends DB
{

    public function pages()
    {   
        global $get_order;
        global $results_per_page;
        $count = $this->select("SELECT count(id) as total FROM `tasks`");
        $total = $count[0]["total"];
        echo "<h4>Page ";
        $pages = ceil($total / $results_per_page);
        if (isset($get_order['sort'])) { $sortoption = 'sort=' . $get_order['sort']; }
        if (isset($get_order['desc'])) { $sortoption = $sortoption . "&desc=1"; }
        for ($i=1; $i<=$pages; $i++) { 
            if (isset($sortoption)) { 
                echo "<a href='?".$sortoption."&page=".$i."'>".$i."</a> ";
            } else {
                echo "<a href='?page=".$i."'>".$i."</a> ";
            } 
        }; 
        echo "</h4><p>Total tasks in all pages: ".$total. "</p>";
    }

    public function getall()
    {
        global $get_order;
        global $results_per_page;
        if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
        $start_from = ($page-1) * $results_per_page;
        if (isset($get_order['sort'])) {
            $sortoption = "ASC";
            if (isset($get_order['desc'])) {
                $sortoption = "DESC";
            }
            return $this->select("SELECT * FROM `tasks` order by " . $get_order['sort'] . " " . $sortoption ." LIMIT " .$start_from .", ".$results_per_page);
        } else {
            return $this->select("SELECT * FROM `tasks` LIMIT ".$start_from .", ".$results_per_page);
        }
    }

    public function view()
    {
        global $get_order;
        if (isset($get_order['id'])) {
            return $this->select("SELECT * FROM `tasks` where id = " . $get_order['id']);
        }
    }

    public function newtask()
    {
        $name = $_POST['name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $task = $_POST['details'];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return $this->insert("INSERT INTO `tasks` (`name`, `username`, `email`, `task`) VALUES ('" . $name . "', '" . $username . "', '" . $email . "', '" . $task . "')");
        } else {
            echo ("<div class='alert alert-danger'><strong>ERROR: </strong>$email is not a valid email address</div>");
        }
    }

    public function edittask()
    {
        global $get_order;
        if (isset($get_order['id'])) {
            $id = $get_order['id'];
            $name = $_POST['name'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $task = $_POST['details'];
            $status = $_POST['status'];
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return $this->update("update `tasks` set name ='" . $name . "', username = '" . $username . "', email ='" . $email . "', task = '" . $task . "', status = '" . $status . "' where id='" . $id . "'");
            } else {
                echo ("<div class='alert alert-danger'><strong>ERROR: </strong>$email is not a valid email address</div>");
            }
        }
    }
}
