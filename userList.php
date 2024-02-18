<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Web-Dev-#9 Igor_Malov" content="Author">
    <link rel="stylesheet" href="CSS/styleAssign2.css" type="text/css">
    <link rel="stylesheet" href="./CSS/styleUserList.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>My List</title>
</head>

<body>
    <!-- header for navigation bar -->
    <header>
        <nav class=" nav-bar">
                <!-- navigation bar logo is refered to WiX https://www.wix.com/ -->
                <img src="images/nochapters.png" alt="company-logo" class="nav-logo">
            <div class="nav-links">
                <a href="index.php" id="home">Home</a>
                <a href="Description.php" id="novels">Novels</a>
                <a href="#contact">Contact</a>
                <a href="./sign-out.php" id="sign-out">Sign Out</a>
            </div>
        </nav>
    </header>

    <section class="cart_section">
        <div class="container">
            <table>

                <caption>My List for <?= $_COOKIE['userName'] ?></caption>
                <thead>
                    <tr>
                        <th scope="col">Novel</th>
                        <th scope="col">Author</th>
                        <th scope="col">Publish Year</th>
                        <th scope="col"> </th>

                    </tr>
                </thead>
                <tbody>

                    <?php

                    require_once('dbConnection.php');

                    // function for the connection to database
                    $my_db = dbConnect();

                    $current_userName = $_COOKIE['userName'];
                    $current_userID = $_COOKIE['userID'];

                    // cretae query which will be use to find current user and his book lists in database
                    $sql = "SELECT novels.novel_id, novels.novel_title, novels.novel_author, novels.novel_publish_year FROM novels 
                    INNER JOIN users ON  novels.user_id = users.user_id 
                    WHERE users.user_id  = '$current_userID'
                    GROUP BY novels.novel_id";

                    // run query in my_db and save result in $result
                    $result = $my_db->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo
                            "<tr>
                            <td data-label=\"Novel\">" . $row["novel_title"] . "</td>
                            <td data-label=\"Author\">" . $row["novel_author"] . "</td>
                            <td data-label=\"Publish Year\">" . $row["novel_publish_year"] . "</td>
                            <td data-label=\"\">" . "<a href=\"deleteList.php?id=" . $row["novel_id"] . "\"><button type=\"button\" class=\"myBtn_order_page\">Delete</button></a></td>
                            </tr>
                            </form>";
                        }
                    }

                    ?>

                </tbody>
            </table>

            <div class="button_container_order_page">
                <a href="./newList.php"><button type="button" id="new_list" class="myBtn_order_page">create new list</button></a>
                <a href="./Description.php"><button type="button" id="recomendation" class="myBtn_order_page">view recommendation</button></a>
            </div>
        </div>


    </section>
    <footer>
        <div id="contact">
            <h3>Contact</h3>
            <p class="footer-p"><span class="material-icons">business</span>555 Woodroffe Ave. Ottawa Ontario</p>
            <p class="footer-p"><span class="material-icons">phone</span>613-222-****</p>
            <p id="footer-mail" class="footer-p"><span class="material-icons">mail</span>support@nochapters.com</p>
            <p class="footer-p" id="copyright">NoChapters © 2022</p>
        </div>
    </footer>
</body>

</html>