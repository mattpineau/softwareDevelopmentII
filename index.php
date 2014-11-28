<!DOCTYPE HTML>
<html>
    
    <head>
        <title>Limbo | Marist College</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
        <link rel="stylesheet" type="text/css" href="css/limbo_styles.css">
    </head>
    
    <body>
        <header>
            <nav>
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="lost.php">Lost Something</a>
                    </li>
                    <li>
                        <a href="found.php">Found Something</a>
                    </li>
                    <li>
                        <a href="search.php">Search</a>
                    </li>
                    <li>
                        <a href="admin.php">Admins</a>
                    </li>
                </ul>
            </nav>
            <h1>Welcome to Limbo!</h1>
        </header>
        <h2>If you lost something, you're in luck.  This is the place to report it.</h2>
        
        <?php
            require ('includes/connect_db.php');
            require ('includes/helpersEX.php');
            
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                
                if (isset($_GET['id'])) {
                    show_record($dbc, $_GET['id']);
                }
            }

            show_link_records($dbc);
            
            mysqli_close($dbc);
        ?>

    </body>
</html>