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
</form>
    </div>
    <form method="post">
<?php
$file = fopen("movie.txt","r");
$var=fread($file,filesize("movie.txt"));
fclose($file);
?>
</form>
<div id='nob'>
              <table>
              <tr><th>Movie Name</th><th>Movie Rating</th></tr>
<?php
include("dbcon.php");
$select=$link->query("SELECT * FROM add_movie");
while ($row=$select->fetch_object()) {
    if ($row->user_id==$var) {
        echo("<tr><td>$row->movie_name</td><td>$row->movie_rating</td></tr>");
    }
}
?></table></div>


