<?php
function show_categories(){
    include "bdconnect.php";
    $sql = "SELECT * FROM categories";
    $result = mysqli_query($link,$sql) or die ("Query failed");
    while ($row = mysqli_fetch_array($result)){
        $array_category[$row["id_cat"]] = $row ["category"];
    };
    $str = "";
    foreach ($array_category as $key => $value){
        $str=$str. "<option value = '".$key."' >".$value."</option>";
    }
    return $str;
}
?>