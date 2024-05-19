<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Таблица със сортирани телефони със снимки</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="Styles/Table.css" />

    <style>
        header {
            background-color: #333;
            padding: 20px;
            color: #fff;
        }
        .logo {
            max-width: 100px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #89CFF0;
        }
        img {
            max-width: 100px;
            max-height: 100px;
        }
    </style>
</head>
<body>
    <h2>Таблица със сортирани телефони<?php echo str_repeat("&nbsp;", 127); ?><img src="Images/catnocol.png" alt="Logo" class="logo" height="60px" width="60px"> </h2>
    <form action="" method="get">
        <label for="sort_by">Сортиране по:</label>
        <select name="sort_by" id="sort_by">
            <option value="brand">Марка</option>
            <option value="model">Модел</option>
            <option value="camera">Камера</option>
        </select>
        <input type="submit" value="Сортирай">
    </form>
    <?php
    // Връзка с базата данни
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "phone_db";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Проверка за връзка
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Формиране на заявката за извличане на данните
    $sort_by = isset($_GET['sort_by']) ? $_GET['sort_by'] : 'brand'; // По подразбиране сортира по марка
    $sql_search = "SELECT * FROM phone ORDER BY $sort_by";

    // Изпълнение на заявката
    $result = $conn->query($sql_search);

    // Извеждане на резултатите
    if ($result->num_rows > 0) {
        echo "<table>
                <tr>
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
            echo "<td>" . $row['camera'] .'Mpx'. "</td>";
            echo "<td>" . $row['os'] . "</td>";
            echo "<td>" . $row['internal_memory'] .'GB'. "</td>";
            echo "<td>" . $row['ram'].'GB' . "</td>";
            echo "<td><img src='" . $row['image_path'] . "' alt='Phone Image'></td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Няма намерени резултати";
    }

    $conn->close();
    ?>
    <a href="index.php">Back</a>
</body>
</html>

