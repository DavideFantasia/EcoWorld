<!DOCTYPE html>
<html lang="it">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>EcoWorld Homepage</title>
    <meta name="keywords" content="eco world">
    <meta name="description" content="home page of the most advance research project ever">
    <meta name="author" content="Davide Fantasia">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout ">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">

            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="index.php"><img src="images/logo.png" alt="#"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <div class="location_icon_bottum_tt">
                            <ul>
                                <li><img src="icon/loc1.png" />Location</li>
                                <li><img src="icon/email1.png" />eco.world@gmail.com</li>

                                <li><img src="icon/call1.png" />333-610-610</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 location_icon_bottum">
                       <div class="row">
                            <div class="col-md-8 ">
                                <div class="menu-area">
                                    <div class="limit-box">
                                        <nav class="main-menu">
                                            <ul class="menu-area-main">
                                                <li class="active"> <a href="sedi.php">Sedi</a> </li>
                                                <li> <a href="#about">Info</a> </li>
                                                <li><a href="#testimonial">Staff</a></li>
                                                <li>
                                                    <?php
                                                        session_start();
                                                        if(isset($_SESSION['loginInfo']['ID_utente']))
                                                            echo "<a href='/ecoWorld/userPage.php'>".$_SESSION['loginInfo']['username']."</a>";
                                                        else if(isset($_SESSION['loginInfo']['ID_scienziato']))
                                                            echo "<a href='/ecoWorld/adminPage.php'>".$_SESSION['loginInfo']['nome']."</a>";
                                                        else
                                                            echo "<a href='/ecoWorld/loginPage/login.html'>Login</a>";
                                                    ?>
                                                </li>
                                                    <?php
                                                        if(isset($_SESSION['loginInfo']['ID_utente']))
                                                            echo "<li><a href='logout.php'>Esci</a></li>";
                                                        else if(isset($_SESSION['loginInfo']['ID_scienziato']))
                                                            echo "<li><a href='logout.php'>Esci</a></li>";
                                                    ?>

                                            </ul>
                                        </nav>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                <form class="search">
                                    <input class="form-control" type="text" placeholder="Search">
                                    <button><img src="images/search_icon.png"></button>
                                </form>
                            </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header inner -->
    </header>
    <!-- end header -->
    <section class="slider_section">
        <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                <li data-target="#myCarousel" data-slide-to="2" class=""></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide" src="images/banner.jpg" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <h1>ECO WORLD</h1>
                            <span>SCIENTIFIC RESEARCH</span>

                            <p>Guarda i nostri specialisti studiare i luoghi più belli e allo stesso tempo, più in pericolo luoghi del pianeta</p>
                            <a class="buynow" href="sedi.php">le nostre Sedi</a>

                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="second-slide" src="images/banner.jpg" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <h1>CONTENUTI IN ANTEPRIMA</h1>
                            <span>Osserva in anteprima i nostri studi</span>

                            <p>I nostri scienziati studiano senza sosta i luoghi più a rischio che si possano trovare, leggi prima di tutti i loro studi e le loro teorie su come potremmo salvare il mondo!</p>
                            <a class="buynow" href="#testimonial">Il nostro Staff</a>

                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="third-slide" src="images/banner.jpg" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <h1>LIVE H24</h1>
                            <span>IL PROGETTO SCIENTIFICO PIù AMBIZIOSO DI SEMPRE</span>

                            <p>Trasmettiamo h24 quello che i nostri droni vedono dai posti più belli del mondo, guardaci sempre e rimani collegato per osservare dei luoghi mozzafiato!</p>
                            <?php
                                if(isset($_SESSION['loginInfo']['ID_utente']))
                                    echo "<a class='buynow' href='userPage.php'>Guardaci Live!</a>";
                                else if(isset($_SESSION['loginInfo']['ID_scienziato']))
                                    echo "<a class='buynow' href='/ecoWorld/adminPage.php'>Inizia una Live!</a>";
                                else
                                    echo "<a class='buynow' href='/ecoWorld/loginPage/login.html'>Guardaci Live!</a>";
                            ?>
                            <a class="buynow ggg" href="sedi.php">Le nostri Sedi</a>

                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <i class='fa fa-angle-left'></i>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <i class='fa fa-angle-right'></i>
            </a>
        </div>
    </section>

    <!-- about -->
    <div id="about" class="about">
        <div class="container">
            <div class="row">

                <div class="col-xl-5 col-lg-5 col-md-5 co-sm-l2">
                    <div class="about_box">
                        <h2>Su di Noi:<br><strong class="black"> Studio e Ricerca</strong></h2>
                        <p>Eco World è una associazione il cui scopo è osservare e studiare i cambiamenti ambientali in luoghi a rischio idrogeologico, abbiamo sedi in tutta Europa e grazie all'uso di tecnologie moderne, i nostri scienziati possono comandare a distanza dei droni per ottenere nuove informazioni, e accedendo alla tua area privata, potrai vedere in diretta streaming ciò che i nostri occhi digitali vedono!</p>
                        <a href="storia.html">Scopri di più</a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-7 co-sm-l2">
                    <div class="about_img">
                        <figure><img src="images/about.png" alt="img" /></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end about -->
    <!-- for_box -->
    <div class="for_box_bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 co-sm-l2">
                    <div class="for_box">
                        <i><img src="images/1.png" alt="#"/></i>
                        <span>15</span>
                        <h3>Droni</h3>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 co-sm-l2">
                    <div class="for_box">
                        <i><img src="images/2.png" alt="#"/></i>
                        <span>47</span>
                        <h3>Ricercatori</h3>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 co-sm-l2">
                    <div class="for_box">
                        <i><img src="images/3.png" alt="#"/></i>
                        <span>12</span>
                        <h3>Programmatori</h3>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 co-sm-l2">
                    <div class="for_box">
                        <i><img src="images/4.png" alt="#"/></i>
                        <span>4</span>
                        <h3>Sedi</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end for_box -->
    <!-- offer -->
 
    <!-- end product -->
    <!-- clients -->
    <div id="testimonial" class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h2>STAFF</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clients_red">
        <div class="container">
            <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#testimonial_slider" data-slide-to="0" class="active"></li>
                    <li data-target="#testimonial_slider" data-slide-to="1" class=""></li>
                    <li data-target="#testimonial_slider" data-slide-to="2" class=""></li>
                </ul>
                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <div class="testomonial_section">

                            <div class="full testimonial_cont text_align_center cross_layout">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 pa_right">
                                        <div class="testomonial_img">
                                            <i><img src="images/tes.jpg" alt="#"/></i>
                                        </div>
                                    </div>
                                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 pa_left">
                                        <div class="cross_inner">
                                            <h3>Bill Gates<br><strong class="ornage_color">GroupLeader di Olbia</strong></h3>
                                            <p><img src="icon/1.png" alt="#" />Dopo anni di lavoro è riuscito a far carriera e ad apprendere gli strumenti del successo, riuscendo a creare un'organizzazione multimiliardaria in parallelo al suo lavoro principale
                                                <img src="icon/2.png" alt="#" />
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item active">

                        <div class="testomonial_section">
                            <div class="full center">
                            </div>
                            <div class="full testimonial_cont text_align_center cross_layout">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 pa_right">
                                        <div class="testomonial_img">
                                            <i><img src="images/tes.jpg" alt="#"/></i>
                                        </div>
                                    </div>
                                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 pa_left">
                                        <div class="cross_inner">
                                            <h3>Johndue<br><strong class="ornage_color">Farm & CO</strong></h3>
                                            <p><img src="icon/1.png" alt="#" />ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                                                <img src="icon/2.png" alt="#" />
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="carousel-item">

                        <div class="testomonial_section">
                            <div class="full center">
                            </div>
                            <div class="full testimonial_cont text_align_center cross_layout">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 pa_right">
                                        <div class="testomonial_img">
                                            <i><img src="images/tes.jpg" alt="#"/></i>
                                        </div>
                                    </div>
                                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 pa_left">
                                        <div class="cross_inner">
                                            <h3>Johndue<br><strong class="ornage_color">Farm & CO</strong></h3>
                                            <p><img src="icon/1.png" alt="#" />ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                                                <img src="icon/2.png" alt="#" />
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
  
    <!-- end clients -->
    <!-- contact -->

    <div id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h2>Rimaniamo in <strong class="black"> Contatto</strong></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid padddd">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 padddd">
            <div class="map_section">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                            <form class="main_form">
                                <div class="row">

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <input class="form-control" placeholder="Nome" type="text" name="Name">
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <input class="form-control" placeholder="Email" type="text" name="Email">
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <input class="form-control" placeholder="Telefono" type="text" name="Phone">
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <textarea class="textarea" placeholder="Messaggio" type="text" name="Message"></textarea>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <button class="send">Invia</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
                </div>

            </div>
        </div>
    </div>

   
    <!-- end contact -->

    <!-- footer -->
    <!--  footer -->
    <footr>
        <div class="footer top_layer ">
            <div class="container">

                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="address">
                            <a href="index.html"> <img src="images/logo.png" alt="logo" /></a>
                            <p>dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et sdolor sit amet, consectetur adipiscing elit, </p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="address">
                            <h3>Link Rapidi</h3>
                            <ul class="Links_footer">
                                <li><img src="icon/3.png" alt="#" /> <a href="loginPage/login.html"> Unisciti a noi</a> </li>
                                <li><img src="icon/3.png" alt="#" /> <a href="#testimonial">Staff</a> </li>
                                <li><img src="icon/3.png" alt="#" /> <a href="presentation/presentation.html">Documentazione</a> </li>
                                <li><img src="icon/3.png" alt="#" /> <a href="dronePage/control.php">Pilotaggio Drone</a> </li>
                                <li><img src="icon/3.png" alt="#" /> <a href="sedi.php">Stato dei droni</a> </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="address">
                            <h3>Rimani sempre aggiornato!</h3>
                            <p>Iscriviti alla nostra newsletter per ricevere costanti aggiornamenti su promozioni, live e scoperte sensazionali!</p>
                            <input class="form-control" placeholder="La tua email" type="type" name="your email">
                            <button class="submit-btn">Invia</button>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="address">
                            <h3>Contatti</h3>

                            <ul class="loca">
                                <li>
                                    <a href="#"><img src="icon/loc.png" alt="#" /></a>Parigi 32
                                    <br>France </li>
                                <li>
                                    <a href="#"><img src="icon/email.png" alt="#" /></a>eco.world@gmail.com </li>
                                <li>
                                    <a href="#"><img src="icon/call.png" alt="#" /></a>333-610-610</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     
    </footr>

    <!-- end footer -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript -->
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

                $(this).addClass('transition');
            }, function() {

                $(this).removeClass('transition');
            });
        });
    </script>
    <script>
        // This example adds a marker to indicate the position of Bondi Beach in Sydney,
        // Australia.
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 11,
                center: {
                    lat: 40.645037,
                    lng: -73.880224
                },
            });

            var image = 'images/maps-and-flags.png';
            var beachMarker = new google.maps.Marker({
                position: {
                    lat: 40.645037,
                    lng: -73.880224
                },
                map: map,
                icon: image
            });
        }
    </script>
    <!-- google map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
    <!-- end google map js -->
</body>

</html>