<?php include("dbcon.php");
if (isset($_POST['submit'])) {
    if (empty($_POST['movie_name'])||empty($_POST['movie_rating'])) {
        header("Location:addmovie.php");
    }
    else{
        $user_id=$_POST['name1'];$name=$_POST['movie_name'];
        $rating=$_POST['movie_rating'];
        $insert=$link->query("INSERT INTO add_movie values('','$user_id','$name','$rating')");
        if ($insert==true) {
           header("Location:addmovie.php");
        }
    }
}
if(isset($_POST['back'])){
    header("Location:home.php");
}
if (isset($_POST['add_user'])) {
   header("Location:connect.php");
}
?>