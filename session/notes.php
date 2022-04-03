<?php
session_start();
if (isset($_POST['submit'])){
    if(!empty($_POST['note'])){
        if(empty($_SESSION['notes'])){
             $_SESSION['notes']=array();}
       array_push($_SESSION['notes'],$_POST['note']); 
       $n= count($_SESSION['notes']);
       for($i=0; $i<$n;$i++){
           echo "<div style='  
           background:#ffc;
           display:block;
           height:10em;
           width:10em;
           padding:1em;
           margin-top:20px'>".$_SESSION['notes'][$i]."</div>";
       };

    }else{
        echo("write your notes");
    }
}
?>
