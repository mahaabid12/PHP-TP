<?php 
if ( isset ($_POST['submit'])){
    if(!empty($_POST['response'])){
       $response=$_POST['response'];
      if(isset($_COOKIE["response"])){
        echo "thank u vous avez déja voté";
      }else{
       setcookie("response",$response[0],time()+120);}
}}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sondage</title>
</head>
<body>
  <form method="POST" action="index.php">
      <label>Evaluate PHP</label><br/>
      <input type="radio" name="response[ ]" value="bon"/>Bon <br/>
      <input type="radio" name="response[ ]" value="moyen"/>Moyen <br/>
      <input type="radio" name="response[ ]" value="mauvais"/>Mauvais <br/>


      <input type="submit" name="submit" value="submit"/>

  </form>  
    
</body>
</html>