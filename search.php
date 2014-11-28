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
            <h1>Search for your Stuff</h1>
            <h2>If you lost something, you're in luck; this is the place to report it!</h2>
        </header>
        
        <form action="search.php">
        <table>
            <tr>
                <td>Filter by Date:</td>
                <td>
                    <select name="dates">
                        <option value = "">3 Days</option>
                        <option value = "">7 Days</option>
                        <option value = "">30 Days</option>
                        <option value = "" selected>All Time</option>
                </td>
            </tr>
            <tr>
                <td>Filter by Status:</td>
                <td>
                    <select name="status">
                    <option value = "" selected>Both</option>
                    <option value = "">Lost</option>
                    <option value = "">Found</option>
                </td>
            </tr>
            <tr>
                <td>Filter by Location:</td>
                <td>
                    <select name="locations">
                    <option value = "" selected>All Locations</option>
                    <option value = "">Byrne House</option>
                    <option value = "">Our Lady Seat of Wisdom Chapel</option>
                    <option value = "">Champagnat Hall</option>
                    <option value = "">Cornell Boathouse</option>
                    <option value = "">Donnelly Hall</option>
                    <option value = "">Dyson Center</option>
                    <option value = "">Fern Tor</option>
                    <option value = "">Fontaine Annex</option>
                    <option value = "">Fontaine Hall</option>
                    <option value = "">Fulton Street Townhouses</option>
                    <option value = "">New Fulton Townhouses</option>
                    <option value = "">Gartland Commons</option>
                    <option value = "">Greystone Hall</option>
                    <option value = "">Hancock Center</option>
                    <option value = "">Kieran Gatehouse</option>
                    <option value = "">Kirk House</option>
                    <option value = "">Leo Hall</option>
                    <option value = "">James A. Cannavino Library</option>
                    <option value = "">Longview Park</option>
                    <option value = "">Lowell Thomas Communications Center</option>
                    <option value = "">Lower Townhouses</option>
                    <option value = "">Marian Hall</option>
                    <option value = "">Marist Boathouse</option>
                    <option value = "">James J. McCann Recreational Center</option>
                    <option value = "">Midrise Hall</option>
                    <option value = "">New Townhouses</option>
                    <option value = "">St. Ann's Hermitage</option>
                    <option value = "">St. Peter's</option>
                    <option value = "">Sheahan Hall</option>
                    <option value = "">Steel Plant Art Sudios</option>
                    <option value = "">Student Center/Rotunda</option>
                    <option value = "">Tenney Stadium</option>
                    <option value = "">Tennis Pavillion</option>
                    <option value = "">Lower West Cedar Townhouses</option>
                    <option value = "">Upper West Cedar Townhouses</option>
                    </select>    
                </td>
            </tr>
        </table>
        <input type="submit" value="Submit">
        </form>
    
    </body>
</html>