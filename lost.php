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
            <h1>So you lost something huh?</h1>
            <h2>Start by filling out some forms below to describe the item you've lost.</h2>
        </header>

        <form action="iprints.php" method="POST">
        <table>
            <tr>
                <td>What item(s) did you lose?</td><td><input type="text" name="item"></td>
            </tr>
            <tr>
                <td>Please provide any other descriptive information about the lost item(s) that may be helpful in identifying it (eg. color, model, size, etc).</td><td><input type="text" name="info"></td>
            </tr>
        </table>
        <hr>
        <h2>Continue by providing some information as to where you may have lost it (if you can remember).</h2>
        <table>
            <tr>
                <td>Where on campus might you have lost your item?</td><td>
                    <select name="Action">
                    <option>Byrne House</option>
                    <option>Our Lady Seat of Wisdom Chapel</option>
                    <option>Champagnat Hall</option>
                    <option>Cornell Boathouse</option>
                    <option>Donnelly Hall</option>
                    <option>Dyson Center</option>
                    <option>Fern Tor</option>
                    <option>Fontaine Annex</option>
                    <option>Fontaine Hall</option>
                    <option>Fulton Street Townhouses</option>
                    <option>New Fulton Townhouses</option>
                    <option>Gartland Commons</option>
                    <option>Greystone Hall</option>
                    <option>Hancock Center</option>
                    <option>Kieran Gatehouse</option>
                    <option>Kirk House</option>
                    <option>Leo Hall</option>
                    <option>James A. Cannavino Library</option>
                    <option>Longview Park</option>
                    <option>Lowell Thomas Communications Center</option>
                    <option>Lower Townhouses</option>
                    <option>Marian Hall</option>
                    <option>Marist Boathouse</option>
                    <option>James J. McCann Recreational Center</option>
                    <option>Midrise Hall</option>
                    <option>New Townhouses</option>
                    <option>St. Ann's Hermitage</option>
                    <option>St. Peter's</option>
                    <option>Sheahan Hall</option>
                    <option>Steel Plant Art Sudios</option>
                    <option>Student Center/Rotunda</option>
                    <option>Tenney Stadium</option>
                    <option>Tennis Pavillion</option>
                    <option>Lower West Cedar Townhouses</option>
                    <option>Upper West Cedar Townhouses</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>About when was the item lost? (Okay to approximate)</td>
                <td>
                    <select name="Action">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                    </select> / 
                    <select name="Action">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                        <option>13</option>
                        <option>14</option>
                        <option>15</option>
                        <option>16</option>
                        <option>17</option>
                        <option>18</option>
                        <option>19</option>
                        <option>20</option>
                        <option>21</option>
                        <option>22</option>
                        <option>23</option>
                        <option>24</option>
                        <option>25</option>
                        <option>26</option>
                        <option>27</option>
                        <option>28</option>
                        <option>29</option>
                        <option>30</option>
                        <option>31</option>
                    </select> / 
                    <select name="Action">
                        <option>2014</option>
                        <option>2015</option>
                        <option>2016</option>
                        <option>2017</option>
                        <option>2018</option>
                        <option>2019</option>
                        <option>2020</option>
                        <option>2021</option>
                        <option>2022</option>
                        <option>2023</option>
                        <option>2024</option>
                        <option>2025</option>
                    </select>
                </td>
            </tr>
        </table>
       <hr>
        <h2>Now we need some information about yourself to contact you if your lost item is found.</h2>
        <table>
            <tr>
                <td>First Name</td>
                <td>
                    <input type="text">
                </td>
            </tr>
            <tr>    
                <td>Last Name</td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td>Email Address</td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td>Phone Number</td>
                <td><input type="text"></td>
            </tr>
            <tr>    
                <td>Preferred Method of Contact</td>
                <td><select name="Action">
                    <option>Email</option>
                    <option>Cell Phone</option>
                </td>
            </tr>
        </table>
        <p><input type="submit" value="Continue"></p>
        </form>
    </body>
</html>