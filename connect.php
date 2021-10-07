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
        <form action="db_connect.php" method="post">&nbsp;&nbsp;
        <input type="submit" value="Add Products/Movies" name="add_user" id="left">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="submit" value="Back" name="back" id="right1">
    </div>
    <div class="content" id='nob'><br>
   <label>User Name</label>
   <input type="text" name="search" id="input_m"><br>
   <input type="submit" name="submit" value="submit" id="btn1"></form>
    </div>

</body>
</html>