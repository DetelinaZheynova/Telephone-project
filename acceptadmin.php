<!DOCTYPE html>
<html lang="en">
<head>    
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>Login Form</title>
  
</head>
<body>

<div class="login-form">
    <h2>Login</h2>
    <form action="" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        
        <input type="submit" value="Login">
    </form>
</div>

<?php
include 'databasephone.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check credentials
    if ($username == 'admin' && $password == 'isu@2021') {
        header("Location: phoneadd.php");
    } else {
        echo "You are not permitted to add new data to the database";
    }
}
?>

</body>
</html>