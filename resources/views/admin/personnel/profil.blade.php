
@extends('admin.layouts.app')

@section('titre', 'Mon profil enseignant')

@section('contenu')
<div class="main-panel">
    <div class="content-wrapper">

        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between flex-wrap">
                    <div class="d-flex align-items-end flex-wrap">
                        <div class="me-md-3 me-xl-5">
                            <h2>Mon profil ENSEIGNANT</h2>
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
                                    <h2 class="text-dark mb-1">{{ auth('enseignant')->user()->Nom }} {{ auth('enseignant')->user()->Prenom }}</h2>
                                </div>
                            </div>
                            <!--end col-->
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>

                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

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
                                            <a class="nav-link fs-14" data-bs-toggle="tab" href="#documents" role="tab">
                                                <i class="ri-folder-4-line d-inline-block d-md-none"></i>
                                                <span class="d-none d-md-inline-block">Paramètre du compte</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Tab panes -->
                                <div class="tab-content pt-4 text-muted">
                                    <div class="tab-pane active" id="overview-tab" role="tabpanel">
                                        {{-- @if (auth()->user()->role == 'user')
                                            <div class="row">
                                                <div class="col-xxl-7">
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
                                                                                {{ auth()->user()->nom }}
                                                                                {{ auth()->user()->prenom }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">
                                                                                Mobile :
                                                                            </th>
                                                                            <td class="text-muted">
                                                                                +(226) {{ auth()->user()->telephone }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">
                                                                                E-mail :
                                                                            </th>
                                                                            <td class="text-muted">
                                                                                {{ auth()->user()->email }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">
                                                                                Date d'inscription
                                                                            </th>
                                                                            <td class="text-muted">
                                                                                {{ auth()->user()->created_at }}
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
                                            <div class="row">
                                                <div class="col-xxl-5">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="table-responsive">
                                                                <img src="{{ asset('storage/' . auth()->user()->photo) }}"
                                                                    alt="" class="image-profil">
                                                            </div>
                                                        </div>
                                                        <!-- end card body -->
                                                    </div>
                                                    <!-- end card -->
                                                </div>

                                                <!--end col-->
                                            </div>
                                        @endif

                                        @if (auth()->user()->role == 'personnelAtos')
                                            <div class="row">
                                                <div class="col-xxl-7">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="table-responsive">
                                                                <table class="table table-borderless mb-0">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">
                                                                                Nom :
                                                                            </th>
                                                                            <td class="text-muted">
                                                                                {{ auth()->user()->nom }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">
                                                                                Mobile :
                                                                            </th>
                                                                            <td class="text-muted">
                                                                                +(226) {{ auth()->user()->telephone }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">
                                                                                E-mail :
                                                                            </th>
                                                                            <td class="text-muted">
                                                                                {{ auth()->user()->email }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">
                                                                                Adresse :
                                                                            </th>
                                                                            <td class="text-muted">
                                                                                {{ auth()->user()->adresse }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">
                                                                                Domaines d'activites :
                                                                            </th>
                                                                            <td class="text-muted">
                                                                                {{ auth()->user()->activites }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">
                                                                                Date d'inscription
                                                                            </th>
                                                                            <td class="text-muted">
                                                                                {{ auth()->user()->created_at }}
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
                                        @endif --}}


                                            <div class="row">
                                                <div class="col-xxl-7">
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
                                                                                {{ auth('enseignant')->user()->Nom }}
                                                                                {{ auth('enseignant')->user()->Prenom }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">
                                                                                Mobile :
                                                                            </th>
                                                                            <td class="text-muted">
                                                                                +(226) {{ auth('enseignant')->user()->Telephone }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">
                                                                                E-mail :
                                                                            </th>
                                                                            <td class="text-muted">
                                                                                {{ auth('enseignant')->user()->Email }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">
                                                                                Genre :
                                                                            </th>
                                                                            <td class="text-muted">
                                                                                {{ auth('enseignant')->user()->Genre }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">
                                                                                Titre :
                                                                            </th>
                                                                            <td class="text-muted">
                                                                                {{ auth('enseignant')->user()->titre->Nom }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">
                                                                                Grade :
                                                                            </th>
                                                                            <td class="text-muted">
                                                                                {{ auth('enseignant')->user()->grade->Nom }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">
                                                                                Fonction :
                                                                            </th>
                                                                            <td class="text-muted">
                                                                                {{ auth('enseignant')->user()->fonction->Nom }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">
                                                                                UFR :
                                                                            </th>
                                                                            <td class="text-muted">
                                                                                {{ auth('enseignant')->user()->ufr->Nom }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">
                                                                                Département :
                                                                            </th>
                                                                            <td class="text-muted">
                                                                                {{ auth('enseignant')->user()->departement->Nom }}
                                                                            </td>
                                                                        </tr>
                                                                        
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">
                                                                                Date d'inscription
                                                                            </th>
                                                                            <td class="text-muted">
                                                                                {{ auth('enseignant')->user()->created_at }}
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
                                                    Edition les informations de mon compte
                                                </h5>
                                                <br />
                                                {{-- <form action="{{ route('private.profil-edition') }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="row">
                                                        @if (auth()->user()->role == 'admin' || auth()->user()->role == 'enseignant')
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="fullname" class="form-label">Nom</label>
                                                                    <input type="text" name="nom"
                                                                        class="form-control" id="fullname"
                                                                        placeholder="Entrez votre nom"
                                                                        value="{{ auth()->user()->nom }}" />
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="fullname"
                                                                        class="form-label">Prénom</label>
                                                                    <input type="text" name="prenom"
                                                                        class="form-control" id="fullname"
                                                                        placeholder="Entrez votre prénom"
                                                                        value="{{ auth()->user()->prenom }}" />
                                                                </div>
                                                            </div>
                                                        @endif
                                                        @if (auth()->user()->role == 'personnelAtos')
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="fullname" class="form-label">Nom </label>
                                                                    <input type="text" name="nom"
                                                                        class="form-control" id="fullname"
                                                                        placeholder="Entrez votre nom "
                                                                        value="{{ auth()->user()->nom }}" />
                                                                </div>
                                                            </div>
                                                        @endif
                                                        <!--end col-->
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="email"
                                                                    class="form-labonneabel">E-mail</label>
                                                                <input type="email" name="email" class="form-control"
                                                                    id="email" placeholder="Entrez votre email"
                                                                    value="{{ auth()->user()->email }}" />
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="numero" class="form-label">Numéro de
                                                                    telephone</label>
                                                                <input type="text" class="form-control"
                                                                    name="telephone" id="telephone"
                                                                    placeholder="Entrez votre numero de telephone"
                                                                    value="{{ auth()->user()->telephone }}" />
                                                            </div>
                                                        </div>
                                                        @if (auth()->user()->role == 'personnelAtos')
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="siege" class="form-label">Siège</label>
                                                                    <input type="text" name="siege"
                                                                        class="form-control" id="siege"
                                                                        placeholder="Entrez votre siége"
                                                                        value="{{ auth()->user()->siege }}" />
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="adresse"
                                                                        class="form-label">Adresse</label>
                                                                    <input type="text" name="adresse"
                                                                        class="form-control" id="siege"
                                                                        placeholder="Entrez votre adresse"
                                                                        value="{{ auth()->user()->adresse }}" />
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="skillsInput" class="form-label">Domaines
                                                                        d'activités</label>
                                                                    <input type="text" name="activites"
                                                                        class="form-control" id="siege"
                                                                        placeholder="Entrez vos domaoines d'activités"
                                                                        value="{{ auth()->user()->activites }}" />
                                                                </div>
                                                            </div>
                                                        @endif

                                                        @if (auth()->user()->role == 'enseignant')
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="adresse"
                                                                        class="form-label">Adresse</label>
                                                                    <input type="text" name="adresse"
                                                                        class="form-control" id="siege"
                                                                        placeholder="Entrez votre adresse"
                                                                        value="{{ auth()->user()->adresse }}" />
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="skillsInput"
                                                                        class="form-label">Préférences</label>
                                                                    <input type="text" name="preferences"
                                                                        class="form-control" id="siege"
                                                                        placeholder="Entrez votre adresse"
                                                                        value="{{ auth()->user()->preferences }}" />
                                                                </div>
                                                            </div>
                                                        @endif

                                                        <div class="col-lg-12">
                                                            <div class="hstack gap-2 justify-content-end">
                                                                <button type="submit"
                                                                    onclick="return confirm('Etes vous sûr de vouloir enrregistré les nouveaux changement ???')"
                                                                    class="btn btn-primary text-white">
                                                                    Sauvegarder les changements
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </form> --}}
                                            </div>
                                        </div>
                                        <br />

                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title mb-3">
                                                    Edition les informations d'authentification
                                                </h5>
                                                <br />
                                                {{-- <form action="{{ route('private.edit-password') }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="row g-2">
                                                        <div class="col-lg-12">
                                                            <div>
                                                                <label for="confirmpasswordInput"
                                                                    class="form-label">Nouveau
                                                                    mot de
                                                                    passe*</label>
                                                                <input type="password" name="new_password"
                                                                    class="form-control" id="confirmpasswordInput"
                                                                    placeholder="Nouveau mot de passe" />
                                                                @if ($errors->has('new_password'))
                                                                    <span
                                                                        class="text-danger">{{ $errors->first('new_password') }}</span>
                                                                @endif
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12">
                                                            <div>
                                                                <label for="newpasswordInput" class="form-label">Répétez
                                                                    votre nouveau mot
                                                                    de passe*</label>
                                                                <input type="password" class="form-control"
                                                                    id="newpasswordInput" name="new_password_confirmation"
                                                                    placeholder="Repetez mot de passe" />

                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <br />
                                                        <div class="col-lg-12">
                                                            <div class="mb-3">
                                                                <a href="javascript:void(0);"
                                                                    class="link-primary text-decoration-underline">Mot de
                                                                    passe oublier ?</a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-12">
                                                            <div class="text-end">
                                                                <button type="submit"
                                                                    onclick="return confirm('Etes vous sûr de vouloir enrregistré les nouveaux changement ???')"
                                                                    class="btn btn-primary text-white">
                                                                    Changer de mot de passe
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </form> --}}
                                            </div>
                                        </div>
                                        <br />

                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title mb-3">
                                                    Changer votre image de profil
                                                </h5>
                                                <br />
                                                {{-- <form action="{{ route('private.edit-image') }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="row g-2">
                                                        <div class="col-lg-12">
                                                            <div>
                                                                <label for="confirmpasswordInput"
                                                                    class="form-label">Choisissez une image*</label>
                                                                <input type="file" name="new_image"
                                                                    class="form-control" id="confirmFileInput" />
                                                                @if ($errors->has('new_image'))
                                                                    <span
                                                                        class="text-danger">{{ $errors->first('new_image') }}</span>
                                                                @endif
                                                            </div>
                                                        </div>

                                                        <br />

                                                        <!--end col-->
                                                        <div class="col-lg-12">
                                                            <div class="text-end">
                                                                <button type="submit"
                                                                    onclick="return confirm('Etes vous sûr de vouloir enrregistré les nouveaux changement ???')"
                                                                    class="btn btn-primary text-white">
                                                                    Changer l'image du profil
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </form> --}}
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
                            © Université Norbert ZONGO.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Gestion du personnel UNZ
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        <!-- fin de bienvenue -->
    </div>
        <!-- main-panel ends -->
    </div>
@endsection
