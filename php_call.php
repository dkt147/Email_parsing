<?php
include 'config.php';
session_start();
$id = $_POST["id"];
$query = "SELECT * FROM product where id = $id";
$result = mysqli_query($db,$query);

while($row = mysqli_fetch_assoc($result)){
    $data[] = $row;
    $_SESSION["products"][] = $row;
}

print(json_encode($data[0]));
?>