<?php
function connect(){
$servername = "localhost";
$username = "root";
$password = "";
$DBname="ecommecre";
try {
  $conn = new PDO("mysql:host=$servername;dbname=$DBname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 // echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
return $conn;
}
function getAllCategories(){
$conn = connect();
$requette ="SELECT * from categorie";
$resultat =$conn->query($requette);
$categories = $resultat->fetchAll();
//var_dump($categories);
return $categories;
}
function getAllProduit(){
  $conn = connect();
  $requette ="SELECT * from produit";
  $resultat =$conn->query($requette);
  $produits = $resultat->fetchAll();
  //var_dump($categories);
  return $produits;
  }
function searchProduits($keyword){
  
    $conn = connect();
    $requette ="SELECT * from produit WHERE nom like '%$keyword%'";
    $resultat =$conn->query($requette);
    $produits = $resultat->fetchAll();
    return $produits;
}
function getProduitById($id){
  $conn = connect();
  $requette ="SELECT * from produit where id=$id";
  $resultat =$conn->query($requette);
  $produit = $resultat->fetch();
  //var_dump($categories);
  return $produit;
  }

  function Addvisiteur($data){
    $conn = connect();
    $mphash=md5($data['mp']);
    $requette ="INSERT INTO visiteur (nom,prenom,email,mp,telephone) Values ('".$data['nom']."','".$data['prenom']."','".$data['email']."','".$mphash."','".$data['telephone']."')";
    $resultat =$conn->query($requette);
    if($resultat){
      return TRUE;
    }else{
      return FALSE;
    }
  }
  function connectvisiteur($data){
    $conn = connect();
    $email=$data['email'];
    $mphash=md5($data['mp']);
    $requette ="SELECT * from visiteur where email= '$email' And mp='$mphash'";
    $resultat =$conn->query($requette);
    $user = $resultat->fetch();
    return $user;
  }
  function connectadmin($data){
    $conn = connect();
    $email=$data['email'];
    $mphash=md5($data['mp']);
    $requette ="SELECT * from admin where email= '$email' And mp='$mphash'";
    $resultat =$conn->query($requette);
    $user = $resultat->fetch();
    return $user;

  }
  function ajoutcat($a,$b,$c,$d){
    $conn= connect();
    $requet="INSERT INTO categorie (nom,description,createur,date_creation) values ('$a','$b','$c','$d')";
    $resultat = $conn->query($requet);
    if($resultat){
      return TRUE;
    }else{
      return FALSE;
    }
  }
  
  function suprimercat($key){
    $conn = connect();
    $requette ="DELETE  from categorie where id='$key'";
    $resultat =$conn->query($requette);
    if($resultat){
      return TRUE;
    }else{
      return FALSE;
    }

  }
  function modifcat($id,$nom,$desc,$datemodif){
    $conn= connect();
    $requet="UPDATE categorie SET nom='$nom' ,description='$desc',date_modification='$datemodif' WHERE id='$id'" ;
    $resultat = $conn->query($requet);
    if($resultat){
      return TRUE;
    }else{
      return FALSE;
    }
  }
  
?>