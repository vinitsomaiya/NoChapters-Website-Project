<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Web-Dev-#9 Kyoko Ikari" content="Author">
    <link rel="stylesheet" href="CSS/styleAssign2.css" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="JS/index.js" defer></script>
    <title>Home</title>
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
                
                <?php
                if (isset($_COOKIE['userName'])) {
                    echo "<a href=\"./sign-out.php\" id=\"sign-out\">Sign Out</a>";
                } else {
                    echo "<a href=\"sign-in.php\" id=\"sign-in\">Sign-in</a>";
                }
                ?>
            </div>
        </nav>
    </header>

    <!-- main section -->
    <section id="section-home">
        <div>
            <h2 id="noChapters">NoChapters</h2>
            <p id="p-noChapters"> At NoChapters, we believe in the power of novels.
                <br>
                We offer a platform to list your collection as well as selections of the popular novels.
                <br>
                Please enjoy your collection.
            </p>
        </div>
        <div>
            <a href="Description.php"><button id="click-selection">Selection</button></a>
            <a href="sign-up.php"><button id="click-sign-up">Sign-up</button></a>
        </div>
    </section>

    <!-- footer contact information -->
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