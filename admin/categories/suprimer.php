<?php
session_start();

$cat=$_GET['idc'];
include"../../inc/fonction.php";
$res=suprimercat($cat);
if ($res){
    header('location:liste.php?delete=ok');
}


?>