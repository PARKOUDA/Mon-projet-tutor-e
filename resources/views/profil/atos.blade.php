@extends('admin.layouts.app')

@section('titre', 'Mon profil atos')

@section('contenu')
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="d-flex justify-content-between flex-wrap">
                        <div class="d-flex align-items-end flex-wrap">
                            <div class="me-md-3 me-xl-5">
                                <h2>Mon profil ATOS</h2>
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
                                        <h2 class="text-dark mb-1">{{ auth('atos')->user()->Nom }}
                                            {{ auth('atos')->user()->Prenom }}</h2>
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
                                            <table class="table table-borderless mb-0">
                                                <tbody>
                                                    <tr>
                                                        <th class="ps-0" scope="row">
                                                            Nom prénom :
                                                        </th>
                                                        <td class="text-muted">
                                                            {{ auth('atos')->user()->Nom }}
                                                            {{ auth('atos')->user()->Prenom }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">
                                                            Mobile :
                                                        </th>
                                                        <td class="text-muted">
                                                            +(226) {{ auth('atos')->user()->Telephone }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">
                                                            E-mail :
                                                        </th>
                                                        <td class="text-muted">
                                                            {{ auth('atos')->user()->Email }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">
                                                            Genre :
                                                        </th>
                                                        <td class="text-muted">
                                                            {{ auth('atos')->user()->Genre }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">
                                                            Emploi :
                                                        </th>
                                                        <td class="text-muted">
                                                            {{ auth('atos')->user()->emploi->Nom }}
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th class="ps-0" scope="row">
                                                            Fonction :
                                                        </th>
                                                        <td class="text-muted">
                                                            {{ auth('atos')->user()->fao->Nom }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">
                                                            Structure :
                                                        </th>
                                                        <td class="text-muted">
                                                            {{ auth('atos')->user()->structure->Nom }}
                                                        </td>
                                                    </tr>
                                                    {{-- <tr>
                                                    <th class="ps-0" scope="row">
                                                        Departement :
                                                    </th>
                                                    <td class="text-muted">
                                                        {{ auth('enseignant')->user()->departement->Nom }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="ps-0" scope="row">
                                                        Titre :
                                                    </th>
                                                    <td class="text-muted">
                                                        {{ auth('enseignant')->user()->titre->Nom }}
                                                    </td>
                                                </tr> --}}
                                                    <tr>
                                                        <th class="ps-0" scope="row">
                                                            Date d'inscription
                                                        </th>
                                                        <td class="text-muted">
                                                            {{ auth('atos')->user()->created_at }}
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                        <!--end tab-pane-->
                                        <div class="tab-pane fade" id="documents" role="tabpanel">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title mb-3">
                                                        Edition les informations de mon compte
                                                    </h5>
                                                    <br />
                                                    <form action="{{ route('atos.profil.action') }}" method="POST"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        @method('POST')
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="fullname" class="form-label">Nom</label>
                                                                    <input type="text" name="Nom"
                                                                        class="form-control" id="fullname"
                                                                        placeholder="Entrez votre nom"
                                                                        value="{{ auth('atos')->user()->Nom }}" />
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
                                                                        value="{{ auth('atos')->user()->Prenom }}" />
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
                                                                        value="{{ auth('atos')->user()->Matricule }}" />
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
                                                                        value="{{ auth('atos')->user()->Email }}" />
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
                                                                        value="{{ auth('atos')->user()->Telephone }}" />

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
                                                                    <select name="Genre" class="form-control"
                                                                        id="">
                                                                        <option value="{{ auth('atos')->user()->Genre }}">
                                                                            Masculin</option>
                                                                        <option value="Masculin"
                                                                            {{ auth('atos')->user()->Genre == 'Masculin' ? 'selected' : '' }}>
                                                                            Masculin</option>
                                                                        <option value="Feminin"
                                                                            {{ auth('atos')->user()->Genre == 'Feminin' ? 'selected' : '' }}>
                                                                            Feminin</option>
                                                                    </select>
                                                                    @if ($errors->has('Genre'))
                                                                        <span
                                                                            class="text-danger">{{ $errors->first('Genre') }}</span>
                                                                    @endif
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="emploi" class="form-label">Selectionner
                                                                        votre emploi</label>
                                                                    <select name="emploi_id" class="form-control"
                                                                        id="">
                                                                        @foreach ($emplois as $emploi)
                                                                            <option value="{{ $emploi->id }}"
                                                                                {{ auth('atos')->user()->emploi_id == $emploi->id ? 'selected' : '' }}>
                                                                                {{ $emploi->Nom }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                    @if ($errors->has('emploi_id'))
                                                                        <span
                                                                            class="text-danger">{{ $errors->first('emploi_id') }}</span>
                                                                    @endif
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="structure" class="form-label">Selectionner
                                                                        votre direction/service</label>
                                                                    <select name="structure_id" class="form-control"
                                                                        id="">
                                                                        @foreach ($structures as $structure)
                                                                            <option value="{{ $structure->id }}"
                                                                                {{ auth('atos')->user()->structure_id == $structure->id ? 'selected' : '' }}>
                                                                                {{ $structure->Nom }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                    @if ($errors->has('structure_id'))
                                                                        <span
                                                                            class="text-danger">{{ $errors->first('structure_id') }}</span>
                                                                    @endif
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-12">
                                                                <div class="mb-3">
                                                                    <label for="photo" class="form-labonneabel">Votre
                                                                        photo</label>
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

                                                            <<div class="col-lg-12">
                                                                <div class="mb-3">
                                                                    <label for="fao" class="form-label">Selectionner
                                                                        votre fonction</label>
                                                                    <select name="fao_id" class="form-control"
                                                                        id="">
                                                                        @foreach ($faos as $fao)
                                                                            <option value="{{ $fao->id }}"
                                                                                {{ auth('atos')->user()->fao_id == $fao->id ? 'selected' : '' }}>
                                                                                {{ $fao->Nom }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                    @if ($errors->has('fao_id'))
                                                                        <span
                                                                            class="text-danger">{{ $errors->first('fao_id') }}</span>
                                                                    @endif
                                                                </div>
                                                        </div>


                                                        <div class="col-lg-12">
                                                            <div class="hstack gap-2 justify-content-end">
                                                                <button type="submit" {{-- onclick="return confirm('Etes vous sûr de vouloir enrregistré les nouveaux changement ???')" --}}
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
