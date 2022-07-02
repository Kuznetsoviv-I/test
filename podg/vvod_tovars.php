<?php
include "func.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Управление товарами</title>
</head>
<body>
<div class="container d-flex justify-content-center p-4">
  <div class="row g-6 ">
    <form action = "insert_tovars.php" method = "post" name = "form1">
      <h1>Добавление товара</h1>
      <div class="p-3 w-100 border bg-light d-flex justify-content-center">Название товара:<input type = "text" name = "name" /></div>
      <div class="p-3 w-100 border bg-light d-flex justify-content-center">Категория товара:
         <select name="category">
             <?php
             echo show_categories($row["id_cat"]);
             ?>
             </select><br></div>
      <div class="p-3 w-100 border bg-light d-flex justify-content-center">Цена товара: <input type = "number" name = "cena" /></div>
      <div class="p-3 w-100 border bg-light d-flex justify-content-center">Дата: <input type = "date" name = "kol" /></div>

    <div class="p-3 w-100 border bg-light d-flex justify-content-center"><input type = "submit" class="btn btn-outline-primary" name = "insert" value = "Добавить"; > </td></tr></div>
    </form>
  </div>
</div>
     
         

         
         
         
</body>
</html>