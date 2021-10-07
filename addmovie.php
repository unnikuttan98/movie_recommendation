<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <h1><center>PRODUCT/MOVIE RECOMMENDATION SYSTEM</center></h1>
    </div>
    <div class="button">
        <form action="db_movie.php" method="post">&nbsp;&nbsp;
        <input type="submit" value="Add Products/Movies" name="add_user" id="left">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="submit" value="Back" name="back" id="right1">
    </div>
    <?php
    include("dbcon.php");
    $take=$link->query("SELECT user_id FROM users");
    while ($cell=$take->fetch_object()) {
        $index=$cell->user_id;
        if (isset($_POST['movie_'.$index])) {
            $user=$_POST['user'.$index];
            echo("<input type='hidden' name='name1' value='$user' onload='on()'>");
            echo("<script src='none.js'>

                 </script>");
        }
        if (isset($_POST['show_'.$index])) {
            $con=$_POST['user'.$index];
            include("dbcon.php");
            $take=$link->query("SELECT user_id FROM users");
            while ($node=$take->fetch_object()) {
                $ind=$node->user_id;
                if ($ind==$con) {
                    $user1=$_POST['user'.$ind];
                    $x="$user1";
                    $fh=fopen("movie.txt","w");
                    fwrite($fh,$x);
                    fclose($fh);
                }
        }
            header("Location:showmovies.php");
        }
        if (isset($_POST['recom_'.$index])) {
                $check=$_POST['user'.$index];
                include("dbcon.php");
                $host=$link->query("SELECT user_id FROM users");
                while ($code=$host->fetch_object()) {
                    $pak=$code->user_id;
                    if ($pak==$check) {
                        $use=$_POST['user'.$pak];
                        $y="$use";
                        $fl=fopen("recom.txt","w");
                        fwrite($fl,$y);
                        fclose($fl);
                    }
                }
                header("Location:recomm.php");
        }
    }
    ?>
      <div class='content' id='nob'><br>
              <label>Movie Name</label>
              <input type='text' name='movie_name' id='input_m'><br>
              <label>Movie Rating</label>
              <input type='text' name='movie_rating' id='input_m'><br>
              <input type='submit' name='submit' value='submit' id='btn1'></form>
       </div>

