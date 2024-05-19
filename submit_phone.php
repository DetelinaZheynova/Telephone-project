<?php

include 'databasephone.php';

// Проверка дали записът вече съществува в базата данни
$sql_check = "SELECT * FROM phone WHERE brand='$brand' AND model='$model' AND camera='$camera' AND os='$os' "
        . "AND internal_memory='internal_memory' AND ram='$ram'AND image_path='$image_path'";
$result_check = $conn->query($sql_check);

if ($result_check->num_rows > 0) {
    echo "Този запис вече съществува!";
} else {
    // Добавяне на записа в базата данни
    $sql_insert = "INSERT INTO phone (brand, model, camera, os, internal_memory, ram,image_path) VALUES ('$brand', '$model', '$camera', '$os', '$internal_memory', '$ram', '$image_path')";
    if ($conn->query($sql_insert) === TRUE) {
        echo "Записът е успешно добавен!" ;
        echo "<br> Записахте $brand  $model  $camera $os $internal_memory $ram $image_path";
    } else {
        echo "Error: " . $sql_insert . "<br>" . $conn->error;
    }
}

$conn->close();
?>
<br><a href="index.php">Home</a></br>

