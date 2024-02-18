<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Web-Dev-#9 Laurence Liu, Kyoko Ikari" content="Author">
    <link rel="stylesheet" href="CSS/styleAssign2.css" type="text/css">
    <link rel="stylesheet" href="CSS/signIn.css" type="text/css">
    <script src="JS/signInValidation.js" defer></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Sign-in</title>
</head>

<body>
    <?php
    if (isset($_POST['submit'])) {
        require_once('dbConnection.php');

        // function for the connection to database
        $db = dbConnect();

        // store the email and password info from user
        $email = $_POST['email'];
        $password = $_POST['password'];

        // selects the row where matches to the user email and password
        $sql = "SELECT * FROM users WHERE user_email='$email' AND user_password='$password'";
        $result = mysqli_query($db, $sql);

        // checks if there is the existence of user's email and password
        if (!(mysqli_num_rows($result) > 0)) {
            $error = "Your email or password don't exist."; 
        } elseif (!$row = mysqli_fetch_assoc($result)) {
            $error = "Your email and password don't match.";
        } else {
            //set userName for user who passed signIn form
            $userName = $row['user_name'];
            $userID = $row['user_id'];
            $db->close();

            //cookie uses to identify the user, after we set cookie webpages will be know which user currently registered
            //1) name for cookie, 2)which value to set, 3) how many seconds it will be store in memory of the website (24 hours), which pages can see that coockie(all pages) 
            setcookie('userName', $userName, time() + 3600 * 24, "/");
            // also set cookie for user id , $rowcount is a value that store id of current user
            setcookie('userID', $userID,  time() + 3600 * 24, "/");

            header("Location: ./userList.php");
        }
    }
    ?>
    <header>
        <nav class="nav-bar">
                <!-- navigation bar logo is refered to WiX https://www.wix.com/ -->
                <img src="images/nochapters.png" alt="company-logo" class="nav-logo">
            <div class="nav-links">
                <a href="index.php" id="home">Home</a>
                <a href="Description.php" id="novels">Novels</a>
                <!-- <a href="userList.php" id="list">My List</a> -->
                <a href="#contact">Contact</a>
            </div>
        </nav>
    </header>

    <!-- Sign-in form -->
    <section id="section-signIn">
        <form action="" name="form" method="post">

            <div class="SignInContainer">
                <div class="formFlex">
                    <h1>Sign In</h1>
                </div>
                <br>
                <div class="signInErr">
                <?php
                if (isset($_POST['submit'])) {
                    if (isset($error)) {
                        echo "<p style='color:red;'>"
                            . $error . "</p>";
                    }
                }
                ?>
                </div>
            </div>
            <div class="signInTextfield">
                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" id="email">
            </div>
            <br>
            <div class="signInTextfield">
                <label for="signInPass"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" id="signInPass">
            </div>
            <br>
            <div class="formFlex">
                <input class="signInBtn" type="submit" value="Sign In" name="submit" />
            </div>
            </div>
        </form>
        <br>
        <p class="formFlex" id="signIn-p">Create an account &nbsp<a href="sign-up.php">Sign Up</a></p>
        <br>
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