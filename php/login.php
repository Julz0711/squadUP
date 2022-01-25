<?php
    session_start();

    if(isset($_SESSION['username'])):
        header("Location: indexSession.php");
    endif;

    require("connect.php");
                        
    if(isset($_POST["submit"])):
        $username = strtolower($_POST['username']);
        $password = $_POST['pw'];
        //$password = md5($password);

        $user_query = $conn->prepare("SELECT id FROM users WHERE username = ? AND password = ?");
        $user_query->bind_param('ss', $username, $password);
        $user_query->execute();
        $user_result = $user_query->get_result();

        $res = $conn->prepare("SELECT username FROM users WHERE username = ? AND password = ?");
        $res->bind_param('ss', $username, $password);
        $res->execute();
        $active = $res->get_result();
        

        if($active->num_rows == 1):
            $object_query = $active->fetch_object();
            $_SESSION['username'] = $object_query->username;
        else:
            echo '<span class="phpStyle">' . 'Deine Angaben sind leider nicht korrekt.' . '</span>';
        endif;
    endif;
?>
<!Doctype html5>
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
            text-align: center;
        }
    </style>
    <title>Login</title>
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
                    <a href="../php/register.php" class="signInOutBtn">Registrieren</a>
                    <a href="../php/login.php" class="signInOutBtn">Anmelden</a>
                </div>
            </div>
            <li class="nav_dm_toggle" id="dm-li" onclick="toggleTheme()"><img src="../icons/svgs/SVG/sun.svg"
                    id="sun-moon" alt="sun">
            </li>
            <li class="nav_toggle" id="tog-li"><i id="bars" class="fas fa-bars fa-lg"></i></li>
        </ul>

    </nav>


    <main>

        <section id="register">
            <div class="register_wrapper">

                <h1 class="sec_header">Login</h1>
                <h3 class="sec_subheader">Melde dich bei deinem squadUP Konto ein!</h3>
                
                <div class="formular">

                    <form action="" method="POST">
                        <input type="text" placeholder="Username" name="username" required>
                        <input type="password" placeholder="Passwort" name="pw" required>
                        <input type="submit" name="submit" value="Login" class="registerBtn">

                        <hr>

                        <p>Du hast noch kein Account? <a href="register.php" class="link">Zur Registerierung</a></p>
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