<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Web-Dev-#9 Laurence Liu" content="Author">
    <link rel="stylesheet" href="CSS/styleAssign2.css" type="text/css">
    <link rel="stylesheet" href="CSS/signUp.css" type="text/css">
    <script src="JS/userValidation.js" defer></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Sign-up</title>
</head>

<body>
    <header>
        <nav class="nav-bar">
                <!-- navigation bar logo is refered to WiX https://www.wix.com/ -->
                <img src="images/nochapters.png" alt="company-logo" class="nav-logo">
            <div class="nav-links">
                <a href="index.php" id="home">Home</a>
                <a href="Description.php" id="novels">Novels</a>
                <a href="#contact">Contact</a>
            </div>
        </nav>
    </header>

    <!-- Sign-un form -->
    <section id="section-signUp">

        <form action="./signUp_check.php" id="signUpForm" name="signUpForm" method="post" onsubmit="return validate();">
            <p id="signUp-p">Already have an account? <a href="sign-in.php">Sign in</a></p>
            <div class="SignUpContainer">
                <h1>Sign Up</h1>
                <br>
                <div class="signUpTextfield">
                    <label for="userName"><b>User Name</b></label><br>
                    <input type="text" placeholder="User name" name="userName" id="userName">
                </div>

                <div class="signUpTextfield">
                    <label for="signUpEmail"><b>Email</b></label><br>
                    <input type="text" placeholder="Enter Email" name="email" id="signUpEmail">
                </div>

                <div class="signUpTextfield">
                    <label for="signUpPass"><b>Password</b></label><br>
                    <input type="password" placeholder="Enter Password" name="password" id="signUpPass">
                </div>

                <div class="signUpTextfield">
                    <label for="repass"><b>Re-enter Password</b></label><br>
                    <input type="password" placeholder="Re-enter Password" name="repassword" id="repass">
                </div>

                <div class="term-checkbox">
                    <input type="checkbox" name="terms" id="terms">
                    <label for="terms">I agree to the terms and conditions</label>
                </div>
                <br>
                <input type="submit" value="Sign Up" class="signUpBtn" />
                <button type="reset" class="resetBtn">Reset</button>
            </div>

        </form>
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