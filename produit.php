<?php
include "inc/fonction.php";
$categories = getAllCategories();
if(isset ($_GET['id'])) {
    $produit = getProduitById($_GET['id']);
}


?>

 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESHOP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <?php
   
   include "inc/header.php";
   ?>
      <div class="row col-12 mt-4">
                <div class="card col-8 offset-2">
            <img src="images/<?php  echo $produit['image'] ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php  echo $produit['nom'] ?></h5>
                <p class="card-text"> <?php  echo $produit['description'] ?></p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><?php  echo $produit['prix'] ?>DT</li>
                <li class="list-group-item"><?php  echo $produit['categorie'] ?></li>
              
            </ul>
          
        </div>
    
        <?php
      include "inc/footer.php"
      ?>
    
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>