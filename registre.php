
<?php
include "inc/fonction.php";
$categories = getAllCategories();
$produits = getAllProduit();
$ShowALerte = 0 ;
if(!empty($_POST)) 
{ 
  if (Addvisiteur($_POST))
   {
     $ShowALerte = 1 ;
    
   }
}
session_start();

if(isset($_SESSION['nom'])){
    header("location:profile.php");
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESHOP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.12/sweetalert2.css">
  </head>
<body>
<?php
   
   include "inc/header.php";
   ?>
     <div class="col-12 mt-4 p-5">
        <h1 class="text-center">
            Registre
        </h1>
        <form  action="registre.php" method="Post">
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Nom</label>
                <input type="text" name="nom" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">prenom</label>
                <input type="text" name="prenom" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">telephone</label>
                <input type="text" name="telephone" class="form-control" id="exampleInputPassword1">
              </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
              <input type="password" name="mp" class="form-control" id="exampleInputPassword1">
            </div>
           
            <button type="submit" class="btn btn-primary">Sauvgarder</button>
          </form>
     </div>

     <?php
      include "inc/footer.php"
      ?>
    
     
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.12/sweetalert2.all.js"></script>
<?php 
    if($ShowALerte == 1){
     print " 
      <script>
      Swal.fire({
      title: 'success',
      text: 'inscription effectué',
      icon: 'success',
      confirmButtonText: 'ok'
          })
      </script>";

  }
?> 
</html>