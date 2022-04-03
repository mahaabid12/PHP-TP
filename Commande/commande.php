<head>
  <title>Votre Commande</title>
</head>
<body>
  <?php
  $nb=0;
  if(isset($_POST['submit'])){
  if (!empty($_POST['nom'])){
    echo htmlspecialchars(($_POST['nom'])) ;
    echo "<br>";
    }

  if(!empty($_POST['prenom'])){
    echo htmlspecialchars(($_POST['prenom']));
    echo "<br>";
  }

  if(!empty($_POST['nbSandwich'])){
    $nb=$_POST['nbSandwich'];
    echo htmlspecialchars(($_POST['nbSandwich']));
    echo "<br>";
  }

  if(!empty($_POST['adresse'])){
    echo htmlspecialchars(($_POST['adresse']));
    echo "<br>";
  }

  
  if(!empty($_POST['tcha5chi5'])){
    echo htmlspecialchars(($_POST['tcha5chi5']));
    echo "<br>";
  }

  if(!empty($_POST['add'])){
    $arrayAdd=$_POST['add']; 
    $n= count($arrayAdd);
    for($i=0; $i<$n; $i++){
      echo htmlspecialchars(( $arrayAdd[$i]." "));
     
    }
    echo "<br>";
  }

  if($nb>10){
    $total= $nb*4-(($nb *4)*10)/100;
    echo ("A payer: ". $total );
    echo "<br>";
  }else{
    $total= $nb*4; 
    echo("A payer: " . $total);
    echo "<br>";

  }

  $file=$_FILES['file']; 
  $fileName=$file['name']; 
  $fileTmpName=$file['tmp_name'];
  $fileExt=explode('.', $fileName); 
   

  $fileActualExt=strtolower($fileExt[1]);
  $fileNameNew=uniqid('', true).".".$fileActualExt;
  $fileDestination='uploads/'. $fileNameNew;  
  move_uploaded_file($fileTmpName,  $fileDestination); 
  echo($fileNameNew." uploaded successfully");



  
    

  }

  ?>
 
    
</body>
</html>