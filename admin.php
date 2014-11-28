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
            <h2>Please enter your username and password.</h2>
        </header>

<!--PHP login error script here----------------------------------------------------->
        
        <?php
            if ( isset( $errors ) && !empty( $errors ) )
            {
                 echo '<p id="err_msg">Oops! There was a problem:<br>' ;
                 foreach ( $errors as $msg ) { echo " - $msg<br>" ; }
                 echo 'Please try again.</p>' ;
            }
        ?>
        
        <form action="login_action.php" method="post">
            <p>Username: <input type="text" name="username"> </p>
            <p>Password: <input type="password" name="pass"></p>
            <p><input type="submit" value="Login" ></p>
         </form>
        
    
    </body>
</html>