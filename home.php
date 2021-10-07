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
        <form action="connect.php" method="post">&nbsp;&nbsp;
        <input type="submit" value="Add Users" name="add_user" id="left">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="submit" value="Back" name="back" id="right">
        </form>
    </div> 
    <div class="content" id='nob'><br><form action="addmovie.php" method="post">
        <table>
            <tr><th>User Name</th><th>Add Movies</th><th>Show Movies</th><th>Show Recommendation</th></tr>
            <?php include("dbcon.php"); 
            $select=$link->query("SELECT name,user_id FROM users ");
            while ($row=$select->fetch_object()) {
                echo("<tr><td>$row->name</td><td>
                <input type='hidden' name='user$row->user_id' value='$row->user_id'>
                <input type='submit' name='movie_$row->user_id' value='Add Movies' 
                     id='one'>
                     </td><td><input type='submit' value='Show Movies' name='show_$row->user_id'
                     id='two'></td><td>
                     <input type='submit' value='Show Recommendation' name='recom_$row->user_id'
                     id='three'></td><tr>");
            }
            ?></form>
        </table>
    </div>

</body>
</html>