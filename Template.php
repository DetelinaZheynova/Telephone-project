<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css" />
</head>
<body>
    <div id="wrapper">
        <div id="banner"></div>
        
        <nav id="navigation">
            <ul id="nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="acceptadmin.php">Add a phone</a></li>
                <li><a href="sort.php">Compare</a></li>
                <li><a href="index_log.php">Log in</a></li>
               <li><img src="Images/catnocol.png" alt="Logo" style="width: 50px; height: 50px;"></a></li>
</ul>
        </nav>
        
        <div id="content_area">
            <?php echo $content ?>
        </div>
        
        <div id="sidebar"></div>
        
        <footer>
            <p>All rights reserved</p>
        </footer>
    </div>
</body>
</html>
