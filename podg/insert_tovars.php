<?php
include "bdconnect.php";
$name=$_POST["name"];
$cena=$_POST["cena"];
$date=$_POST["kol"];
$id_cat=$_POST["category"];

$sql="INSERT INTO tovars(name,id_cat,cena,date) VALUES ('$name','$id_cat','$cena','$date')";
$result = mysqli_query($link, $sql) or die ("Query failed");
Header("location: index.php");
?>