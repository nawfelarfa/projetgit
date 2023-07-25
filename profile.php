<?php

session_start();

if(!isset($_SESSION['nom'])){
    header("location:connexion.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
 
     <?php
       
     include "inc/header.php";
     ?>
      <div class="container">
      <h1> bienvenue <span style='text-primary'>  <?php echo $_SESSION['nom'] ?>  </span>  </h1>
    <h2>  email: <?php echo $_SESSION['email'] ?> </h2>
  
       </div>
       <?php
      include "inc/footer.php"
      ?>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>