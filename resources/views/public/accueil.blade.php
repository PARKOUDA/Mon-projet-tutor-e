<!-- /*
    * Template Name: Financing
    * Template Author: Untree.co
    * Template URI: https://untree.co/
    * License: https://creativecommons.org/licenses/by/3.0/
    */ -->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600;700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="{{ asset('css/tiny-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/glightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('css/flatpickr.min.css') }}">


    <title>Page d'accueil</title>
</head>

<body>

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <nav class="site-nav">
        <div class="container">
            <div class="menu-bg-wrap">
                <div class="site-navigation">
                    <div class="row g-0 align-items-center">
                        <div class="col-2">
                            <a href="index.html" class="logo m-0 float-start">UNZ_GP<span
                                    class="text-primary">.</span></a>
                        </div>
                        <div class="col-8 text-center ">
                            <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto">
                                <li class="active"><a href="{{ route('accueil') }}">Accueil</a></li>
                                <li><a href="{{ route('liste-enseignant') }}">Enseignants</a></li>
                                <li><a href="{{ route('liste-atos') }}">Atos</a></li>
                                <li><a href="{{ route('inscription-option') }}">Inscription</a></li>
                                <li><a href="{{ route('connexion-option') }}">Connexion</a></li>
                            </ul>
                        </div>
                        <div class="col-2 text-end">
                            <a href="#"
                                class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light">
                                <span></span>
                            </a>

                            <a href="#" class="call-us d-flex align-items-center">
                                <span class="icon-phone"></span>
                                <span>00226 25440122</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="hero overlay">
        <img src="{{ asset('images/blob.svg') }}" alt="" class="img-fluid blob">
        <div class="container">
            <div class="row align-items-center justify-content-between pt-5">
                <div class="col-lg-6 text-center text-lg-start pe-lg-5">
                    <h1 class="heading text-white mb-3" data-aos="fade-up">Gestion du personnel de l'UNZ.</h1>
                    <p class="text-white mb-5" data-aos="fade-up" data-aos-delay="100">Optimisation de la gestion des informations du personnel universitaire pour une sécurité renforcée des données.</p>
                    <div class="align-items-center mb-5 mm" data-aos="fade-up" data-aos-delay="200">
                        <a href="contact.html" class="btn btn-outline-white-reverse me-4">Contacter nous</a>
                        <a href="https://www.youtube.com/watch?v=Mb1zrW_zra4" class="text-white glightbox">Regarder la 
                            video</a>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="img-wrap">
                        <img src="{{ asset('images/img-1.jpg') }}" alt="Image" class="img-fluid rounded">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section sec-features">
        <div class="container">
            <div class="row g-5">
                <div class="col-12 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0">
                    <div class="feature d-flex">
                        <span class="bi-bag-check-fill"></span>
                        <div>
                            <h3>Le personnel</h3>
                            <p>Le personnel de l'université se compose à la fois d'enseignants et de membres du personnel
                                 administratif (ou Atos), qui interagissent ensemble pour assurer le bon fonctionnement 
                                 de l'établissement. Ce personnel joue un rôle essentiel dans le domaine de l'éducation,
                                  visant à obtenir des résultats satisfaisants. </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature d-flex">
                        <span class="bi-wallet-fill"></span>
                        <div>
                            <h3>Les structures</h3>
                            <p>L'université comprend plusieurs structures, notamment les structures administratives et
                                 celles concernant le corps enseignant. Parmi celles-ci, nous pouvons citer les établissements, la DSI(Direction des Service Informatique)
                                 les instituts et les UFR (Unités de Formation et de Recherche). </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature d-flex">
                        <span class="bi-pie-chart-fill"></span>
                        <div>
                            <h3>Responsable de l'UNZ</h3>
                            <p>Le responsable, incarne le pilier central de l'administration et du leadership de l'institution.
                                Il assure la direction et la gestion globale de l'université. Sa mission principale est de
                                garantir l'efficacité opérationnelle, la qualité de l'enseignement et la réalisation des objectifs 
                                institutionnels. Son engagement envers l'excellence académique et l'épanouissement de la communauté universitaire
                              inspire la confiance de tous les acteurs impliqués.. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    </div>

    <div class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="widget">
                        <h3>À propos</h3>
                        <p>Optimisation de la gestion des informations du personnel universitaire pour une sécurité renforcée des données. </p>

                    </div> <!-- /.widget -->
                    <div class="widget">
                        <address>Adresse de l'Université, <br> Koudougou</address>
                        <ul class="list-unstyled links">
                            <li><a href="tel://00222625440122">+(226)-25-44-01-22</a></li>
                            <li><a href="#">BP : 376 Koudougou, RN 14</a></li>
                            <li><a href="mailto:info@unz.bf">info@unz.bf</a></li>
                        </ul>
                    </div> <!-- /.widget -->
                </div> <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="widget">
                        <h3>L'Université</h3>
                        <ul class="list-unstyled float-start links">
                            <li><a href="#">Accueil</a></li>
                            <li><a href="#">Enseignants</a></li>
                            <li><a href="#">Atos</a></li>
                            <li><a href="#">Inscription</a></li>
                            <li><a href="#">Connexion</a></li>
                        </ul>
                        <ul class="list-unstyled float-start links">
                            <li><a href="#">Grades</a></li>
                            <li><a href="#">Ufrs</a></li>
                            <li><a href="#">Départements</a></li>
                            <li><a href="#">Structures</a></li>
                            <li><a href="#">Emplois</a></li>
                        </ul>
                    </div> <!-- /.widget -->
                </div> <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="widget">
                        <h3>Navigation</h3>
                        <ul class="list-unstyled links mb-4">
                            <li><a href="#">Notre Vision</a></li>
                            <li><a href="#">A propos</a></li>
                            <li><a href="#">Contacter nous</a></li>
                        </ul>

                        <h3>Social</h3>
                        <ul class="list-unstyled social">
                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-linkedin"></span></a></li>
                            <li><a href="#"><span class="icon-pinterest"></span></a></li>
                            <li><a href="#"><span class="icon-dribbble"></span></a></li>
                        </ul>
                    </div> <!-- /.widget -->
                </div> <!-- /.col-lg-4 -->
            </div> <!-- /.row -->

            <div class="row mt-5">
                <div class="col-12 text-center">
                    <!--
                  **==========
                  NOTE:
                  Please don't remove this copyright link unless you buy the license here https://untree.co/license/
                  **==========
                -->

                    <p>Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script>.Tous droits réservés. &mdash; Gestion du personnel de l'UNZ 
                        <!-- License information: https://untree.co/license/ -->
                    </p>
                </div>
            </div>
        </div> <!-- /.container -->
    </div> <!-- /.site-footer -->

    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Chargement...</span>
        </div>
    </div>


    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/tiny-slider.js') }}"></script>

    <script src="{{ asset('js/flatpickr.min.js') }}"></script>


    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/glightbox.min.js') }}"></script>
    <script src="{{ asset('js/navbar.js') }}"></script>
    <script src="{{ asset('js/counter.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>
