<?php
error_reporting(E_ERROR | E_PARSE);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>
<body>
    <?php 
include "bdconnect.php";
if($_POST["delit"])
{
    $mass = $_POST["ud_id"];
    $i = 0;
    while($mass[$i])
  
    {
    
    $sql = "DELETE FROM tovars WHERE id=$mass[$i]";
    $result1 = mysqli_query($link,$sql) or die ("Query failed");
    $i++;
    } 
    


}?>

<h3 align = "center">Список товаров</h3>
<form method = "POST" action = "index.php">
<table class="table table-striped"> 
    <tr>
        <th>Номер</th>
        <th>Наименование</th>
        <th>Цена</th>
        <th>Дата</th>
        <th>Удалить</th>
    </tr>
    
<?php

$result = mysqli_query($link, "SELECT * FROM tovars");
while($row = mysqli_fetch_array($result))
{
    $id=$row[0];
    echo "<tr>
            
            <td>".$row["id"]."</td>
            <td>".$row["name"]."</td>
            <td>".$row["cena"]."</td>
            <td>".$row["date"]."</td>
            
            <td>"
            
?>
<input type="checkbox" name="ud_id[]" value = "<?php echo $id ?>">
<?php  echo "</td></tr>";
}
?>
</table> 
<center><input type = "submit" class="btn btn-outline-primary" name="delit" value = "удалить"></center><br>
</form>
<center><a href="vvod_tovars.php"><input type = "submit" class="btn btn-outline-primary" name="delit" value = "Добавить"></a></center>
<br>


</body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</html>







