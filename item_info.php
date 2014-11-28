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
        
        <?php
            require ('includes/connect_db.php');
            require ('includes/helpersEX.php');

            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                
                if (isset($_GET['id'])) {
                    show_record($dbc, $_GET['id']);
                }
            }
        ?>
        
    </body>
</html>