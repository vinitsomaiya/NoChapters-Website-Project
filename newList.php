<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Web-Dev-#9 Kyoko Ikari" content="Author">
    <link rel="stylesheet" href="CSS/styleAssign2.css" type="text/css">
    <link rel="stylesheet" href="CSS/newList.css" type="text/css">
    <script src="JS/newList.js" defer></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>New List</title>
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
            </div>
        </nav>
    </header>

    <!-- form for creating new lists  -->
    <section class="section-newList">
        <div class="myNewList">
            <h1>Create Your List</h1>
            <form action="createList.php" method="POST" name="newListForm" onsubmit="return validateNewList();">
                <div class="newListText">
                    <label for="newList"><b>Title</b></label>
                    <input type="text" placeholder="Enter the novel you read" name="novel_title" id="title">
                </div>
                <div class="newListText">
                    <label for="author"><b>Author</b></label>
                    <input type="text" placeholder="Enter the name of the author" name="novel_author" id="author">
                </div>
                <div class="newListText">
                    <label for="year"><b>Published Year</b></label>
                    <input type="text" placeholder="Enter the published year" name="novel_publish_year" id="year">
                </div>

                <div class="newListText">
                    <input class="newListBtn" type="submit" value="Create New List" />
                </div>
                <a class="backTolist" href="./userList.php">Go back to your list</a>
            </form>
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