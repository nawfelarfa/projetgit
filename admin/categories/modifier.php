<?php
session_start();
$id=$_POST['idc'];
$nom=$_POST['nom'];
$description=$_POST['description'];
$date_modification=date("Y-m-d");
include"../../inc/fonction.php";
$res=modifcat($id,$nom,$description,$date_modification);
if($res){
    header('location:liste.php?modif=ok');
}
?>