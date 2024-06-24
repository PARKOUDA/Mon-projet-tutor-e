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
                                        <h2 class="text-dark mb-1">{{ auth('enseignant')->user()->Nom }}
                                            {{ auth('enseignant')->user()->Prenom }}</h2>
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
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
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
                                            {{-- @if (auth('enseignant')->user()->role == 'user')
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
                                                                                {{ auth('enseignant')->user()->nom }}
                                                                                {{ auth('enseignant')->user()->prenom }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">
                                                                                Mobile :
                                                                            </th>
                                                                            <td class="text-muted">
                                                                                +(226) {{ auth('enseignant')->user()->telephone }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">
                                                                                E-mail :
                                                                            </th>
                                                                            <td class="text-muted">
                                                                                {{ auth('enseignant')->user()->email }}
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
                                            <div class="row">
                                                <div class="col-xxl-5">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="table-responsive">
                                                                <img src="{{ asset('storage/' . auth('enseignant')->user()->photo) }}"
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

                                        @if (auth('enseignant')->user()->role == 'personnelAtos')
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
                                                                                {{ auth('enseignant')->user()->nom }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">
                                                                                Mobile :
                                                                            </th>
                                                                            <td class="text-muted">
                                                                                +(226) {{ auth('enseignant')->user()->telephone }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">
                                                                                E-mail :
                                                                            </th>
                                                                            <td class="text-muted">
                                                                                {{ auth('enseignant')->user()->email }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">
                                                                                Adresse :
                                                                            </th>
                                                                            <td class="text-muted">
                                                                                {{ auth('enseignant')->user()->adresse }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">
                                                                                Domaines d'activites :
                                                                            </th>
                                                                            <td class="text-muted">
                                                                                {{ auth('enseignant')->user()->activites }}
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
                                                                                +(226)
                                                                                {{ auth('enseignant')->user()->Telephone }}
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
                                                    <form action="{{route('enseignant.profil.action')}}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('POST')
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="fullname" class="form-label">Nom</label>
                                                                    <input type="text" name="Nom"
                                                                        class="form-control" id="fullname"
                                                                        placeholder="Entrez votre nom"
                                                                        value="{{ auth('enseignant')->user()->Nom }}" />
                                                                    @if ($errors->has('Nom'))
                                                                        <span
                                                                            class="text-danger">{{ $errors->first('Nom') }}</span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="fullname"
                                                                        class="form-label">Prénom</label>
                                                                    <input type="text" name="Prenom"
                                                                        class="form-control" id="fullname"
                                                                        placeholder="Entrez votre prénom"
                                                                        value="{{ auth('enseignant')->user()->Prenom }}" />
                                                                    @if ($errors->has('Prenom'))
                                                                        <span
                                                                            class="text-danger">{{ $errors->first('Prenom') }}</span>
                                                                    @endif
                                                                </div>
                                                            </div>

                                                            <!--end col-->

                                                            <div class="col-lg-12">
                                                                <div class="mb-3">
                                                                    <label for="email"
                                                                        class="form-labonneabel">Matricule</label>
                                                                    <input type="text" name="Matricule"
                                                                        class="form-control" id="email"
                                                                        placeholder="Entrez votre email"
                                                                        value="{{ auth('enseignant')->user()->Matricule }}" />
                                                                    @if ($errors->has('Matricule'))
                                                                        <span
                                                                            class="text-danger">{{ $errors->first('Matricule') }}</span>
                                                                    @endif
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-12">
                                                                <div class="mb-3">
                                                                    <label for="email"
                                                                        class="form-labonneabel">E-mail</label>
                                                                    <input type="email" name="Email"
                                                                        class="form-control" id="email"
                                                                        placeholder="Entrez votre email"
                                                                        value="{{ auth('enseignant')->user()->Email }}" />
                                                                    @if ($errors->has('Email'))
                                                                        <span
                                                                            class="text-danger">{{ $errors->first('Email') }}</span>
                                                                    @endif
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="Mot_de_passe" class="form-label">Mot de
                                                                        passe</label>
                                                                    <input type="text" class="form-control"
                                                                        name="Mot_de_passe" id="Mot_de_passe"
                                                                        placeholder="Entrez votre mot de passe"
                                                                        value="" />
                                                                    @if ($errors->has('Mot_de_passe'))
                                                                        <span
                                                                            class="text-danger">{{ $errors->first('Mot_de_passe') }}</span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="Mot_de_passe_confirmation"
                                                                        class="form-label">Répétez le mot de passe</label>
                                                                    <input type="text" class="form-control"
                                                                        name="Mot_de_passe_confirmation" id="telephone"
                                                                        placeholder="Répétez votre mot de passe"
                                                                        value="" />
                                                                    @if ($errors->has('Mot_de_passe_confirmation'))
                                                                        <span
                                                                            class="text-danger">{{ $errors->first('Mot_de_passe_confirmation') }}</span>
                                                                    @endif
                                                                </div>
                                                            </div>

                                                            <!--end col-->
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="numero" class="form-label">Numéro de
                                                                        telephone</label>
                                                                    <input type="text" class="form-control"
                                                                        name="Telephone" id="telephone"
                                                                        placeholder="Entrez votre numero de telephone"
                                                                        value="{{ auth('enseignant')->user()->Telephone }}" />

                                                                    @if ($errors->has('Telephone'))
                                                                        <span
                                                                            class="text-danger">{{ $errors->first('Telephone') }}</span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="sexe" class="form-label">Selectionner
                                                                        votre sexe</label>
                                                                    <select name="Genre" class="form-control" id="">
                                                                        <option
                                                                            value="{{ auth('enseignant')->user()->Genre }}">
                                                                            Masculin</option>
                                                                        <option value="Masculin"
                                                                            {{ auth('enseignant')->user()->Genre == 'Masculin' ? 'selected' : '' }}>
                                                                            Masculin</option>
                                                                        <option value="Feminin"
                                                                            {{ auth('enseignant')->user()->Genre == 'Feminin' ? 'selected' : '' }}>
                                                                            Feminin</option>
                                                                    </select>
                                                                    @if ($errors->has('Genre'))
                                                                        <span class="text-danger">{{ $errors->first('Genre') }}</span>
                                                                    @endif
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="titre" class="form-label">Selectionner
                                                                        votre titre</label>
                                                                    <select name="titre_id" class="form-control"
                                                                        id="">
                                                                        @foreach ($titres as $titre)
                                                                            <option value="{{ $titre->id }}"
                                                                                {{ auth('enseignant')->user()->titre_id == $titre->id ? 'selected' : '' }}>
                                                                                {{ $titre->Nom }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                    @if ($errors->has('titre_id'))
                                                                        <span
                                                                            class="text-danger">{{ $errors->first('titre_id') }}</span>
                                                                    @endif
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="garde" class="form-label">Selectionner votre garde</label>
                                                                    <select name="grade_id" class="form-control" id="">
                                                                        @foreach ($grades as $grade)
                                                                            <option value="{{ $grade->id }}"
                                                                                {{ auth('enseignant')->user()->grade_id == $grade->id ? 'selected' : '' }}>
                                                                                {{ $grade->Nom }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                    @if ($errors->has('grade_id'))
                                                                        <span
                                                                            class="text-danger">{{ $errors->first('grade_id') }}</span>
                                                                    @endif
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-12">
                                                                <div class="mb-3">
                                                                    <label for="photo" class="form-labonneabel">Votre photo</label>
                                                                    <input type="file" class="form-control"
                                                                        name="Photo" id="fileInput"
                                                                        accept=".jpg, .jpeg, .png" />
                                                                    <div class="underline"></div>
                                                                    @if ($errors->has('Photo'))
                                                                        <span
                                                                            class="text-danger">{{ $errors->first('Photo') }}</span>
                                                                    @endif
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="fonction" class="form-label">Selectionner
                                                                        votre fonction</label>
                                                                    <select name="fonction_id" class="form-control"
                                                                        id="">
                                                                        @foreach ($fonctions as $fonction)
                                                                            <option value="{{ $fonction->id }}"
                                                                                {{ auth('enseignant')->user()->fonction_id == $fonction->id ? 'selected' : '' }}>
                                                                                {{ $fonction->Nom }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    @if ($errors->has('fonction_id'))
                                                                        <span
                                                                            class="text-danger">{{ $errors->first('fonction_id') }}</span>
                                                                    @endif
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="ufr" class="form-label">Selectionner
                                                                        votre ufr</label>
                                                                    <select name="ufr_id" class="form-control"
                                                                        id="">
                                                                        @foreach ($ufrs as $ufr)
                                                                            <option value="{{ $ufr->id }}"
                                                                                {{ auth('enseignant')->user()->ufr_id == $ufr->id ? 'selected' : '' }}>
                                                                                {{ $ufr->Nom }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    @if ($errors->has('ufr_id'))
                                                                        <span
                                                                            class="text-danger">{{ $errors->first('ufr_id') }}</span>
                                                                    @endif
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-12">
                                                                <div class="mb-3">
                                                                    <label for="departement"
                                                                        class="form-labonneabel">Votre departement</label>
                                                                    <select name="departement_id" class="form-control"
                                                                        id="">
                                                                        @foreach ($departements as $departement)
                                                                            <option value="{{ $departement->id }}"
                                                                                {{ auth('enseignant')->user()->departement_id == $departement->id ? 'selected' : '' }}>
                                                                                {{ $departement->Nom }}</option>
                                                                        @endforeach

                                                                    </select>
                                                                    @if ($errors->has('departement_id'))
                                                                        <span
                                                                            class="text-danger">{{ $errors->first('departement_id') }}</span>
                                                                    @endif
                                                                </div>
                                                            </div>


                                                            <div class="col-lg-12">
                                                                <div class="hstack gap-2 justify-content-end">
                                                                    <button type="submit"
                                                                        {{-- onclick="return confirm('Etes vous sûr de vouloir enrregistré les nouveaux changement ???')" --}}
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
