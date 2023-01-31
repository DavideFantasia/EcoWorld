<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Sedi</title>
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
    <?php
        session_start();
    ?>
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
                                    <a href="index.html"><img src="images/logo.png" alt="#"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <div class="location_icon_bottum_tt">
                            <ul>
                                <li><img src="icon/loc1.png" />Location</li>
                                <li><img src="icon/email1.png" />eco.world@gmail.com</li>

                                <li><img src="icon/call1.png" />(+71)9876543109</li>
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
                                                <li class="active"> <a href="index.html">Home</a> </li>
                                                <li> <a href="index.html#about">Info</a> </li>
                                                <li><a href="index.html#testimonial">Staff</a></li>
                                                <li>
                                                    <?php
                                                        if(isset($_SESSION['loginInfo']['ID_utente']))
                                                            echo "<a href='/ecoWorld/userPage.php'>".$_SESSION['loginInfo']['username']."</a>";
                                                        else if(isset($_SESSION['loginInfo']['ID_scienziato']))
                                                            echo "<a href='/ecoWorld/dronePage/control.php'>".$_SESSION['loginInfo']['nome']."</a>";
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
                <li data-target="#myCarousel" data-slide-to="3" class=""></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide" src="images/bannerHofn.jpg" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <h1>Höfn</h1>
                            <span>il freddo mare del nord</span>

                            <p>Osserva i nostri scienziati studiare lo scioglimento dei ghiacci</p>
                            <a class="buynow" href="#hofn">Leggi di più</a>

                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="second-slide" src="images/bannerGlasgow.jpg" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <h1>Glasgow</h1>
                            <span>Indice Ambientale</span>

                            <p>Le alte pareti rocciose delle coste e il rischio idreogeologico</p>
                            <a class="buynow" href="#Glasgow">Leggi di più</a>

                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="third-slide" src="images/bannerTrieste.jpg" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <h1>Trieste</h1>
                            <span>Le alpi e gli smottamenti</span>

                            <p>Lo studio delle Alpi è quello che potrebbe salvare nel periodo più breve, più persone possibili!</p>
                            <a class="buynow" href="#Trieste">Leggi di più</a>

                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="fourth-slide" src="images/bannerOlbia.jpg" alt="Fourth slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <h1>Olbia</h1>
                            <span>E la costa smeralda</span>

                            <p>Lo scorcio di paradiso che è la costa smeralda ci da l'opportunità di raccogliere importanti informazioni e di mostrare al pubblico uno spettacolo unico</p>
                            <a class="buynow" href="#Olbia">Leggi di più</a>

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

    <!-- about Oslo -->
    <div id="hofn" class="about">
        <div class="container">
            <div class="row">

                <div class="col-xl-5 col-lg-5 col-md-5 co-sm-l2">
                    <div class="about_box">
                        <h2>Le nostre Sedi:<br><strong class="black"> Höfn</strong></h2>
                        <p>Situata nella parte a sud-est dell'Islanda, Höfn è una piccola cittadina immersa nella natura, punto cruciale per l'osservazione dello sciglimento glaciale. L'Islanda si trova in una zona di forti contrasti termici sia atmosferici (tra i tiepidi venti sudoccidentali e quelli freddissimi che scendono dalla Groenlandia) che marini. Tale situazione di contrasto genera intorno all'isola una zona di bassa pressione quasi permanente, che è stata battezzata "Depressione d'Islanda". Essa influenza il clima dell'isola più di ogni altro fattore, determinando un'estrema variabilità della forza dei venti, della loro direzione e dell'umidità delle masse d'aria. Di conseguenza, in Islanda, repentini passaggi dalla pioggia al bel tempo e di nuovo al maltempo sono la regola anziché l'eccezione. Non sono inoltre rare violente tempeste, dovute a passaggi di depressioni con valori barici anche inferiori ai 950 hPa.</p>
                        <?php
                            if(isset($_SESSION['loginInfo']['ID_utente']))
                                echo "<a href='userPage.php#Hofn'>Guarda Live</a>";
                            else if(isset($_SESSION['loginInfo']['ID_scienziato']))
                                echo "<a href='userPage.php#Hofn'>Guarda Live</a>";
                            else
                                echo "<a href='loginPage/login.html'>Guarda Live</a>";
                        ?>
                        
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-7 co-sm-l2">
                    <div class="about_img">
                        <figure><img src="images/aboutHofn.png" alt="img" /></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end about Oslo -->
    
    <!-- about GLasgow -->
    <div id="Glasgow" class="about">
        <div class="container">
            <div class="row">

                <div class="col-xl-5 col-lg-5 col-md-5 co-sm-l2">
                    <div class="about_box">
                        <h2>Le nostre Sedi:<br><strong class="black"> Glasgow</strong></h2>
                        <p>Glasgow è cresciuta da un piccolo insediamento rurale sul fiume Clyde fino a diventare uno dei più grandi porti del mondo. Espandendosi da borgo vescovile e reale medievale, con la fondazione della quarta più antica università della Gran Bretagna, l'Università di Glasgow nel 1451, divenne un importante centro dell'Illuminismo scozzese nel XVIII secolo. Dal XVIII secolo la città è cresciuta anche come uno dei principali scali della Gran Bretagna per il commercio transatlantico con il Nord America e le Indie Occidentali.</p>
                        <?php
                            if(isset($_SESSION['loginInfo']['ID_utente']))
                                echo "<a href='userPage.php#Glasgow'>Guarda Live</a>";
                            else if(isset($_SESSION['loginInfo']['ID_scienziato']))
                                echo "<a href='userPage.php#Glasgow'>Guarda Live</a>";
                            else
                                echo "<a href='loginPage/login.html'>Guarda Live</a>";
                        ?>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-7 co-sm-l2">
                    <div class="about_img">
                        <figure><img src="images/aboutGlasgow.png" alt="img" /></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end about Glashow -->
    
    <!-- about Trieste -->
    <div id="Trieste" class="about">
        <div class="container">
            <div class="row">

                <div class="col-xl-5 col-lg-5 col-md-5 co-sm-l2">
                    <div class="about_box">
                        <h2>Le nostre Sedi:<br><strong class="black"> Trieste</strong></h2>
                        <p>Il clima della città di Trieste, secondo la classificazione di Köppen, rientra nel tipo subtropicale umido. Grazie a una latitudine intermedia tra il Polo Nord e l'equatore, e alla sua posizione costiera, la città di Trieste gode di un clima mite d'inverno e piuttosto caldo, ma non torrido, d'estate. Relativamente al trentennio ufficiale di riferimento della climatologia mondiale (IPCC/WMO) 1971-2000 la media annuale delle temperature presso le varie stazioni meteorologiche di Trieste è stata di 15 °C, mentre le temperature medie del mese più freddo (gennaio) si sono attestate attorno ai 5,8 °C e quelle del mese più caldo (luglio) leggermente al di sopra dei 24 °C.
</p>
                        <?php
                            if(isset($_SESSION['loginInfo']['ID_utente']))
                                echo "<a href='userPage.php#Trieste'>Guarda Live</a>";
                            else if(isset($_SESSION['loginInfo']['ID_scienziato']))
                                echo "<a href='userPage.php#Trieste'>Guarda Live</a>";
                            else
                                echo "<a href='loginPage/login.html'>Guarda Live</a>";
                        ?>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-7 co-sm-l2">
                    <div class="about_img">
                        <figure><img src="images/aboutTrieste.png" alt="img" /></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end about Trieste -->
    
     <!-- about Olbia -->
    <div id="Olbia" class="about">
        <div class="container">
            <div class="row">

                <div class="col-xl-5 col-lg-5 col-md-5 co-sm-l2">
                    <div class="about_box">
                        <h2>Le nostre Sedi:<br><strong class="black"> Olbia</strong></h2>
                        <p>La città è caratterizzata da un clima mediterraneo con inverni miti e umidi ed estati calde e secche. Le precipitazioni si concentrano soprattutto nei mesi invernali e autunnali. Il 18 novembre 2013 è stata oggetto di una violenta alluvione, dovuta al passaggio del ciclone Cleopatra, che ha causato la morte di 9 persone. Il ciclone ha colpito altre zone della Gallura orientale e della Baronia, causando in tutto 19 vittime.</p>
                        <?php
                            if(isset($_SESSION['loginInfo']['ID_utente']))
                                echo "<a href='userPage.php#Olbia'>Guarda Live</a>";
                            else if(isset($_SESSION['loginInfo']['ID_scienziato']))
                                echo "<a href='userPage.php#Olbia'>Guarda Live</a>";
                            else
                                echo "<a href='loginPage/login.html'>Guarda Live</a>";
                        ?>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-7 co-sm-l2">
                    <div class="about_img">
                        <figure><img src="images/aboutOlbia.png" alt="img" /></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end about Olbia -->
        
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
                            <h3>Quick links</h3>
                            <ul class="Links_footer">
                                <li><img src="icon/3.png" alt="#" /> <a href="#"> Join Us</a> </li>
                                <li><img src="icon/3.png" alt="#" /> <a href="#">Maintenance</a> </li>
                                <li><img src="icon/3.png" alt="#" /> <a href="#">Language Packs</a> </li>
                                <li><img src="icon/3.png" alt="#" /> <a href="#">LearnPress</a> </li>
                                <li><img src="icon/3.png" alt="#" /> <a href="#">Release Status</a> </li>
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
                                    <a href="#"><img src="icon/call.png" alt="#" /></a>+12586954775 </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     
        <div class="copyright">
            <div class="container">
                
           
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