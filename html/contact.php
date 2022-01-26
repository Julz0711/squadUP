<?php
error_reporting(0);

$message_sent = false;
if (isset($_POST['email']) && $_POST['email'] != '') {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['subject'];
    $message = $_POST['message'];

    $email_to_host = "julian.gutknecht@stud.hshl.de";
    $email_to_client = $email;

    $body = "";
    $body .= "From: " . $name . "\r\n";
    $body .= "Email: " . $email . "\r\n\r\n";
    $body .= "Message: " . $message . "\r\n";

    $body_client = "Vielen Dank für dein Feedback! Wir werden uns zeitnah 
    bei dir melden.\r\n\r\nBleib gesund, dein squadUP Team";


    mail($email_to_host, $subject, $body);
    //mail($email_to_client, $subject, $body_client);

    $message_sent = true;
}
?>




<html lang="de">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" type="text/css" href="../css/globalStyle.css">
<link rel="stylesheet" type="text/css" href="../css/contactStyle.css">
<link rel="stylesheet" type="text/css" href="../css/all.css">
<link rel="stylesheet" type="text/css" href="../css/all.min.css">

<!-- Libaries and Fonts from the Web -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<link rel="stylesheet" type="text/css" href="../css/newsport/stylesheetNewsport.css">
<link href="https://fonts.googleapis.com/css2?family=Graduate&display=swap" rel="stylesheet">

<link rel="shortcut icon" type="image/x-icon" href="../logos/logoS.png">

<!-- Script from the Web -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<title>squadUP - Kontakt</title>


<body class="">

    <!-- Navigation -->
    <nav>

        <ul id="nav_menu">
            <li class="nav_logo"><a href="index.php#intro" id="logoChange" class="logoLM"></a></li>
            <div class="nav_items">
                <li><a class="nav_link" href="index.php#produkt">Produkt</a></li>
                <li><a class="nav_link" href="index.php#sportarten">Sportarten</a></li>
                <li><a class="nav_link" href="index.php#events">Events</a></li>
                <li><a class="nav_link" href="index.php#aboutUs">Über Uns</a></li>
                <li><a class="nav_link" href="#">Kontakt</a></li>
                <hr>
                <div class="nav_logout_wrapper">
                    <a href="../php/register.php" class="signInOutBtn">Registrieren</a>
                    <a href="../php/login.php" class="signInOutBtn">Anmelden</a>
                </div>
            </div>
            <li class="nav_dm_toggle" onclick="toggleTheme()">
                <div id="dm-li" class="sunV2"></div>
            </li>
            <li class="nav_toggle" id="tog-li"><i id="bars" class="fas fa-bars fa-lg"></i></li>
        </ul>

    </nav>


    <!-- Main Part -->
    <main class="main">

        <?php
        if ($message_sent) :
        ?>

            <div class="success_wrapper">
                <h3 class="section_subheader">
                    Vielen Dank für deine Nachricht!<br>
                    Wir werden uns bei Bedarf schnellstmöglich zurückmelden.
                </h3>
                <a href="index.php" class="backHomeBtn">Zurück zur Startseite</a>
            </div>

        <?php
        else :
        ?>

            <section id="contact">

                <h1 class="section_header">Kontakt</h1>
                <h3 class="section_subheader">Sende uns gerne dein Anliegen und wir werden uns so schnell wie
                    möglich bei Ihnen melden. Wir freuen uns auch über jedes Feedback!
                </h3>

                <div class="contact_container">

                    <!--Left Side-->
                    <form action="contact.php" method="POST" id="contact_form" class="form_hz">

                        <div class="form_grp">
                            <div class="form_input">
                                <input type="text" class="form_control" id="name" placeholder="Vorname Nachname" name="name" value="" required>
                            </div>
                        </div>
                        <div class="form_grp">
                            <div class="form_input">
                                <input type="email" class="form_control" id="email" placeholder="E-Mail" name="email" value="" required>
                            </div>
                        </div>
                        <div class="form_grp">
                            <div class="form_input">
                                <input type="text" class="form_control" id="subject" placeholder="Betreff" name="subject" value="" required>
                            </div>
                        </div>
                        <textarea class="form_control" rows="10" placeholder="Nachricht" name="message" required></textarea>
                        <button class="sendBtn" id="submit" type="submit" value="SEND">
                            <i class="fa fa-paper-plane"></i> Abschicken
                        </button>
                    </form>

                    <!--Right Side-->
                    <div class="contact_details">

                        <ul class="contact_ul">
                            <li class="contact_li"><i class="fa fa-map-marker fa-lg"><span class="detail_text place"> Lippstadt, NRW</span></i></li>
                            <li class="contact_li"><i class="fa fa-phone fa-lg"><span class="detail_text phone">
                                        <a href="#" title="Einfach anrufen!"> 02941 4206969</a></span></i></li>
                            <li class="contact_li"><i class="fa fa-envelope fa-lg"><span class="detail_text email">
                                        <a href="#" title="Einfach eine Mail schicken!"> support@squad.up</a></span></i></li>
                        </ul>

                        <div class="social_list">
                            <a href="https://www.instagram.com/cursedcvdmemes/"><i id="sm_icon" class="fab fa-instagram fa-lg"></i></a>
                            <a href="#"><i id="sm_icon" class="fab fa-twitter fa-lg"></i></a>
                            <a href="#"><i id="sm_icon" class="fab fa-facebook fa-lg"></i></a>
                            <a href="#"><i id="sm_icon" class="fab fa-app-store fa-lg"></i></a>
                            <a href="#"><i id="sm_icon" class="fab fa-android fa-lg"></i></a>
                        </div>

                        <div class="copyright">&copy; ALLE RECHTE VORBEHALTEN</div>

                    </div>

                </div>

            </section>
        <?php
        endif;
        ?>

    </main>



    <footer>
        <div class="social_media">
            <a href="https://www.instagram.com/cursedcvdmemes/"><i id="footer_Icon" class="fab fa-instagram fa-lg"></i></a>
            <a href="#"><i id="footer_Icon" class="fab fa-twitter fa-lg"></i></a>
            <a href="#"><i id="footer_Icon" class="fab fa-facebook fa-lg"></i></a>
            <a href="#"><i id="footer_Icon" class="fab fa-app-store fa-lg"></i></a>
            <a href="#"><i id="footer_Icon" class="fab fa-android fa-lg"></i></a>
        </div>

        <p claas="p_footer"><i class="fa fa-copyright"></i> Copyright 2021</p>
        <a class="a_footer" href="Impressum.html">Impressum</a>
    </footer>

    <script src="../javascript/indexJS.js"></script>

    <!-- Script from the Web -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>


</body>

</html>