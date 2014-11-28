<!DOCTYPE HTML>
<html>
    
    <!--PHP login error script here----------------------------------------------------->
        
        <?php # DISPLAY COMPLETE LOGGED IN PAGE.

            # Access session.
            session_start() ; 

            # Redirect if not logged in.
            if ( !isset( $_SESSION[ 'user_id' ] ) ) { 
                require ( 'login_tools.php' ) ; 
                load() ; }
        ?>
    
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
        <h2>What would you like to do?</h2>
        <form action="logout.php" style = "float:right; display;">
            <input type="submit" value="Logout">
        </form>
        <ul>
            <li><a href="adminAcctInfo.php">Edit Account Info</a></li>
            <li><a href="adminInventory.php">Get Inventory</a></li>
        </ul>
    </body>
</html>