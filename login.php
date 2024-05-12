<?php
session_start();

$host= 'localhost'; 
$dbUser= 'root';
$dbPass= '';
if(!$dbConn=mysqli_connect($host, $dbUser, $dbPass)) {
 die('Не може да се осъществи връзка със сървъра.');
}
 $sql = 'CREATE Database log_db';
 if ($queryResource=mysqli_query($dbConn,$sql))
 {
 echo "Базата данни е създадена. <br>";
 }
 else
 {
 echo "Грешка при създаване на базата данни: ";
 }
 
// Form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query database for user
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Login successful
        $_SESSION['username'] = $username;
        header("Location: site.php"); // Redirect to welcome page
    } else {
        // Login failed
        echo "Invalid username or password";
    }
}

$conn->close();
?>
