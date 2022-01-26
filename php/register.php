<?php
    session_start();

    if(isset($_SESSION['username'])):
        header("Location: ../html/index.php");
    endif;
?>

<html lang="de">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/globalStyle.css">
    <link rel="stylesheet" type="text/css" href="../css/formStyle.css">
    <link rel="stylesheet" type="text/css" href="../css/all.css">
    <link rel="stylesheet" type="text/css" href="../css/all.min.css">

    <!-- Libaries and Fonts from the Web -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" 
            integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" 
            crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://fonts.googleapis.com/css2?family=Graduate&display=swap" rel="stylesheet">

    <link rel="shortcut icon" type="image/x-icon" href="../logos/logoS.png" >

    <!-- Script from the Web -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    

    <style>
        .phpStyle {
            color: red;
        }
    </style>
    <title>Registrierung</title>
</head>


<body class="">

    
    <!-- Navigation -->
    <nav>

        <ul id="nav_menu">
            <li class="nav_logo"><a href="../html/index.php#intro" id="logoChange" class="logoLM"></a></li>
            <div class="nav_items">
                <li><a class="nav_link" href="../html/index.php#produkt">Produkt</a></li>
                <li><a class="nav_link" href="../html/index.php#sportarten">Sportarten</a></li>
                <li><a class="nav_link" href="../html/index.php#events">Events</a></li>
                <li><a class="nav_link" href="../html/index.php#aboutUs">Über Uns</a></li>
                <li><a class="nav_link" href="../html/contact.php">Kontakt</a></li>
                <hr>
                <div class="nav_logout_wrapper">
                    <a href="../php/register.php" class="signInOutBtn">Registrieren</a>
                    <a href="../php/login.php" class="signInOutBtn">Anmelden</a>
                </div>
            </div>
            <li class="nav_dm_toggle" onclick="toggleTheme()"><div id="dm-li" class="sunV2"></div></li>
            <li class="nav_toggle" id="tog-li"><i id="bars" class="fas fa-bars fa-lg"></i></li>
        </ul>

    </nav>


    <main>

        <section id="register">
            <div class="register_wrapper">

                <h1 class="sec_header">Registerierung</h1>
                <h3 class="sec_subheader">Lege in nur diesem einen Schritt deinen squadUP Account an!</h3>
                
                <div class="formular">

                    <form action="" method="POST">  
                        <?php
                            require("connect.php");

                            if(isset($_POST['submit'])):

                                $username = $_POST['username'];
                                $email = $_POST['email'];
                                $age = $_POST['age'];
                                $postalcode = $_POST['postalcode'];
                                $password = $_POST['pw'];
                                $password_repeat = $_POST['pwr'];

                                $user_query = $conn->prepare("SELECT id FROM users WHERE username = ?");
                                $user_query->bind_param('s', $username);
                                $user_query->execute();
                                $user_result = $user_query->get_result();

                                if($user_result->num_rows == 0):
                                    if($password == $password_repeat):

                                        //$password = md5($password);
                                        $insert = $conn->prepare("INSERT INTO users(username, email, password, age, postalcode) VALUES (?,?,?,?,?)");
                                        $insert->bind_param('sssii', $username, $email, $password, $age, $postalcode);
                                        $insert->execute();
                                        if ($insert !== false):
                                            echo '<span class="phpStyle">' . 'YEAH!' . '</span>';
                                            header("Location: login.php");
                                        endif;
                                    else:
                                        echo '<span class="phpStyle">' . 'Die Passwörter stimmen nicht überein!' . '</span>';  
                                    endif;
                                else:
                                    echo '<span class="phpStyle">' . 'Der Username ist  bereits vergeben!' . '</span>';
                                endif;
                            endif;  
                        ?> 

                        <input type="text" placeholder="Username *" name="username" required>
                        
                        <input type="email" placeholder="E-Mail *" name="email" required>

                        <input type="text" placeholder="Alter" name="age">

                        <input type="text" placeholder="Postleitzahl" name="postalcode">

                        <input type="password" placeholder="Passwort *" name="pw" required>
                        <input type="password" placeholder="Passwort wiederholen *" name="pwr" required>


                        <p class="terms">Mit dem anlegen eines Accounts, akzeptierst Du unsere <a href="#" class="link">
                            allgemeinen Geschäftsbedingungen und Datenschutzerklärung</a>.</p>

                        <input type="submit" name="submit" class="registerBtn" value="Registrieren">

                        <hr>

                        <p>Du bist bereits registriert? <a href="login.php" class="link">Zum Login</a></p>
                    </form>


                </div>
            </div>
        </section>
        
    </main>

    
    <footer>
        <div class="social_media">
            <a href="https://www.instagram.com/cursedcvdmemes/"><i id="footer_Icon" class="fab fa-instagram fa-lg"></i></a>
            <a href="#"><i id="footer_Icon" class="fab fa-twitter fa-lg"></i></a>
            <a href="#"><i id="footer_Icon" class="fab fa-facebook fa-lg"></i></a>
            <a href="#"><i id="footer_Icon" class="fab fa-app-store fa-lg"></i></a>
            <a href="#"><i id="footer_Icon" class="fab fa-android fa-lg" id="dlIcon"></i></a>
        </div>

        <p claas="p_footer"><i class="fa fa-copyright"></i> Copyright 2021</p>
    </footer>


    <script src="../javascript/indexJS.js"></script>

    <!-- Script from the Web -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
  

</body>

</html>

