@extends('admin.layouts.app')

@section('titre', "Profil de l'administrateur")

@section('contenu')
    <div class="main-panel">
        <div class="content-wrapper">
            <!-- <div class="message bg-success" th:if="${success !=null}">
            <h3 style="color: #fff; text-align: center; padding: 12px">
              [[${success}]]
            </h3>
          </div>
          -->

            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="d-flex justify-content-between flex-wrap">
                        <div class="d-flex align-items-end flex-wrap">
                            <div class="me-md-3 me-xl-5">
                                <h2>Mon profil</h2>
                            </div>
                            <div class="d-flex">
                                <i class="mdi mdi-home text-muted hover-cursor"></i>
                                <p class="text-muted mb-0 hover-cursor">
                                    &nbsp;/&nbsp;-&nbsp;
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--########################################### Mon profil ############################################ -->

            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">
                        <div class="profile-foreground position-relative mx-n4 mt-n4">
                            <div class="profile-wid-bg">
                                <img src="assets/images/profile-bg.jpg" alt="" class="profile-wid-img" />
                            </div>
                        </div>
                        <div class="pt-4 mb-4 mb-lg-3 pb-lg-4">
                            <div class="row g-4">
                                <!--end col-->
                                <div class="col">
                                    <div class="p-2">
                                        <h2 class="text-dark mb-1">Nom de l'Admin</h2>
                                    </div>
                                </div>
                                <!--end col-->

                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div>
                                    <div class="d-flex">
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-pills animation-nav profile-nav gap-2 gap-lg-3 flex-grow-1"
                                            role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link fs-14 active" data-bs-toggle="tab" href="#overview-tab"
                                                    role="tab">
                                                    <i class="ri-airplay-fill d-inline-block d-md-none"></i>
                                                    <span class="d-none d-md-inline-block">Mes informations</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link fs-14" data-bs-toggle="tab" href="#documents"
                                                    role="tab">
                                                    <i class="ri-folder-4-line d-inline-block d-md-none"></i>
                                                    <span class="d-none d-md-inline-block">Paramètre du compte</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Tab panes -->
                                    <div class="tab-content pt-4 text-muted">
                                        <div class="tab-pane active" id="overview-tab" role="tabpanel">
                                            <div class="row">
                                                <div class="col-xxl-3">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="table-responsive">
                                                                <table class="table table-borderless mb-0">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">
                                                                                Nom prénom :
                                                                            </th>
                                                                            <td class="text-muted">
                                                                                SABIDANI YENTEM ELISEE
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">
                                                                                Mobile :
                                                                            </th>
                                                                            <td class="text-muted">
                                                                                +(226) 56 77 98 22
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">
                                                                                E-mail :
                                                                            </th>
                                                                            <td class="text-muted">
                                                                                elisee@gmail.com
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">
                                                                                Localisation :
                                                                            </th>
                                                                            <td class="text-muted">
                                                                                Koudougou
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">
                                                                                Préférences :
                                                                            </th>
                                                                            <td class="text-muted">
                                                                                <strong>Cinéma</strong>,
                                                                                <strong>Foir</strong>,
                                                                                <strong>Thèatre</strong>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">
                                                                                Date d'inscription
                                                                            </th>
                                                                            <td class="text-muted">
                                                                                24 Nov 2021
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <!-- end card body -->
                                                    </div>
                                                    <!-- end card -->
                                                </div>

                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <!--end tab-pane-->
                                        <div class="tab-pane fade" id="documents" role="tabpanel">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title mb-3">
                                                        Edition de mon compte
                                                    </h5>
                                                    <br />
                                                    <form action="javascript:void(0);">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="fullname" class="form-label">Nom et
                                                                        prénom</label>
                                                                    <input type="text" class="form-control"
                                                                        id="fullname" placeholder="Entrez votre nom"
                                                                        value="SABIDANI ELISEE" />
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="email"
                                                                        class="form-label">E-mail</label>
                                                                    <input type="email" class="form-control"
                                                                        id="email" placeholder="Entrez votre email"
                                                                        value="esabidan@gmail.com" />
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="numero" class="form-label">Numero de
                                                                        telephone</label>
                                                                    <input type="text" class="form-control"
                                                                        id="telephone"
                                                                        placeholder="Entrez votre numero de telephone"
                                                                        value="+(226) 56 78 56 67" />
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="siege" class="form-label">Siège</label>
                                                                    <input type="text" class="form-control"
                                                                        id="siege" placeholder="Entrez votre siège"
                                                                        value="Ouagadougou" />
                                                                </div>
                                                            </div>
                                                            <!--end col-->

                                                            <!--end col-->
                                                            <div class="col-lg-12">
                                                                <div class="mb-3">
                                                                    <label for="skillsInput" class="form-label">Domaine
                                                                        d'activité</label>
                                                                    <select class="form-control"></select>
                                                                </div>
                                                            </div>

                                                            <!--end col-->

                                                            <!--end col-->
                                                            <div class="col-lg-12">
                                                                <div class="hstack gap-2 justify-content-end">
                                                                    <button type="submit"
                                                                        class="btn btn-primary text-white">
                                                                        Sauvegarder les changements
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                        </div>
                                                        <!--end row-->
                                                    </form>
                                                </div>
                                            </div>
                                            <br />

                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title mb-3">
                                                        Edition les informations d'authentification
                                                    </h5>
                                                    <br />
                                                    <form action="javascript:void(0);">
                                                        <div class="row g-2">
                                                            <div class="col-lg-4">
                                                                <div>
                                                                    <label for="oldpasswordInput"
                                                                        class="form-label">Ancien mot de passe*</label>
                                                                    <input type="password" class="form-control"
                                                                        id="oldpasswordInput"
                                                                        placeholder="Entrez votre mot de passe actuel" />
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-lg-4">
                                                                <div>
                                                                    <label for="newpasswordInput"
                                                                        class="form-label">Nouveau mot de passe*</label>
                                                                    <input type="password" class="form-control"
                                                                        id="newpasswordInput"
                                                                        placeholder="Entrez votre nouveau mot de passe" />
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-lg-4">
                                                                <div>
                                                                    <label for="confirmpasswordInput"
                                                                        class="form-label">Confirmer votre nouveau mot de
                                                                        passe*</label>
                                                                    <input type="password" class="form-control"
                                                                        id="confirmpasswordInput"
                                                                        placeholder="Répétez votre nouveau mot de passe" />
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <br />
                                                            <div class="col-lg-12">
                                                                <div class="mb-3">
                                                                    <a href="javascript:void(0);"
                                                                        class="link-primary text-decoration-underline">Mot
                                                                        de passe oublier ?</a>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-lg-12">
                                                                <div class="text-end">
                                                                    <button type="submit"
                                                                        class="btn btn-primary text-white">
                                                                        Changer de mot de passe
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                        </div>
                                                        <!--end row-->
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end tab-pane-->
                                    </div>
                                    <!--end tab-content-->
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                                © FasoEvent.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Developpé par le groupe de java unz
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>

            <!-- fin de bienvenue -->

            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
@endsection
