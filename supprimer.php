<?php
include 'db_connexion.php';
$id = $_GET['id'];
$sql = "DELETE FROM etudiant where id= $id ";
$result = mysqli_query($conn,$sql);
header("location: liste.php")
?>