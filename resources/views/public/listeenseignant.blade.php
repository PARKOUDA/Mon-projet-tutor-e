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


    <title>Liste des enseignants</title>
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
                            <a href="index.html" class="logo m-0 float-start">UNZ GP<span
                                    class="text-primary">.</span></a>
                        </div>
                        <div class="col-8 text-center ">
                            <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto">
                                <li class="active"><a href="{{ route('accueil') }}">Accueil</a></li>
                                <li><a href="{{ route('liste-enseignant') }}">Enseignants</a></li>
                                <li><a href="{{ route('liste-atos') }}">Atos</a></li>
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


    <div class="hero overlay inner-page">
        <img src="{{ asset('images/blob.svg') }}" alt="" class="img-fluid blob">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center pt-5">
                <div class="col-lg-6">
                    <h1 class="heading text-white mb-3" data-aos="fade-up">Liste des enseignants</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="section sec-news">
        <div class="container">

            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="0">
                    <div class="card post-entry">
                        <a href="single.html"><img src="{{ asset('images/img-1.jpg') }}" class="card-img-top"
                                alt="Image"></a>
                        <div class="card-body">
                            <div><span class="text-uppercase font-weight-bold date">Jan 20, 2021</span></div>
                            <h5 class="card-title"><a href="single.html">Behind the word mountains</a></h5>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts. </p>
                            <p class="mt-5 mb-0"><a href="#">Read more</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card post-entry">
                        <a href="single.html"><img src="{{ asset('images/img-2.jpg') }}" class="card-img-top"
                                alt="Image"></a>
                        <div class="card-body">
                            <div><span class="text-uppercase font-weight-bold date">Jan 20, 2021</span></div>
                            <h5 class="card-title"><a href="single.html">Behind the word mountains</a></h5>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts. </p>
                            <p class="mt-5 mb-0"><a href="#">Read more</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card post-entry">
                        <a href="single.html"><img src="{{ asset('images/img-3.jpg') }}" class="card-img-top"
                                alt="Image"></a>
                        <div class="card-body">
                            <div><span class="text-uppercase font-weight-bold date">Jan 20, 2021</span></div>
                            <h5 class="card-title"><a href="single.html">Behind the word mountains</a></h5>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts. </p>
                            <p class="mt-5 mb-0"><a href="single.html">Read more</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="0">
                    <div class="card post-entry">
                        <a href="single.html"><img src="{{ asset('images/img-1.jpg') }}" class="card-img-top"
                                alt="Image"></a>
                        <div class="card-body">
                            <div><span class="text-uppercase font-weight-bold date">Jan 20, 2021</span></div>
                            <h5 class="card-title"><a href="single.html">Behind the word mountains</a></h5>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts. </p>
                            <p class="mt-5 mb-0"><a href="#">Read more</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card post-entry">
                        <a href="single.html"><img src="{{ asset('images/img-2.jpg') }}" class="card-img-top"
                                alt="Image"></a>
                        <div class="card-body">
                            <div><span class="text-uppercase font-weight-bold date">Jan 20, 2021</span></div>
                            <h5 class="card-title"><a href="single.html">Behind the word mountains</a></h5>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts. </p>
                            <p class="mt-5 mb-0"><a href="#">Read more</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card post-entry">
                        <a href="single.html"><img src="{{ asset('images/img-3.jpg') }}" class="card-img-top"
                                alt="Image"></a>
                        <div class="card-body">
                            <div><span class="text-uppercase font-weight-bold date">Jan 20, 2021</span></div>
                            <h5 class="card-title"><a href="single.html">Behind the word mountains</a></h5>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts. </p>
                            <p class="mt-5 mb-0"><a href="single.html">Read more</a></p>
                        </div>
                    </div>
                </div>


            </div>

            <div class="row">
                <div class="col-lg-12 text-center py-5">
                    <div class="custom-navigation">
                        <a href="#" class="active">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <span>...</span>
                        <a href="#">5</a>
                        </nav>
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
