<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Web-Dev-#9 Vinit Somaiya" content="Author">
    <title>Description</title>
    <!-- <link rel="stylesheet" href="Description.css"> -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://kit.fontawesome.com/7c8c669764.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS/Description.css">
</head>

<body>
    <header>
        <nav class=" nav-bar">
                <!-- navigation bar logo is refered to WiX https://www.wix.com/ -->
                <img src="images/nochapters.png" alt="company-logo" class="nav-logo">
            <div class="nav-links">
                <a href="index.php" id="home">Home</a>

                <?php
                if (isset($_COOKIE['userName'])) {
                    echo "<a href=\"userList.php\" id=\"novels\">My List</a>";
                }
                ?>

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

    <!-- <div id="Search-Filter"> -->
    <div id="searchSec">
        <div id="searchBar">
            <form>
                <i class="fa-solid fa-magnifying-glass"></i>
                <!-- <input id="searchContent" type="text" placeholder="Search.." onkeyup="search()"> -->
                <input id="searchContent" type="text" placeholder="Search.." onkeyup="myFunction()">
            </form>
            <!-- <button id="seachButton" type="submit">Search</button> -->
        </div>
    </div>

    <div id="filtersSec">
        <div id="filters">
            <select onchange="sort()" name="levels" id="levels">
                <option id="filter">Filter</option>
                <option id="alpha">Sort by alphabet</option>
                <!-- <option>Sort by popularity</option> -->
            </select>
        </div>
    </div>

    <section class="myFlexContainer" id="myFlexContainer">
        <ol id='list'>
            <li class="novels">
                <div class="box item1">
                    <h3>Seishun Buta Yarō</h3>
                    <img src="https://upload.wikimedia.org/wikipedia/en/thumb/d/dd/Seishun_Buta_Yar%C5%8D_light_novel_volume_1_cover.jpg/220px-Seishun_Buta_Yar%C5%8D_light_novel_volume_1_cover.jpg" alt="Seishun Buta Yarō">
                    <p>Rascal Does Not Dream of Bunny Girl Senpai, known in Japan as Seishun Buta Yarō, is a Japanese
                        light
                        novel series written by Hajime Kamoshida and illustrated by Kēji Mizoguchi <br> <br> Synopsis
                        <br>
                        Puberty
                        Syndrome is a rumoured, enigmatic condition that only affects people who are going through
                        puberty. For instance, a bunny girl appeared in front of Sakuta Azusagawa out of nowhere. Mai
                        Sakurajima, a famous youngster who is presently a senior inactive high school, is the real name
                        of
                        the bunny girl. Her attractive appearance does not appear to others for whatever reason. Sakuta
                        starts to examine his feelings for Mai as he unravels the enigma of this phenomena. Sakuta
                        explains
                        the significance of his strange meetings with women who have the aforementioned syndrome in this
                        metropolis where the heavens and seas are illuminated.
                    </p>

                    <!-- <div class="buttons itembutton"> -->
                    <button class="add">add</button>
                    <!-- <button class="unit">unit</button>
                            <button class="remove">remove</button> -->
                </div>

                <!-- </div> -->
            </li>

            <li class="novels">
                <div class="box item2">
                    <h3>Three Men in a Boat</h3>
                    <img class="novelImg" src="https://mpd-biblio-covers.imgix.net/9781466804135.jpg" alt="Three men ia a boat">
                    <p>Three Men in a Boat, published in 1889, is a humorous account by English writer Jerome K.
                        <br> <br>
                        Synopsis <br>
                        "We agree that we are overworked, and need a rest - A week on the rolling deep? - George
                        suggests
                        the river -"

                        And with the co-operation of several hampers of food and a covered boat, the three men (not
                        forgetting the dog) set out on a hilarious voyage of mishaps up the Thames. When not falling in
                        the
                        river and getting lost in Hampton Court Maze, Jerome K. Jerome finds time to express his ideas
                        on
                        the world around - many of which have acquired a deeper fascination since the day at the end of
                        the
                        19th century when this excursion was so lightly undertaken.
                    </p>

                    <!-- <div class="buttons itembutton"> -->
                    <button class="add">add</button>
                    <!-- <button class="unit">unit</button>
                            <button class="remove">remove</button> -->
                </div>
                <!-- </div> -->
            </li>

            <li class="novels">
                <div class="box item3">
                    <h3>Overlord</h3>
                    <img class="novelImg" src="https://www.readlightnovel.me/uploads/posters/overlord-ln.jpg" alt="Overlord">
                    <p>Overlord is japanese light novel series written by Kugane Maruyama and illustrated by so-bin.
                        <br> <br>
                        Synopsis <br>
                        The final hour of the popular virtual reality game Yggdrasil has come. However, Momonga, a
                        powerful
                        wizard and master of the dark guild Ainz Ooal Gown, decides to spend his last few moments in the
                        game as the servers begin to shut down. To his surprise, despite the clock having struck
                        midnight,
                        Momonga is still fully conscious as his character and, moreover, the non-player characters
                        appear to
                        have developed personalities of their own!

                        Confronted with this abnormal situation, Momonga commands his loyal servants to help him
                        investigate
                        and take control of this new world, with the hopes of figuring out what has caused this
                        development
                        and if there may be others in the same predicament.
                    </p>

                    <!-- <div class="buttons itembutton"> -->
                    <button class="add">add</button>
                    <!-- <button class="unit">unit</button>
                            <button class="remove">remove</button> -->
                </div>
                <!-- </div> -->
            </li>

            <li class="novels ">
                <div class="box item4">
                    <h3>Classroom of the Elite </h3>
                    <img class="novelImg" src="https://m.media-amazon.com/images/I/81NB1fQU0TL.jpg" alt="Classroom of the elite">
                    <p>Classroom of the Elite is a Japanese light novel series, written by Shōgo Kinugasa and
                        illustrated by
                        Shunsaku Tomose published from May 2015 to September 2019 under Media Factory's MF Bunko J
                        imprint.
                        <br> <br>
                        Synopsis <br>
                        Koudo Ikusei Senior High School is a leading prestigious school with state-of-the-art facilities
                        where nearly 100% of students go on to university or find employment. The students there have
                        the
                        freedom to wear any hairstyle and bring any personal effects they desire. Koudo Ikusei is a
                        paradise-like school, but the truth is that only the most superior of students receive favorable
                        treatment. Ayanokouji Kiyotaka is a student of D-class, which is where the school dumps its
                        "inferior" students in order to ridicule them. For a certain reason, Kiyotaka was careless on
                        his
                        entrance examination, and was put in D-class. After meeting Horikita Suzune and Kushida Kikyou,
                        two
                        other students in his class, Kiyotaka's situation begins to change.
                    </p>

                    <!-- <div class="buttons itembutton"> -->
                    <button class="add">add</button>
                    <!-- <button class="unit">unit</button>
                            <button class="remove">remove</button> -->
                    <!-- </div> -->
                </div>

            </li>

            <li class="novels ">
                <div class="box item5">
                    <h3>No game No life</h3>
                    <img class="novelImg" src="https://jw-webmagazine.com/wp-content/uploads/2020/07/No-Game-No-Life.jpg" alt="No game no life">
                    <p>No Game No Life is a Japanese light novel series by Yuu Kamiya.
                        <br> <br>
                        Synopsis <br>
                        The story of No Game, No Life centers around Sora and Shiro, a brother and sister whose
                        reputations
                        as brilliant NEET (Not in Education, Employment, or Training) hikikomori (shut-in) gamers have
                        spawned urban legends all over the Internet. These two gamers even consider the real world as
                        just
                        another "crappy game." One day, they are summoned by a boy named "God" to an alternate world.
                        There,
                        God has prohibited war and declared this to be a world where "everything is decided by
                        games"—even
                        national borders. Humanity has been driven back into one remaining city by the other races. Will
                        Sora and Shiro, the good-for-nothing brother and sister, become the "Saviors of Humanity" on
                        this
                        alternate world? "Well, let's start playing."
                    </p>
                    <!-- 
                        <div class="buttons itembutton"> -->
                    <button class="add">add</button>
                    <!-- <button class="unit">unit</button>
                            <button class="remove">remove</button> -->
                    <!-- </div> -->
                </div>


            </li>
            <li class="novels ">
                <div class="box item6">
                    <h3>Re:Zero-Starting Life in Another World</h3>
                    <img class="novelImg" src="https://upload.wikimedia.org/wikipedia/en/3/3c/Re-Zero_kara_Hajimeru_Isekai_Seikatsu_light_novel_volume_1_cover.jpg" alt="rezero">
                    <p>Re:Zero-Starting Life in Another World, often referred to simply as Re:Zero and also known as Re:
                        Life in a different world from zero, is a Japanese light novel series written by Tappei
                        Nagatsuki
                        and illustrated by Shin'ichirō Ōtsuka
                        <br><br>
                        Synopsis
                        <br>
                        When Subaru Natsuki leaves the convenience store, the last thing he expects is to be wrenched
                        from
                        his everyday life and dropped into a fantasy world. Things aren't looking good for the
                        bewildered
                        teenager, however: not long after his arrival, he is attacked by some thugs; armed with only a
                        bag
                        of groceries and a now useless cell phone, he is quickly beaten to a pulp. Fortunately, a
                        mysterious
                        beauty named Satella, in hot pursuit after the one who stole her insignia, happens upon Subaru
                        and
                        saves him. In order to thank the honest and kindhearted girl, Subaru offers to help in her
                        search,
                        and later that night, he even finds the whereabouts of that which she seeks. But unbeknownst to
                        them, a much darker force stalks the pair from the shadows, and just minutes after locating the
                        insignia, Subaru and Satella are brutally murdered.However, Subaru immediately reawakens to a
                        familiar scene—confronted by the same group of thugs, meeting Satella all over again—the enigma
                        deepens as history inexplicably repeats itself.
                    </p>

                    <!-- <div class="buttons itembutton"> -->
                    <button class="add">add</button>
                    <!-- <button class="unit">unit</button>
                            <button class="remove">remove</button> -->
                </div>
                <!-- </div> -->
            </li>
        </ol>
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

    <script src="JS/Description.js"></script>

</body>

</html>