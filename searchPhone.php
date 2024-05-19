<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="Styles/Table.css" />
    <title>Phone Search Results</title>
</head>
<body>
<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phone_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Formulate the search query
$sql_search = "SELECT * FROM phone WHERE 1";
if (!empty($brand)) {
    $sql_search .= " AND brand='$brand'";
}
if (!empty($model)) {
    $sql_search .= " AND model='$model'";
}
if (!empty($camera)) {
    $sql_search .= " AND camera='$camera'";
}
if (!empty($os)) {
    $sql_search .= " AND os='$os'";
}
if (!empty($internal_memory)) {
    $sql_search .= " AND internal_memory='$internal_memory'";
}
if (!empty($ram)) {
    $sql_search .= " AND ram='$ram'";
}
if (!empty($image_path)) {
    $sql_search .= " AND image_path='$image_path'";
}

// Execute the query
$result = $conn->query($sql_search);

// Display the results
if ($result->num_rows > 0) {
    echo "<h2>Резултати от търсенето:</h2>";
    echo "<table border='1'>";
    echo "<tr>
            <th>Марка</th>
            <th>Модел</th>
            <th>Камера</th>
            <th>Операционна система</th>
            <th>Вътрешна памет</th>
            <th>RAM</th>
            <th>Снимка</th>
          </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['brand'] . "</td>";
        echo "<td>" . $row['model'] . "</td>";
        echo "<td>" . $row['camera'] . "</td>";
        echo "<td>" . $row['os'] . "</td>";
        echo "<td>" . $row['internal_memory'] . "</td>";
        echo "<td>" . $row['ram'] . "</td>";
        echo "<td><img src='" . $row['image_path'] . "' alt='Phone Image' style='width:100px;'></td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Няма намерени резултати";
}

$conn->close();
?>
</body>
</html>


