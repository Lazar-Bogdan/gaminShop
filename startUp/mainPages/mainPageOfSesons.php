<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8">
        <title>MainPageOfSeasons</title>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
            integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">
    </head>

    <body>
        <link rel="stylesheet" type="text/css" href="mainPageOfSesonstyle.css">
        

        <form action="mainPageofSesonsService.php" method="POST">

            <header>
                <div class="logo">
                    <h1 class="logo-text"><span>Fotball</span>GG</h1>
                </div>
                <i class="fa fa-bars menu-toggle"></i>
                <ul class="nav">
                    <li><a href="mainPageOfSesons.php">Home</a></li>
                    <li>
                        <?php
                            session_start();
                            $connect=new mysqli('localhost', 'root','', 'user_database') or die("unable to connect");
                            $username = $_SESSION['username'];

                            $rez= mysqli_query($connect, "SELECT functie FROM users WHERE username='$username'");
                            $row = mysqli_fetch_row($rez);
                            $userStatus=$row[0];
                            $userLogged=$_SESSION['loggedUser'];
                            if($userLogged!=false){
                                echo '<a href="#">
                                        <i class="fa fa-user"></i>
                                        '.$_SESSION['username'].'
                                        <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
                                        </a>
                                    <ul>';
                                        if($userStatus=="administrator"){
                                            echo '<li><a href="DASHBOARD/dashboard.php">Dashboard</a></li>';
                                        }
                                        echo '
                                        <li><a href="profile/profile.php">Profile</a></li>
                                        <li><a href="profile/settings.php">Settings</a></li>
                                        <li><a href="deadEnd.php" class="logout">Logout</a></li>
                                    </ul>';
                            }else{
                                echo '<a href="../login/login.php">Sign in</a>';
                            }

                        ?>
                    </li>
                </ul>
            </header>
            <style> 

                * {
                    box-sizing: border-box;
                    font-family: "Times New Roman";
                }
                
                body {
                    margin: 0;
                    font-family: Helvetica;
                    background-image: linear-gradient(to left, #30cfd0 0%, #330867 100%);
                    font-family: sans-serif;
                    font-weight: 100;
                }
                
                .content{
                width:auto;
                height:auto;
                }

                .Italy{
                width:auto;
                height:160px;
               
                }
                .five{
                width:auto;
                height:auto;
                background:blue;
                }

                .button-style{
                    width: 100px;
                    padding: 7px;
                    border: none;
                    border-radius: 5px;
                    color: white;
                    font-weight: bold;
                    background-color: #3a3a3a;
                    cursor: pointer;
                    outline: none;

                }

                .position{
                    margin: auto;
                    width: 10%;
                    padding: 10px;
                }
                .text-pos{
                    color:white;
                    margin: auto;
                    width: 8%;
                    padding: 10px;
                }
                .text-pos-romania{
                    color:white;
                    margin: auto;
                    width: 8%;
                    padding: 10px;
                }
                .text-pos-france{
                    color:white;
                    margin: auto;
                    width: 8%;
                    padding: 10px;
                }
                .text-pos-germany{
                    color:white;
                    margin: auto;
                    width: 8%;
                    padding: 10px;
                }
                .text-pos-spain{
                    color:white;
                    margin: auto;
                    width: 8%;
                    padding: 10px;
                }
            </style>

            <div class="content">
                <div class="Italy">
                    <div class="text-pos">
                    🇮🇹Italy🇮🇹
                    </div>
                    <div class="position">
                        <button type="submit" class="button-style" name="seriea">SERIE A</button>
                    </div>
                    <div class="position">
                        <button type="submit"class="button-style" name="serieb">SERIE B</button>
                    </div>

                </div>
                <div class="Italy">
                    <div class="text-pos-romania">
                    🇷🇴Romania🇷🇴
                    </div>
                    <div class="position">
                        
                        <button type="submit"class="button-style" name="liga1">LIGA 1</button>
                    </div>
                    <div class="position">
                        <button type="submit"class="button-style" name="liga2">LIGA 2</button>
                    </div>

                </div>
                <div class="Italy">
                    <div class="text-pos-france">
                        🇫🇷France🇫🇷
                    </div>
                    <div class="position">
                        
                        <button type="submit" class="button-style"name="ligue1">LIGUE 1</button>
                    </div>
                    <div class="position">
                        <button type="submit"class="button-style" name="ligue2">LIGUE 2</button>
                    </div>

                </div>
                <div class="Italy">
                    <div class="text-pos-germany">
                    🇩🇪Germany🇩🇪
                    </div>
                    <div class="position">
                        
                        <button type="submit"class="button-style" name="bundesliga">Bundesliga</button>
                    </div>
                    <div class="position">
                        <button type="submit" class="button-style"name="2bundesliga">2Bundesliga</button>
                    </div>

                </div>
                <div class="Italy">
                    <div class="text-pos-spain">
                        🇪🇸Spain🇪🇸
                    </div>
                    <div class="position">
                        
                        <button type="submit"class="button-style" name="laliga">La liga</button>
                        
                    </div>
                    <div class="position">
                        <button type="submit" class="button-style"name="segundaDivision">LaLiga2</button>
                    </div> 

                </div>
            </div>
                        
            
            <style>
                header {
                    background: #131313;
                    height: 66px;
                }

                header * {
                    color: white;
                }

                header .logo {
                    float: left;
                    height: inherit;
                    margin-left: 2em;
                }

                header .logo-text {
                    margin: 9px;
                    font-family: 'Candal', serif;
                }

                header .logo-text span {
                    color: #05f7ff;
                }

                header ul {
                    float: right;
                    margin: 0px;
                    padding: 0px;
                    list-style: none;
                }

                header ul li {
                    float: left;
                    position: relative;
                }

                header ul li ul {
                    position: absolute;
                    top: 66px;
                    right: 0px;
                    width: 180px;
                    display: none;
                    z-index: 88888;
                }

                header ul li:hover ul {
                    display: block;
                }

                header ul li ul li {
                    width: 100%;
                }

                header ul li ul li a {
                    padding: 10px;
                    background: white;
                    color: #444;
                }

                header ul li ul li a.logout {
                    color: red;
                }

                header ul li ul li a:hover {
                    background: #d5d6d6;
                }

                header ul li a {
                    display: block;
                    padding: 21px;
                    font-size: 1.1em;
                    text-decoration: none;
                }

                header ul li a:hover {
                    background: #006669;
                    transition: 0.5s;
                }

                header .menu-toggle {
                    display: none;
                }

                .page-wrapper {
                    min-height: 100%;
                }

                .page-wrapper a:hover {
                    color: #006669;
                }

                .popup {
                    width: 90px;
                    background-color: #141414;
                    position: relative;
                    display: inline-block;
                    cursor: pointer;
                    -webkit-user-select: none;
                    -moz-user-select: none;
                    -ms-user-select: none;
                    user-select: none;
                }
                
                /* The actual popup */
                .popup .popuptext {
                    visibility: hidden;
                    width: 130px;
                    background-color: #555;
                    color: #fff;
                    text-align: center;
                    border-radius: 6px;
                    padding: 8px 0;
                    position: absolute;
                    z-index: 1;
                    bottom: 125%;
                    left: 50%;
                    margin-left: -80px;
                }
                
                /* Popup arrow */
                .popup .popuptext::after {
                    content: "";
                    position: absolute;
                    top: 100%;
                    left: 50%;
                    margin-left: -5px;
                    border-width: 5px;
                    border-style: solid;
                    border-color: #555 transparent transparent transparent;
                }
                
                /* Toggle this class - hide and show the popup */
                .popup .show {
                    visibility: visible;
                    -webkit-animation: fadeIn 1s;
                    animation: fadeIn 1s;
                }

                .footer__container {
                    background-color: #141414;
                    padding: 5rem 0;
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                    width: 100%;
                }

                #footer__logo {
                    color: #fff;
                    display: flex;
                    align-items: center;
                    cursor: pointer;
                    text-decoration: none;
                    font-size: 2rem;
                }

                .footer__links {
                    width: 100%;
                    max-width: 1000px;
                    display: flex;
                    justify-content: center;
                }

                .footer__link--wrapper {
                    display: flex;
                }

                .footer__link--items {
                    display: flex;
                    flex-direction: column;
                    align-items: flex-start;
                    margin: 16px;
                    text-align: left;
                    width: 160px;
                    box-sizing: border-box;
                }

                .footer__link--items h2 {
                    margin-bottom: 16px;
                }

                .footer__link--items > h2 {
                    color: #fff;
                }

                .footer__link--items a {
                    color: #fff;
                    text-decoration: none;
                    margin-bottom: 0.5rem;
                }

                .footer__link--items a:hover {
                    color: #e9e9e9;
                    transition: 0.3s ease-out;
                }

                /* Social Icons */
                .social__icon--link {
                    color: #fff;
                    font-size: 24px;
                }

                .social__media {
                    max-width: 1000px;
                    width: 100%;
                }

                .social__media--wrap {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    width: 90%;
                    max-width: 1000px;
                    margin: 40px auto 0 auto;
                }

                .social__icons {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    width: 240px;
                }

                .social__logo {
                    color: #fff;
                    justify-self: start;
                    margin-left: 20px;
                    cursor: pointer;
                    text-decoration: none;
                    font-size: 2rem;
                    display: flex;
                    align-items: center;
                    margin-bottom: 16px;
                }

                .website__rights {
                    color: #fff;
                }

                @media screen and (max-width: 820px) {
                    .footer__links {
                    padding-top: 2rem;
                    }

                    #footer__logo {
                    margin-bottom: 2rem;
                    }

                    .website__rights {
                    margin-bottom: 2rem;
                    }

                    .footer__link--wrapper {
                    flex-direction: column;
                    }

                    .social__media--wrap {
                    flex-direction: column;
                    }
                }

                @media screen and (max-width: 480px) {
                    .footer__link--items {
                    margin: 0;
                    padding: 10px;
                    width: 100%;
                    }
                }
            </style>

            <div class="footer__container">
                    <div class="footer__links">
                        <div class="footer__link--wrapper">
                            <div class="footer__link--items">
                            <h2>About Us</h2>
                                <div class="popup" onclick="HowWork()">
                                    <a>How it works</a><span class="popuptext" id="HowWorks">Here you can find information about you're favorite team ! 
                                        If you are a guest, feel free to go through pages. If you are a users, don't forget to leave a comment. Finally if
                                        you are a administrator, you are the boss!
                                    </span>
                                </div>
                                <div class="popup" onclick="TermsFunction()">  
                                <a>Terms of Service</a><span class="popuptext" id="Terms">We all know that if you are already a user 
                                    you should know about this. But, for everyone, do not spam on the comment section, do not insult other users. If 
                                    things like this happens, you're account will be deleted
                                </span>
                                </div>
                                <div class="popup" onclick="ContactFunction()">  
                                <a>Contact us</a><span class="popuptext" id="Contact">For any support please contact : admin@gmail.com
                                </span>
                                </div>
                            </div>
                                
                            </div>
                    

                            <div class="footer__link--items">
                                <h2>Social Media</h2>
                                <a href="https://www.instagram.com/lazarr.bogdan/">Instagram</a> <a href="https://www.facebook.com/bogdi.lazar.5/ ">Facebook</a>
                            </div>
                            
                        
                        </div>
                    <section class="social__media">
                        <div class="social__media--wrap">
                            <div class="footer__logo">
                                <a href="mainPageOfSesons.php" id="footer__logo"><i class="fas fa-futbol"></i>FOTBALGG</a>
                            </div>
                            <p class="website__rights">© FOTBALGG 2021. All rights reserved</p>
                            <div class="social__icons">
                                <a
                                    class="social__icon--link"
                                    href="https://www.facebook.com/bogdi.lazar.5/ "
                                    target="_blank"
                                    aria-label="Facebook"
                                >
                                <i class="fab fa-facebook"></i>
                                </a>
                                <a
                                    class="social__icon--link"
                                    href="https://www.instagram.com/lazarr.bogdan/"
                                    target="_blank"
                                    aria-label="Instagram"
                                >
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a
                                    class="social__icon--link"
                                    href="https://www.linkedin.com/in/lazar-bogdan-b54952205/"
                                    target="_blank"
                                    aria-label="LinkedIn"
                                >
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </section>

            </div>

        </form>

        <script>
            function HowWork(){
                var popup=document.getElementById("HowWorks");
                popup.classList.toggle("show");
            }

            function TermsFunction(){
                var popup=document.getElementById("Terms");
                popup.classList.toggle("show");
            }
            function SupportFunction(){
                var popup=document.getElementById("Support");
                popup.classList.toggle("show");
            }
            function ContactFunction(){
                var popup=document.getElementById("Contact");
                popup.classList.toggle("show");
            }
        </script>

    </body>

</html>