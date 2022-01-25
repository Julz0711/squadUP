<?php
session_start();

if (!isset($_SESSION['username'])) :
    header("Location: ../html/index.php");
endif;
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/globalStyle.css">
    <link rel="stylesheet" type="text/css" href="../css/productStyle.css">
    <link rel="stylesheet" type="text/css" href="../css/registerStyle.css">
    <link rel="stylesheet" type="text/css" href="../css/factsStyle.css">
    <link rel="stylesheet" type="text/css" href="../css/sportartenStyle.css">
    <link rel="stylesheet" type="text/css" href="../css/eventsStyle.css">
    <link rel="stylesheet" type="text/css" href="../css/feedbackStyle.css">
    <link rel="stylesheet" type="text/css" href="../css/aboutusStyle.css">
    <link rel="stylesheet" type="text/css" href="../css/all.css">
    <link rel="stylesheet" type="text/css" href="../css/all.min.css">

    <!-- Libaries and Fonts from the Web -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://fonts.googleapis.com/css2?family=Graduate&display=swap" rel="stylesheet">

    <link rel="shortcut icon" type="image/x-icon" href="../logos/logoS.png">

    <!-- Script from the Web -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <title>squadUP</title>
</head>


<body class="">


    <!-- Navigation -->
    <nav>

        <ul id="nav_menu">
            <li class="nav_logo"><a href="#intro"><img id="logoChange" class="logo" src="../logos/logoLM.png"></a></li>
            <div class="nav_items">
                <li><a class="nav_link" href="#produkt">Produkt</a></li>
                <li><a class="nav_link" href="#sportarten">Sportarten</a></li>
                <li><a class="nav_link" href="#events">Events</a></li>
                <li><a class="nav_link" href="#aboutUs">Über Uns</a></li>
                <li><a class="nav_link" href="../html/contact.html">Kontakt</a></li>
                <hr>
                <div class="nav_logout_wrapper">
                    <?php echo "Hallo, " . $_SESSION['username'] . "!" ?>
                    <a href="logout.php" class="signInOutBtn">Logout</a>
                </div>
            </div>

            <li class="nav_dm_toggle" id="dm-li" onclick="toggleTheme()"><img src="../icons/svgs/SVG/sun.svg" id="sun-moon" alt="sun">
            </li>
            <li class="nav_toggle" id="tog-li"><i id="bars" class="fas fa-bars fa-lg"></i></li>
        </ul>

    </nav>


    <!-- Main Part -->
    <main class="main">

        <!-- Landing Page -->
        <section id="intro">

            <div class="sec_1">

                <div class="captions">
                    <h1 class="main_cap">Triff neue Freunde!
                        Findet Euer Team!
                        Überwinde Deinen Schweinehund!
                    </h1>
                    <h6 class="sub_cap">
                        squadUP ist die App, um neue Sportsfreunde kennenzulernen und gemeinsam
                        Spaß zu haben. Hol dir die kostenlose App noch heute und beginne deine Reise…
                    </h6>
                </div>

                <div class="buttonWrapper">
                    <button class="downloadBT">
                        <i class="fab fa-app-store fa-2x" id="dlIcon"></i>Kostenloser Download
                    </button>

                    <button class="downloadBT">
                        <i class="fab fa-android fa-2x" id="dlIcon"></i>Kostenloser Download
                    </button>
                </div>

            </div>

        </section>


        <!-- Produkt Section -->
        <section id="produkt">

            <div class="sec_app" id="brightness" data-aos="zoom-in-right" data-aos-duration="1000">

                <div class="textbox">
                    <h4 class="text_left">
                        Bleib motiviert!
                    </h4>
                    <p class="text_left">
                        Dir fällt es schwer am Ball zu bleiben? Mit nur einem Klick findest du
                        deine Sportpartner*Innen. Zusammen sportlich sein macht nicht nur Spaß,
                        sondern fördert auch deine Gesunheit und dein Sozialbedürfnis!
                        squadUP bringt euch zusammen.
                    </p>
                </div>

                <div class="picbox">
                    <img class="sec_pics" src="../pics/football.png">
                </div>

            </div>

            <div class="sec_app" data-aos="zoom-in-left" data-aos-duration="1000">

                <div class="picbox">
                    <img class="sec_pics" src="../pics/volleyball.png">
                </div>

                <div class="textbox">
                    <h4 class="text_right">
                        Schließ’ dich an!
                    </h4>
                    <p class="text_right">
                        squadUP zeigt dir Treffen in deiner Nähe an. Wo wirst du mitmachen?
                        Deine Möglichkeiten sind unbegrenzt. Jeder kann öffentliche Treffen in den
                        Kalender eintragen, zu denen alle zusagen können, die möchten.
                    </p>
                </div>

            </div>

            <div class="sec_app" id="brightness" data-aos="zoom-in-right" data-aos-duration="1000">

                <div class="textbox">
                    <h4 class="text_left">
                        Finde was du suchst!
                    </h4>
                    <p class="text_left">
                        Benutze die Suchleiste und ihre vielen Filter um deine Sportarten,
                        als auch Treffen, schnell zu finden. Gefunden? Dann markiere sie mit
                        einem Sternchen, um sie schnell wiederzufinden. Richte die App ganz
                        nach deinen Wünschen ein und pinne Treffen an deine Startseite.
                    </p>
                </div>

                <div class="picbox">
                    <img class="sec_pics" src="../pics/badmintonRainbow.png">
                </div>

            </div>

            <div class="sec_app" data-aos="zoom-in-left" data-aos-duration="1000">

                <div class="picbox">
                    <img class="sec_pics" src="../pics/basketball.png">
                </div>

                <div class="textbox">
                    <h4 class="text_right">
                        Sammel Punkte!
                    </h4>
                    <p class="text_right">
                        Nach einiger Zeit der Isolierung haben wir alle sozial einbußen müssen.
                        Ständige Isolierung senkt unser Sozialbedürfnis. Trefft euch in den
                        Turnhallen und Sportplätze ausgewählter Vereine und sammelt mit jeder
                        sportlichen Veranstaltung Punkte und holt euch Preise!
                    </p>
                </div>

            </div>
        </section>


        <!-- Sportarten Section -->
        <section id="sportarten">

            <div class="spa_catalog" id="brightness">

                <h1 class="sec_header">Sportarten</h1>

                <div class="spa_boxes">

                    <div class="spa_container">
                        <h2 class="spa_header">Fußball</h2>
                        <img src="../icons/svgs/SVG/football.svg" class="spa_icons">
                        <p class="spa_p">
                            Spieler pro Team: 1 - 11
                        </p>
                        <p class="spa_p">
                            Fußball ist ein Ballsport, bei dem du mit nur einem Freund oder zwei Mannschaften
                            gegeneinander antrittst. Ziel ist es, den Ball im Tor des Gegners unterzubringen.
                            Die Torhüter dürfen den Ball in ihrem jeweiligen Strafraum in die Hand nehmen.

                        </p>
                    </div>

                    <div class="spa_container">
                        <h2 class="spa_header">Basketball</h2>
                        <img src="../icons/svgs/SVG/basketball.svg" class="spa_icons">
                        <p class="spa_p">
                            Spieler pro Team: 1 - 5
                        </p>
                        <p class="spa_p">
                            Basketball ist ein technisch und taktisch anspruchsvolles Ballspiel, bei dem
                            zwei Mannschaften mit mindestens zwei Spielenden gegeneinander antreten. Ziel ist es,
                            den Ball in den 3,05 Meter hohen Korb des Gegners zu werfen. Viele verschiedene
                            Minispiele, wie das bekannte "HORSE", bei dem man Körbe des anderen imitieren muss,
                            machen den Sport ebenfalls attraktiv.

                        </p>
                    </div>

                    <div class="spa_container">
                        <h2 class="spa_header">Volleyball</h2>
                        <img src="../icons/svgs/SVG/volleyball.svg" class="spa_icons">
                        <p class="spa_p">
                            Spieler pro Team: 2 - 6
                        </p>
                        <p class="spa_p">
                            Volleyball ist ein Ballspiel, das sowohl zu den Mannschafts- als auch zu den
                            Rückschlagsportarten gehört. Zwei Teams mit mindestens je zwei Spielern baggern,
                            pritschen oder schmettern den Ball "volley" über ein Netz in der Spielfeldmitte.
                            Ziel ist es, den Ball im gegnerischen Spielfeld auf den Boden zu befördern
                            und so zu punkten. Die Beach-Volleyball Variante macht den Sport noch vielseitiger.

                        </p>
                    </div>

                    <div class="spa_container">
                        <h2 class="spa_header">Badminton</h2>
                        <img src="../icons/svgs/SVG/badminton.svg" class="spa_icons">
                        <p class="spa_p">
                            Spieler pro Team: 1-2
                        </p>
                        <p class="spa_p">
                            Badminton ist ein sogenanntes Rückschlagspiel und kann mit zwei oder mehr Personen
                            gespielt werden. Ziel ist es, den Federball über ein Netz zu spielen und im
                            gegnerischen Feld so zu platzieren, dass der Gegner ihn nicht zurückspielen kann.

                        </p>
                    </div>

                    <div class="spa_container">
                        <h2 class="spa_header">Tennis</h2>
                        <img src="../icons/svgs/SVG/tennis.svg" class="spa_icons">
                        <p class="spa_p">
                            Spieler pro Team: 1 - 2
                        </p>
                        <p class="spa_p">
                            Beim Tennis stehen sich 2 Kontrahenten gegenüber und versuchen einen kleinen Ball
                            mithilfe eines Schlägers stark genug am Gegner vorbei zu befördern. Der Ball darf
                            einmal pro Seite aufprallen. Ein Netz in der Mitte erschwert das ganze zudem.

                        </p>
                    </div>

                    <div class="spa_container">
                        <h2 class="spa_header">Tischtennis</h2>
                        <img src="../icons/svgs/SVG/tabletennis.svg" class="spa_icons">
                        <p class="spa_p">
                            Spieler pro Team: 1-2
                        </p>
                        <p class="spa_p">
                            Tischtennis ist klassischerweise ein 1 gegen 1. Ähnlich wie beim Tennis wird versucht,
                            ein kleiner Ball am Gegner vorbei zuschlagen. Der große Unterschied ist allerdings,
                            dass wie der Name schon verrät an einem Tisch mit einem kleinen Netz in der Mitte gespielt
                            wird. Auch die Schläger sind deutlich kleiner. Minispiele wie "Um die Platte" machen
                            den Sport vielseitiger, da auch mehr als 2 Spieler teilnehmen können.

                        </p>
                    </div>

                    <div class="spa_container">
                        <h2 class="spa_header">Krafttraining</h2>
                        <img src="../icons/svgs/SVG/excersice.svg" class="spa_icons">
                        <p class="spa_p">
                            Spieler pro Team: 1
                        </p>
                        <p class="spa_p">
                            Durch Krafttraining und die entsprechenden Übungen wird die maximale Muskelkraft
                            gesteigert. Die Trainingsreize wirken sich dabei auf die Schnellkraft
                            (Kontraktionsfähigkeit der Muskeln) und die Kraftausdauer bei der Muskelbelastung aus.
                            Ein attraktiver Körper ist ein Bonus obendrauf.

                        </p>
                    </div>

                    <div class="spa_container">
                        <h2 class="spa_header">und viele mehr</h2>
                        <img src="../icons/svgs/SVG/skater.svg" class="spa_icons">
                        <img src="../icons/svgs/SVG/runner.svg" class="spa_icons">
                        <img src="../icons/svgs/SVG/handball.svg" class="spa_icons">
                        <!--
                        <p class="spa_p">
                            Spieler pro Team: 4 - 11
                        </p>
                        <p class="spa_p">
                            Warum der Sport Football heißt wird wohl niemand wissen, aber der USA-Nationalsport ist auch in Deutschland beliebt. 
                        </p>
                    -->
                    </div>
                </div>

            </div>

        </section>


        <!-- Events Section -->
        <section id="events">

            <div class="eve">

                <h1 class="sec_header">Offizielle Events</h1>
                <h3 class="sec_subheader">Du bist auch an offiziellen Veranstaltungen in deiner Nähe interessiert?
                    Hier kannst du herausfinden welche Events in naher Zukunft staffinden!</h3>

                <div class="eve_upcoming">

                    <div class="eve_box">
                        <!-- Date, Pic, Desc, Read more -->
                        <div class="box_date">
                            <p class="date_p_day">20</p>
                            <p class="date_p_month">APR</p>
                        </div>

                        <div class="box_pic">
                            <img src="../icons/svgs/SVG/football.svg" class="box_pic_size">
                        </div>

                        <div class="box_desc">
                            <p class="desc_desc">Fußballturnier in Paderborn. Jede Mannschaft mit mindestens 5 Spielern
                                darf teilnehmen.</p>
                            <p class="desc_time"><i class="far fa-clock"></i> 10:00 - 18:00 Uhr</p>
                            <p class="desc_time"><i class="fas fa-map-marker-alt"></i> Tulpenweg 3, 33098 Paderborn</p>
                        </div>

                        <div class="box_readmore">
                            <a><img src="../icons/svgs/SVG/Arrow-right.svg" class="box_pic_size"></a>
                        </div>

                    </div>

                    <div class="eve_box">
                        <!-- Date, Pic, Desc, Read more -->
                        <div class="box_date">
                            <p class="date_p_day">06</p>
                            <p class="date_p_month">JUN</p>
                        </div>

                        <div class="box_pic">
                            <img src="../icons/svgs/SVG/volleyball.svg" class="box_pic_size">
                        </div>

                        <div class="box_desc">
                            <p class="desc_desc">Volleyballturnier in Lippstadt. Jugendlich zwischen 12 und 18 Jahre
                                dürfen kostenlos teilnehmen.
                                Erwachsene zahlen 3€. Keine Teams vorab nötig, ansonsten eine Mannschaft anmelden.
                            </p>
                            <p class="desc_time"><i class="far fa-clock"></i> 11:00 - 20:00 Uhr</p>
                            <p class="desc_time"><i class="fas fa-map-marker-alt"></i> Blumenstraße 1, 59555 Lippstadt
                            </p>
                        </div>

                        <div class="box_readmore">
                            <a><img src="../icons/svgs/SVG/Arrow-right.svg" class="box_pic_size"></a>
                        </div>
                    </div>

                    <div class="eve_box">
                        <!-- Date, Pic, Desc, Read more -->
                        <div class="box_date">
                            <p class="date_p_day">14</p>
                            <p class="date_p_month">JUN</p>
                        </div>

                        <div class="box_pic">
                            <img src="../icons/svgs/SVG/runner.svg" class="box_pic_size">
                        </div>

                        <div class="box_desc">
                            <p class="desc_desc">Jährlicher Spenden Marathon der Stadt Soest. Keine Teilnehmer
                                Obergrenze,
                                jeder ist herzlich eingeladen.
                            </p>
                            <p class="desc_time"><i class="far fa-clock"></i> 12:00 - 19:00 Uhr</p>
                            <p class="desc_time"><i class="fas fa-map-marker-alt"></i> Rosenallee 1, 45678 Soest</p>
                        </div>

                        <div class="box_readmore">
                            <a><img src="../icons/svgs/SVG/Arrow-right.svg" class="box_pic_size"></a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Slideshow Section -->
        <section id="sportarten">

            <div class="eve_wrapper" id="brightness">

                <h3 class="sec_subheader" style="margin-top: 100px;">Hier kannst du ein paar schöne Momente vergangener Events betrachten. Hoffentlich
                    ist dein Gesicht auf dem nächsten Bild zu sehen!</h3>
                <div class="slideshow_wrapper">
                    <div class="slideshow">

                        <div class="slide s1">
                            <img src="../pics/slide1.jpg" alt="Diashow Bild 1">
                            <div class="eve_desc">
                                Fussballturnier bei Nacht in Münster. 21.01.2022
                            </div>
                        </div>
                        <div class="slide s2">
                            <img src="../pics/slide2.jpg" alt="Diashow Bild 2">
                            <div class="eve_desc">
                                Tischtennis Amateurmeisterschaft in Bielefeld. 16.12.2021
                            </div>
                        </div>
                        <div class="slide s3">
                            <img src="../pics/slide3.jpg" alt="Diashow Bild 3">
                            <div class="eve_desc">
                                Fussballturnier in Paderborn. 07.11.2021
                            </div>
                        </div>
                        <div class="slide s4">
                            <img src="../pics/slide4.jpg" alt="Diashow Bild 4">
                            <div class="eve_desc">
                                Gruppenfitness in Soest. 29.09.2021
                            </div>
                        </div>
                        <div class="slide s5">
                            <img src="../pics/slide5.jpg" alt="Diashow Bild 5">
                            <div class="eve_desc">
                                Skateboard Freestyle Amateur Cup in Lippstadt. 21.08.2021
                            </div>
                        </div>
                        <div class="slide s6">
                            <img src="../pics/slide6.jpg" alt="Diashow Bild 6">
                            <div class="eve_desc">
                                Sommerlauf in Hamm. 14.06.2021
                            </div>
                        </div>

                        <div class="slide_nav">
                            <div class="slider_arrow" onclick="nextImg(-1)">&#10096</div>

                            <label class="slide_bar" onclick="currentImg(1)"></label>
                            <label class="slide_bar" onclick="currentImg(2)"></label>
                            <label class="slide_bar" onclick="currentImg(3)"></label>
                            <label class="slide_bar" onclick="currentImg(4)"></label>
                            <label class="slide_bar" onclick="currentImg(5)"></label>
                            <label class="slide_bar" onclick="currentImg(6)"></label>

                            <div class="slider_arrow" onclick="nextImg(1)">&#10097</div>
                        </div>
                    </div>
                </div>

            </div>

        </section>


        <section id="feedback">

            <div class="feedback_container" id="brightness">

                <div class="feedback_wrapper">
                    <div class="fb_topleft">
                        <img class="fb_customer" src="../icons/svgs/SVG/human.svg" alt="Kundenbild">
                    </div>
                    <div class="fb_topright">
                        <h4 class="fb_header">Max Mustermann</h4>
                        <div class="img_container"><img src="../icons/svgs/SVG/Rating5.svg" alt="5 stars"></div>
                        <p>24.12.2021</p>
                    </div>

                    <p class="fb_text">Tolle App! Genau das habe ich gebraucht. Ich treffe mich jetzt regelmäßig
                        Freitags zum Fussball spielen und das mit Leuten die ich vorher gar nicht kannte.
                    </p>
                </div>

                <div class="feedback_wrapper">
                    <div class="fb_topleft">
                        <img class="fb_customer" src="../icons/svgs/SVG/human.svg" alt="Kundenbild">
                    </div>
                    <div class="fb_topright">
                        <h4 class="fb_header">Max Mustermann</h4>
                        <div class="img_container"><img src="../icons/svgs/SVG/Rating5.svg" alt="5 stars"></div>
                        <p>24.12.2021</p>
                    </div>

                    <p class="fb_text">Tolle App! Genau das habe ich gebraucht. Ich treffe mich jetzt regelmäßig
                        Freitags zum Fussball spielen und das mit Leuten die ich vorher gar nicht kannte.
                    </p>
                </div>

                <div class="feedback_wrapper">
                    <div class="fb_topleft">
                        <img class="fb_customer" src="../icons/svgs/SVG/human.svg" alt="Kundenbild">
                    </div>
                    <div class="fb_topright">
                        <h4 class="fb_header">Max Mustermann</h4>
                        <div class="img_container"><img src="../icons/svgs/SVG/Rating5.svg" alt="5 stars"></div>
                        <p>24.12.2021</p>
                    </div>

                    <p class="fb_text">Tolle App! Genau das habe ich gebraucht. Ich treffe mich jetzt regelmäßig
                        Freitags zum Fussball spielen und das mit Leuten die ich vorher gar nicht kannte.
                    </p>
                </div>

            </div>

        </section>


        <!-- Über Uns Section -->
        <section id="aboutUs">

            <div class="au">

                <h1 class="sec_header">Über uns</h1>

                <div class="au_text">
                    <!--       Wir sind ein junges Unternehmen, das sich aufgrund einer Aufgabenstellung im Studium
                        zusammengefunden hatte. <br>
                        Die genannte Aufgabe beinhaltete sich Gedanken zu einem Produkt zu machen, das sich mit der Gesundheit beschäftigt, <br> 
                        damit wir Logos, Zielgruppen und das Entwickeln einer passenden Website zu verinnerlichen lernen. <br> <br>
                 -->
                    Wir sind drei junge Studenten mit der Mission, Menschen mit psychischen oder körperlichen Problemen
                    für sportliche Tätigkeiten zu motivieren. <br><br>
                    Immer mehr Menschen fehlt es an sozialer Bindung, haben jedoch das Verlangen sich mit Leuten zu
                    treffen. <br>
                    Unsere Idee ist es nun die Menschen im Sport zu vereinen und Ihnen eine Grundlage - die squadUP App
                    - zu bieten.
                </div>

                <div class="au_values">

                </div>

                <div class="au_container">
                    <div class="au_teams">
                        <img src="../pics/Frey.png" alt="member">
                        <div class="au_name">Vanessa Frey</div>
                        <div class="au_desc">squadUP CEO</div>
                        <div class="au_about">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Quasi vero reiciendis tempore animi nesciunt voluptatem
                            corporis quos labore laborum.
                        </div>
                        <div class="au_social">
                            <a href="#"><i id="au_icon" class="fab fa-instagram fa-lg"></i></a>
                            <a href="#"><i id="au_icon" class="fab fa-twitter fa-lg"></i></a>
                            <a href="#"><i id="au_icon" class="fab fa-facebook fa-lg"></i></a>
                            <a href="#"><i id="au_icon" class="fab fa-github fa-lg"></i></a>
                        </div>
                    </div>

                    <div class="au_teams">
                        <img src="../pics/Julz.png" alt="member">
                        <div class="au_name">Julian Gutknecht</div>
                        <div class="au_desc">squadUP CEO</div>
                        <div class="au_about">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Quasi vero reiciendis tempore animi nesciunt voluptatem
                            corporis quos labore laborum.
                        </div>
                        <div class="au_social">
                            <a href="#"><i id="au_icon" class="fab fa-instagram fa-lg"></i></a>
                            <a href="#"><i id="au_icon" class="fab fa-twitter fa-lg"></i></a>
                            <a href="#"><i id="au_icon" class="fab fa-facebook fa-lg"></i></a>
                            <a href="#"><i id="au_icon" class="fab fa-github fa-lg"></i></a>
                        </div>
                    </div>

                    <div class="au_teams">
                        <img src="../pics/Puls.png" alt="member">
                        <div class="au_name">Niklas Puls</div>
                        <div class="au_desc">squadUP CEO</div>
                        <div class="au_about">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Quasi vero reiciendis tempore animi nesciunt voluptatem
                            corporis quos labore laborum.
                        </div>
                        <div class="au_social">
                            <a href="#"><i id="au_icon" class="fab fa-instagram fa-lg"></i></a>
                            <a href="#"><i id="au_icon" class="fab fa-twitter fa-lg"></i></a>
                            <a href="#"><i id="au_icon" class="fab fa-facebook fa-lg"></i></a>
                            <a href="#"><i id="au_icon" class="fab fa-github fa-lg"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </section>



        <div class="divBack">
            <a href="#intro">
                <img src="../icons/svgs/SVG/arrow-up2.svg" class="arrowUp" alt="arrowUP">
            </a>
        </div>



    </main>


    <!-- Footer -->
    <footer>
        <div class="social_media">
            <a href="https://www.instagram.com/cursedcvdmemes/"><i id="footer_Icon" class="fab fa-instagram fa-lg"></i></a>
            <a href="#"><i id="footer_Icon" class="fab fa-twitter fa-lg"></i></a>
            <a href="#"><i id="footer_Icon" class="fab fa-facebook fa-lg"></i></a>
            <a href="#"><i id="footer_Icon" class="fab fa-app-store fa-lg"></i></a>
            <a href="#"><i id="footer_Icon" class="fab fa-android fa-lg"></i></a>
        </div>

        <p claas="p_footer"><i class="fa fa-copyright"></i> Copyright 2021</p>
        <a class="a_footer" href="../html/Impressum.html">Impressum</a>
    </footer>



    <script src="../javascript/indexJS.js"></script>

    <!-- Script from the Web -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>

<!-- TO DO html, css, javascript

    - Nav Bar DONE
    - Footer DONE
    - Header DONE
    - Content Boxes DONE
    - Nav Bar stay on top with shadow on start scroll DONE
    - make pictures bigger on scroll
    - actual text DONE

-->