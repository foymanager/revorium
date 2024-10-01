<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>EVORIUM</title>
    <!--/google-fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!--//google-fonts -->
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
</head>

<body>
    <!--/Header-->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light stroke py-lg-0">
                <h1><a class="navbar-brand pe-xl-5 pe-lg-4" href="index.html">
                        <img name="" src="assets/images/logo.png" width="150" height="32" alt="">
                    </a></h1>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-lg-auto my-2 my-lg-0 navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html">Accueil</a>                        </li>
                  <li class="nav-item">
                            <a class="nav-link" href="about.html">À propos de nous</a>                        </li>
                  <li class="nav-item"> <a class="nav-link" href="services.html">Services</a> </li>
                  <li class="nav-item"> <a class="nav-link" href="real.html">Réalisation</a> </li>
                  <li class="nav-item"> <a class="nav-link" href="formation.html">Formation</a> </li>
                  <li class="nav-item"> <a class="nav-link" href="nonprofit.html">NonProfit</a> </li>
                       
                  <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>                        </li>
                        
                  <li class="nav-item">
                            <a class="nav-link" href=""></a>                        </li>
                        
                      <li class="nav-item"><a href="inscription.html" class="phone-btn btn-white d-noneJ d-lg-block btn-style ms-2"><span class="fas fa-user me-2" aria-hidden="true"></span> Inscription</a></li>

                    </ul>
                    <ul class="navbar-nav search-right mt-lg-0 mt-2">
                        <li class="nav-item mr-2" title="Search"><a href="#search" class="search-search">
                                <span class="fas fa-search" aria-hidden="true"></span></a></li>
                        
                    </ul>

                    <!-- //toggle switch for light and dark theme -->
                    <!-- search popup -->
                    <div id="search" class="w3lpop-overlay">
                        <div class="w3lpopup">
                            <form action="#formsearch" method="GET" class="d-flex">
                                <input type="search" placeholder="Search.." name="search" required="required" autofocus>
                                <button type="submit"><span class="fas fa-search"></span></button>
                                <a class="close" href="#formsearch">&times;</a>
                            </form>
                        </div>
                    </div>
                    <!-- /search popup -->
                </div>
                <!-- toggle switch for light and dark theme -->
                <div class="mobile-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
    <!--//Header-->
    <!-- breadcrumb -->
    <section class="w3l-about-breadcrumb">
        <div class="breadcrumb-bg breadcrumb-bg-about py-5">
            <div class="container py-lg-5 py-md-4">
                <div class="w3breadcrumb-gids text-center pt-5">
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="index.html">Accueil</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span>Paiement</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//breadcrumb-->
 
 
    <!--/w3l-pricing-->
    <section class="w3l-pricing-sec py-5" id="pricing">
        <div class="container py-md-5 py-2">
            <div class="title-content text-center">
                <h6 class="title-subhny mb-2"><span></span></h6>
                <h3 class="title-w3l mb-4">Identité 
                </h3>
            </div>
            <div class="row pricing-main-grids mt-3">
                <div class="col-lg-4 col-md-6 pricing-main-grid mt-sm-5 mt-4">
                    <div class="w3-pricing-inner-inf">
                        <div class="pricing-headerf">
                            <h4></h4>
                            <div class="price-wrapper mt-4">
                                <div class="price">
                            <p>&nbsp;</p> 
                                </div>
                                
                            </div>
                            <div class="price-wrapper mt-4">
                                <div class="price">
                            <p></p> 
                                </div>
                                
                            </div>

                        </div>
                       <?php
include "connection.php";

$cle = mysqli_query($con, 'SELECT * FROM pros WHERE phone="'.$_GET['phone'].'"') or die ("Erreur ");
$aff = mysqli_fetch_array($cle)

?>
                        <div class="pricing-body">
                            <div class="inner">
                                <ul class="list-style">
                                    <li><span class="fa fa-check me-2" aria-hidden="true"></span> Nom : <?php echo''.$aff['nom'].''; ?></li>
                                    <li><span class="fa fa-check me-2" aria-hidden="true"></span> Post-Nom : <?php echo''.$aff['postnom'].''; ?></li>
                                    <li><span class="fa fa-check me-2" aria-hidden="true"></span> Prénom : <?php echo''.$aff['prenom'].''; ?></li>
                                                                    </ul>
                            </div>
                            <div class="pricing-get-button mt-3">
                                <a class="btn btn-secondary btn-style mt-4 d-block" href="eff_paiement.php?num=<?php echo''.$aff['phone'].''; ?>">Effectuer le Paiement </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                </div>
            </div>
        </div>
    </section>
    <!-- //w3l-pricing-->
 
 
 
    <!--/w3l-footer-29-main-->
    <footer class="w3l-footer-29-main">
        <div class="footer-29 py-5">
            <div class="container py-lg-4">
                

                <div class="row footer-top-29 mt-md-5 mt-4">
                   
                <div class="bottom-copies text-center">
                    <p class="copy-footer-29">© 2023 EVORIUM.
                    </p>
                </div>
            </div>
        </div>

        <!-- move top -->
        <button onClick="topFunction()" id="movetop" title="Go to top">
            <span class="fa fa-angle-up"></span>
        </button>
        <script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("movetop").style.display = "block";
                } else {
                    document.getElementById("movetop").style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }

        </script>
        <!-- //move top -->

    </footer>
    <!--//footer-9 -->
    <!-- Js scripts -->
    <!-- Template JavaScript -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/theme-change.js"></script>

    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function() {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function() {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function() {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });

    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function() {
            $('.navbar-toggler').click(function() {
                $('body').toggleClass('noscroll');
            })
        });

    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!-- //bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>
