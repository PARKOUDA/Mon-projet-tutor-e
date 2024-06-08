<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>@yield('titre')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/base/vendor.bundle.base.css') }}" />
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('assets/tom-select/css/tom-select.bootstrap5.css') }}">
    <style>
        .color {
            color: green !important;
        }
    </style>
</head>

<body>
    {{-- Ceci est une variable qui prend par defaut rien  --}}
    @php
        $recherche ??= '';
        $name ??= '';
    @endphp

    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="navbar-brand-wrapper d-flex justify-content-center">
                <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
                    <a class="navbar-brand brand-logo" href="{{ route('admin.index') }}"><img
                            src="{{ asset('assets/images/logo.svg') }}" alt="logo" /></a>
                    <a class="navbar-brand brand-logo-mini" href="index.html"><img
                            src="{{ asset('assets/images/logo-mini.svg') }}" alt="logo" /></a>
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                        data-toggle="minimize">
                        <span class="mdi mdi-sort-variant"></span>
                    </button>
                </div>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                {{-- aperçu de la barre de recherche lorsqu'on est dans la route enseignant ou atos --}}
                @if (request()->route()->getName() == 'admin.listes.personnels')
                    <ul class="navbar-nav mr-lg-4">
                        <form action="" method="get" class="w-100">
                            <li class="nav-item nav-search d-none d-lg-block w-100">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="search">
                                            <i class="mdi mdi-magnify"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Rechercher un enseignant"
                                        aria-label="search" aria-describedby="search" name="RechercheEnseignant">
                                </div>
                            </li>
                        </form>
                    </ul>

                    <ul class="navbar-nav mr-lg-4 m-5">
                        <form action="" method="get" class="w-100">
                            <li class="nav-item nav-search d-none d-lg-block w-100">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="search">
                                            <i class="mdi mdi-magnify"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Rechercher un atos"
                                        aria-label="search" aria-describedby="search" name="RechercheAtos">
                                </div>
                            </li>
                        </form>
                    </ul>
                @endif

                @if (request()->route()->getName() == 'admin.services.departements' ||
                        request()->route()->getName() == 'admin.services.emplois' ||
                        request()->route()->getName() == 'admin.services.faos' ||
                        request()->route()->getName() == 'admin.services.fonctions' ||
                        request()->route()->getName() == 'admin.services.structures' ||
                        request()->route()->getName() == 'admin.services.grades' ||
                        request()->route()->getName() == 'admin.services.titres' ||
                        request()->route()->getName() == 'admin.services.ufrs')
                    <ul class="navbar-nav mr-lg-4 w-100">
                        <form action="" method="get" class="w-100">
                            <li class="nav-item nav-search d-none d-lg-block w-100">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="search">
                                            <i class="mdi mdi-magnify"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control"
                                        placeholder="Rechercher {{ $recherche }}" aria-label="search"
                                        aria-describedby="search" name="Recherche{{ $name }}">
                                </div>
                            </li>
                        </form>
                    </ul>
                @endif
                {{-- fin de la barre de recherche --}}
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item dropdown me-1">
                        <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center"
                            id="messageDropdown" href="#" data-bs-toggle="dropdown">
                            <i class="mdi mdi-message-text mx-0"></i>
                            <span class="count"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="messageDropdown">
                            <p class="mb-0 font-weight-normal float-left dropdown-header">
                                Messages
                            </p>
                            <a class="dropdown-item">
                                <div class="item-thumbnail">
                                    <img src="{{ asset('assets/images/faces/face4.jpg') }}" alt="image"
                                        class="profile-pic" />
                                </div>
                                <div class="item-content flex-grow">
                                    <h6 class="ellipsis font-weight-normal">David Grey</h6>
                                    <p class="font-weight-light small-text text-muted mb-0">
                                        The meeting is cancelled
                                    </p>
                                </div>
                            </a>
                            <a class="dropdown-item">
                                <div class="item-thumbnail">
                                    <img src="{{ asset('assets/images/faces/face2.jpg') }}" alt="image"
                                        class="profile-pic" />
                                </div>
                                <div class="item-content flex-grow">
                                    <h6 class="ellipsis font-weight-normal">Tim Cook</h6>
                                    <p class="font-weight-light small-text text-muted mb-0">
                                        New product launch
                                    </p>
                                </div>
                            </a>
                            <a class="dropdown-item">
                                <div class="item-thumbnail">
                                    @if (auth('enseignant')->user()->Photo == '')
                                        <img src="{{ asset('assets/images/faces/face3.jpg') }}" alt="image"
                                            class="profile-pic" />
                                    @else
                                        <img src="{{ asset('storage/' . auth('enseignant')->user()->Photo) }}"
                                            alt="image" class="profile-pic">
                                    @endif
                                </div>
                                <div class="item-content flex-grow">
                                    <h6 class="ellipsis font-weight-normal">Johnson</h6>
                                    <p class="font-weight-light small-text text-muted mb-0">
                                        Upcoming board meeting
                                    </p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown me-4">
                        <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center notification-dropdown"
                            id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                            <i class="mdi mdi-bell mx-0"></i>
                            <span class="count"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="notificationDropdown">
                            <p class="mb-0 font-weight-normal float-left dropdown-header">
                                Notifications
                            </p>
                            <a class="dropdown-item">
                                <div class="item-thumbnail">
                                    <div class="item-icon bg-success">
                                        <i class="mdi mdi-information mx-0"></i>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <h6 class="font-weight-normal">Application Error</h6>
                                    <p class="font-weight-light small-text mb-0 text-muted">
                                        Just now
                                    </p>
                                </div>
                            </a>
                            <a class="dropdown-item">
                                <div class="item-thumbnail">
                                    <div class="item-icon bg-warning">
                                        <i class="mdi mdi-settings mx-0"></i>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <h6 class="font-weight-normal">Settings</h6>
                                    <p class="font-weight-light small-text mb-0 text-muted">
                                        Private message
                                    </p>
                                </div>
                            </a>
                            <a class="dropdown-item">
                                <div class="item-thumbnail">
                                    <div class="item-icon bg-info">
                                        <i class="mdi mdi-account-box mx-0"></i>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <h6 class="font-weight-normal">New user registration</h6>
                                    <p class="font-weight-light small-text mb-0 text-muted">
                                        2 days ago
                                    </p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                            id="profileDropdown">
                            {{-- <img src="{{ asset('assets/images/faces/face5.jpg') }}" alt="profile" /> --}}
                            @if (auth('enseignant')->check())
                                @if (auth('enseignant')->user()->Photo == '')
                                    <img src="{{ asset('assets/images/faces/face3.jpg') }}" alt="image"
                                        class="profile-pic" />
                                @else
                                    <img src="{{ asset('storage/' . auth('enseignant')->user()->Photo) }}"
                                        alt="image" class="profile-pic"/>
                                @endif
                                <span class="nav-profile-name">{{ auth('enseignant')->user()->Nom }}
                                    {{ auth('enseignant')->user()->Prenom }}</span>
                            @elseif (auth('atos')->check())
                                @if (auth('atos')->user()->Photo == '')
                                    <img src="{{ asset('assets/images/faces/face3.jpg') }}" alt="image"
                                        class="profile-pic" />
                                @else
                                    <img src="{{ asset('storage/' . auth('atos')->user()->Photo) }}" alt="image"
                                        class="profile-pic"/>
                                @endif
                                <span class="nav-profile-name">{{ auth('atos')->user()->Nom }}
                                    {{ auth('atos')->user()->Prenom }}</span>
                            @endif
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="profileDropdown">
                            @if (auth('enseignant')->check())
                                <a class="dropdown-item" href="{{ route('atos.profil') }}" <i
                                    class="mdi mdi-settings text-primary"></i>
                                    Profil
                                </a>
                            @elseif (auth('atos')->check())
                                <a class="dropdown-item" href="{{ route('enseignant.profil') }}" <i
                                    class="mdi mdi-settings text-primary"></i>
                                    Profil
                                </a>
                            @endif

                            <a class="dropdown-item"
                                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                                <i class="mdi mdi-logout text-primary"></i>
                                Déconnexion
                            </a>

                            <form id="logout-form" action="{{ route('deconnexion') }}" method="POST">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- 2eme navbar -->
            @include('admin.layouts.partials.sidebar')

            <!-- fin de la deuxieme nav bar-->
            @yield('contenu')
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="{{ asset('assets/vendors/base/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="{{ asset('assets/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatables.net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('assets/js/template.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    <script src="{{ asset('assets/js/data-table.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/js/dataTables.bootstrap4.js') }}"></script>
    <!-- End custom js for this page-->

    <script src="{{ asset('assets/js/jquery.cookie.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/tom-select/js/tom-select.complete.min.js') }}"></script>
    <script>
        new TomSelect('select[multiple]', {
            plugins: {
                remove_button: {
                    title: 'Supprimer'
                }
            }
        })
    </script>
</body>

</html>
