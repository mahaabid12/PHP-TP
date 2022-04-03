<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
    <form  action="notes.php" method="POST">
        <h5>Note</h5>
        <input  rows = "5" cols = "60" name = "note"><br>
        <input type="submit"  name="submit" value="submit"/>


</form>
    
</body>
</html>