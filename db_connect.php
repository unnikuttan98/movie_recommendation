<?php
include("dbcon.php");
if (isset($_POST['submit'])) {
    if (empty($_POST['search'])) {
       header("Location:connect.php");
    }
    else{
        $name=$_POST['search'];
        $insert=$link->query("INSERT INTO users values('','$name','not updated','not updated')");
        if ($insert==true) {
            header("Location:home.php");
        }
        if ($insert==false) {
           echo("$link->error");
        }
    }
}
if (isset($_POST['back'])) {
    header("Location:home.php");
}
?>