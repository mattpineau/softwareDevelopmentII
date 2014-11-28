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
            <h1>Is this yours?</h1>
        </header>
        <hr>
        <h2>Item Info</h2>
        
        <table>
            <tr>
                <td>Item:</td>
                <td></td>
            </tr>
            <tr>
                <td>Status:</td>
                <td></td>
            </tr>
            <tr>
                <td>Description:</td>
                <td></td>
            </tr>
        </table>
        
        <hr>
        <h2>Location Information</h2>
        
        <table>
            <tr>
                <td>Location:</td>
                <td></td>
            </tr>
            <tr>
                <td>Date/Time:</td>
                <td></td>
            </tr>
        </table>
        
        <hr>
        <h2>Owner/Finder Information</h2>
        
        
        <table>
            <tr>
                <td>First Name:</td>
                <td></td>
            </tr>
            <tr>
                <td>Last Name:</td>
                <td></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td></td>
            </tr>
            <tr>
                <td>Cell Phone:</td>
                <td></td>
            </tr>
            <tr>
                <td>Preffered Method of Contact:</td>
                <td></td>
            </tr>
        </table>
        <form action="update.php">
            <input type="submit" value="Update Info">
        </form>
        
        <form action="claim.php">
            <input type="submit" value="Claim">
        </form>
    </body>
</html>

