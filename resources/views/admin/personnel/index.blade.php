@extends('admin.layouts.app')

@section('titre', 'Information sur le personnels')

@section('contenu')
    <div class="main-panel">
        <div class="content-wrapper">
            {{-- ajouter avec succes --}}
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }} </div>
            @endif
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="d-flex justify-content-between flex-wrap">
                        <div class="d-flex align-items-end flex-wrap">
                            <div class="me-md-3 me-xl-5">
                                <h2>Gestion du personnels</h2>
                            </div>
                            <div class="d-flex">
                                <i class="mdi mdi-home text-muted hover-cursor"></i>
                                <p class="text-muted mb-0 hover-cursor">
                                    &nbsp;/&nbsp;Listes&nbsp;
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Bouton de creation d'un nouveau personnel --}}
            <div class="d-flex justify-content-end mb-3">
                <!-- Bouton "Ajouter un Personnel" aligné à droite -->
                <a href="{{ route('admin.listes.ajout-personnels') }}" class="btn btn-primary text-white">Ajouter un
                    Personnel</a>
            </div>
            {{-- Fin --}}

            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body dashboard-tabs p-0">
                            <ul class="nav nav-tabs px-4" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="Enseignants-tab" data-bs-toggle="tab" href="#overview"
                                        role="tab" aria-controls="overview" aria-selected="true">
                                        Enseignants
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"id="Atos-tab" data-bs-toggle="tab" href="#sales" role="tab"
                                        aria-controls="sales" aria-selected="false">
                                        Personnels Atos
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="admin-tab" data-bs-toggle="tab" href="#purchases" role="tab"
                                        aria-controls="purchases" aria-selected="false">
                                        Administrateurs
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content py-0 px-0">
                                <div class="tab-pane fade show active" id="overview"
                                    role="tabpanel"aria-labelledby="promoteur-tab">
                                    <div class="row">
                                        <div class="col-md-12 stretch-card">
                                            <div class="card">
                                                <div class="card-body">
                                                    <p class="card-title">Liste des enseignants</p>
                                                    <div class="table-responsive">
                                                        <table id="recent-purchases-listing" class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>Photo</th>
                                                                    <th>Matricule</th>
                                                                    <th>Nom Prénom</th>
                                                                    <th>Numéro</th>
                                                                    <th>Actions</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                {{-- reccuper les details d'un enseignant --}}
                                                                @foreach ($enseignants as $enseignant)
                                                                    <tr>
                                                                        <td>
                                                                            @if ($enseignant->Photo)
                                                                                <img src="{{ $enseignant->photoUrl() }}"
                                                                                    alt="">
                                                                            @endif
                                                                        </td>
                                                                        <td> {{ $enseignant->Matricule }} </td>
                                                                        <td> {{ $enseignant->Nom }}
                                                                            {{ $enseignant->Prenom }} </td>
                                                                        <td> {{ $enseignant->Telephone }} </td>
                                                                        <td>
                                                                            <a href="#"
                                                                                class="btn btn-outline-primary"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#exampleModalDetailEnseignant_{{ $enseignant->Matricule }}"
                                                                                title="Cliquez ici pour voir les details">
                                                                                Détail
                                                                            </a>
                                                                        </td>
                                                                        <td>
                                                                            <form action="{{ route('admin.enseignant.supprimer', $enseignant->id) }}" method="POST">
                                                                                @csrf
                                                                                @method('delete')
                                                                                <button type="submit" class="btn btn-danger btn-cool col-lg-4 col-md-12 col-sm-12" style="color: #feffff; width: 120px">
                                                                                    <i class="fa-sharp fa-plus" style="color: #feffff"></i>
                                                                                    Supprimer
                                                                                </button>
                                                                            </form>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                                <div>
                                                                    {{-- reccuper les details d'un enseignant lorsqu'on clic sur le button detail --}}
                                                                    @foreach ($enseignants as $enseignant)
                                                                        <div class="modal fade"
                                                                            id="exampleModalDetailEnseignant_{{ $enseignant->Matricule }}"
                                                                            tabindex="-1"
                                                                            aria-labelledby="exampleModalLabel"
                                                                            aria-hidden="true">
                                                                            <div class="modal-dialog">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h5 class="modal-title"
                                                                                            id="exampleModalLabel"
                                                                                            style="color: blue">
                                                                                            Detail de l'enseignant
                                                                                            {{ $enseignant->Nom }}
                                                                                            {{ $enseignant->Prenom }}
                                                                                        </h5>
                                                                                        @if ($enseignant->Photo)
                                                                                            <img src="{{ $enseignant->photoUrl() }}"
                                                                                                alt=""
                                                                                                class="rounded-circle ms-5"
                                                                                                style="width: 50px; height: 50px;">
                                                                                        @endif
                                                                                        <button type="button"
                                                                                            class="btn-close"
                                                                                            data-bs-dismiss="modal"
                                                                                            aria-label="Close"></button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <form action="" method="POST"
                                                                                            enctype="multipart/form-data">
                                                                                            <div class="">
                                                                                                <label for="recipient-name"
                                                                                                    class="col-form-label">
                                                                                                    Nom et prénom :
                                                                                                    <strong>{{ $enseignant->Nom }}
                                                                                                        {{ $enseignant->Prenom }}</strong>
                                                                                                </label>
                                                                                            </div>

                                                                                            <div class="">
                                                                                                <label for="recipient-name"
                                                                                                    class="col-form-label">
                                                                                                    Genre :
                                                                                                    <strong>{{ $enseignant->Genre }}</strong>
                                                                                                </label>
                                                                                            </div>

                                                                                            <div class="">
                                                                                                <label for="recipient-name"
                                                                                                    class="col-form-label">
                                                                                                    Adresse mail :
                                                                                                    <strong>{{ $enseignant->Email }}</strong>
                                                                                                </label>
                                                                                            </div>

                                                                                            <div class="">
                                                                                                <label for="recipient-name"
                                                                                                    class="col-form-label">
                                                                                                    Numéro :
                                                                                                    <strong>{{ $enseignant->Telephone }}</strong>
                                                                                                </label>
                                                                                            </div>

                                                                                            <div class="">
                                                                                                <label
                                                                                                    for="recipient-name"class="col-form-label">
                                                                                                    Titre :
                                                                                                    <strong>{{ $enseignant->titre->Nom }}</strong>
                                                                                                </label>
                                                                                            </div>

                                                                                            <div class="">
                                                                                                <label
                                                                                                    for="recipient-name"class="col-form-label">
                                                                                                    Grade :
                                                                                                    <strong>{{ $enseignant->grade->Nom }}</strong>
                                                                                                </label>
                                                                                            </div>

                                                                                            <div class="">
                                                                                                <label for="recipient-name"
                                                                                                    class="col-form-label">
                                                                                                    Fonction :
                                                                                                    <strong>{{ $enseignant->fonction->Nom }}</strong>
                                                                                                </label>
                                                                                            </div>

                                                                                            <div class="">
                                                                                                <label for="recipient-name"
                                                                                                    class="col-form-label">
                                                                                                    Ufr :
                                                                                                    <strong>{{ $enseignant->ufr->Nom }}</strong>
                                                                                                </label>
                                                                                            </div>

                                                                                            <div class="">
                                                                                                <label for="recipient-name"
                                                                                                    class="col-form-label">
                                                                                                    Departement :
                                                                                                    <strong>
                                                                                                            {{ $enseignant->departement->Nom }}.
                                                                                                    </strong>
                                                                                                </label>
                                                                                            </div>

                                                                                            <div class="">
                                                                                                <label for="recipient-name"
                                                                                                    class="col-form-label">
                                                                                                    Role :
                                                                                                    <strong>
                                                                                                        {{ $enseignant->role }}
                                                                                                    </strong>
                                                                                                </label>
                                                                                            </div>

                                                                                            <div class="">
                                                                                                <label for="recipient-file"
                                                                                                    class="col-form-label">
                                                                                                    Date d'inscription :
                                                                                                    <strong>
                                                                                                        {{ $enseignant->created_at }}
                                                                                                    </strong>
                                                                                                </label>
                                                                                            </div>

                                                                                            <div class="modal-footer row">
                                                                                                <a href="{{ route('admin.enseignant.modifier', $enseignant) }}"
                                                                                                    type="submit"
                                                                                                    class="btn btn-success btn-cool col-lg-4 col-md-12 col-sm-12"
                                                                                                    style="color: #feffff; width: 120px">
                                                                                                    <i class="fa-sharp fa-plus"
                                                                                                        style="color: #feffff"></i>
                                                                                                    Modifier
                                                                                                </a>
                                                                                                {{-- <form action="{{ route('admin.enseignant.supprimer', $enseignant->id) }}" method="POST">
                                                                                                    @csrf
                                                                                                    @method('delete')
                                                                                                    <button type="submit" class="btn btn-danger btn-cool col-lg-4 col-md-12 col-sm-12" style="color: #feffff; width: 120px">
                                                                                                        <i class="fa-sharp fa-plus" style="color: #feffff"></i>
                                                                                                        Supprimer
                                                                                                    </button>
                                                                                                </form> --}}

                                                                                                <button type="button"
                                                                                                    class="btn btn-secondary col-lg-4 col-md-12 col-sm-12"
                                                                                                    style="color: #feffff; width: 120px"
                                                                                                    data-bs-dismiss="modal">
                                                                                                    <i class="fa-solid fa-xmark"
                                                                                                        style="color: #feffff"></i>
                                                                                                    Fermer
                                                                                                </button>
                                                                                            </div>

                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                                {{-- Fin details pour enseignants --}}
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{ $enseignants->links() }}
                                </div>
                                <div class="tab-pane fade" id="sales" role="tabpanel" aria-labelledby="abonne-tab">
                                    <div class="row">
                                        <div class="col-md-12 stretch-card">
                                            <div class="card">
                                                <div class="card-body">
                                                    <p class="card-title">Liste du Personnel ATOS</p>
                                                    <div class="table-responsive">
                                                        <table id="recent-purchases-listing" class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>Photo</th>
                                                                    <th>Matricule</th>
                                                                    <th>Nom Prénom</th>
                                                                    <th>Numéro</th>
                                                                    <th>Actions</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                {{-- reccuper les details d'un Atos --}}
                                                                @foreach ($personnelsAtos as $personnelAtos)
                                                                    <tr>
                                                                        <td>
                                                                            @if ($personnelAtos->Photo)
                                                                                <img src="{{ $personnelAtos->photoUrl() }}"
                                                                                    alt="">
                                                                            @endif
                                                                        </td>
                                                                        <td>{{ $personnelAtos->Matricule }} </td>
                                                                        <td>{{ $personnelAtos->Nom }}
                                                                            {{ $personnelAtos->Prenom }}</td>
                                                                        <td>{{ $personnelAtos->Telephone }} </td>

                                                                        <td>
                                                                            <a href="#"
                                                                                class="btn btn-outline-primary"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#exampleModalDetailpersonnelAtos_{{ $personnelAtos->Matricule }}"
                                                                                title="Cliquez ici pour voir les details">
                                                                                Détail
                                                                            </a>
                                                                        </td>
                                                                        <td>
                                                                            <form
                                                                                action="{{ route('admin.atos.supprimer', $personnelAtos) }}"
                                                                                method="POST">
                                                                                @csrf
                                                                                @method('delete')
                                                                                <button type="submit"
                                                                                    class="btn btn-danger btn-cool col-lg-4 col-md-12 col-sm-12"
                                                                                    style="color: #feffff; width: 120px">
                                                                                    <i class="fa-sharp fa-plus"
                                                                                        style="color: #feffff"></i>
                                                                                    Supprimer
                                                                                </button>
                                                                            </form>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                                <div>
                                                                    {{-- reccuper les details d'un Atos lorsqu'on clic sur le button detail --}}
                                                                    @foreach ($personnelsAtos as $personnelAtos)
                                                                        <div class="modal fade"
                                                                            id="exampleModalDetailpersonnelAtos_{{ $personnelAtos->Matricule }}"
                                                                            tabindex="-1"
                                                                            aria-labelledby="exampleModalLabel"
                                                                            aria-hidden="true">
                                                                            <div class="modal-dialog">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h5 class="modal-title"
                                                                                            id="exampleModalLabel"
                                                                                            style="color: blue">
                                                                                            Detail d'un Atos
                                                                                            {{ $personnelAtos->Nom }}
                                                                                            {{ $personnelAtos->Prenom }}

                                                                                            @if ($personnelAtos->Photo)
                                                                                                <img src="{{ $personnelAtos->photoUrl() }}"
                                                                                                    alt=""
                                                                                                    class="rounded-circle ms-5"
                                                                                                    style="width: 50px; height: 50px;">
                                                                                            @endif
                                                                                        </h5>
                                                                                        <button type="button"
                                                                                            class="btn-close"
                                                                                            data-bs-dismiss="modal"
                                                                                            aria-label="Close"></button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <form action=""
                                                                                            method="POST"
                                                                                            enctype="multipart/form-data">
                                                                                            <div class="">
                                                                                                <label for="recipient-name"
                                                                                                    class="col-form-label">
                                                                                                    Nom et prénom :
                                                                                                    <strong>{{ $personnelAtos->Nom }}
                                                                                                        {{ $personnelAtos->Prenom }}</strong>
                                                                                                </label>
                                                                                            </div>

                                                                                            <div class="">
                                                                                                <label for="recipient-name"
                                                                                                    class="col-form-label">
                                                                                                    Genre :
                                                                                                    <strong>{{ $personnelAtos->Genre }}</strong>
                                                                                                </label>
                                                                                            </div>

                                                                                            <div class="">
                                                                                                <label for="recipient-name"
                                                                                                    class="col-form-label">
                                                                                                    Adresse mail :
                                                                                                    <strong>{{ $personnelAtos->Email }}</strong>
                                                                                                </label>
                                                                                            </div>

                                                                                            <div class="">
                                                                                                <label for="recipient-name"
                                                                                                    class="col-form-label">
                                                                                                    Numéro :
                                                                                                    <strong>{{ $personnelAtos->Telephone }}</strong>
                                                                                                </label>
                                                                                            </div>

                                                                                            <div class="">
                                                                                                <label
                                                                                                    for="recipient-name"class="col-form-label">
                                                                                                    Emploi :
                                                                                                    <strong>{{ $personnelAtos->emploi->Nom }}</strong>
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="">
                                                                                                <label for="recipient-name"
                                                                                                    class="col-form-label">
                                                                                                    Structure :
                                                                                                    <strong>{{ $personnelAtos->structure->Nom }}</strong>
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="">
                                                                                                <label for="recipient-name"
                                                                                                    class="col-form-label">
                                                                                                    Fonction Administrative
                                                                                                    occupée :
                                                                                                    <strong>{{ $personnelAtos->fao->Nom }}</strong>
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="">
                                                                                                <label for="recipient-name"
                                                                                                    class="col-form-label">
                                                                                                    Role :
                                                                                                    <strong>
                                                                                                        {{ $personnelAtos->role }}
                                                                                                    </strong>
                                                                                                </label>
                                                                                            </div>

                                                                                            <div class="">
                                                                                                <label for="recipient-file"
                                                                                                    class="col-form-label">
                                                                                                    Date d'inscription :
                                                                                                    <strong>
                                                                                                        {{ $personnelAtos->created_at }}
                                                                                                    </strong>
                                                                                                </label>
                                                                                            </div>

                                                                                            <div class="modal-footer row">
                                                                                                <a href="{{ route('admin.atos.modifier', $personnelAtos) }}"
                                                                                                    type="submit"
                                                                                                    class="btn btn-success btn-cool col-lg-4 col-md-12 col-sm-12"
                                                                                                    style="color: #feffff; width: 120px">
                                                                                                    <i class="fa-sharp fa-plus"
                                                                                                        style="color: #feffff"></i>
                                                                                                    Modifier
                                                                                                </a>

                                                                                                <button type="button"
                                                                                                    class="btn btn-secondary col-lg-4 col-md-12 col-sm-12"
                                                                                                    style="color: #feffff; width: 120px"
                                                                                                    data-bs-dismiss="modal">
                                                                                                    <i class="fa-solid fa-xmark"
                                                                                                        style="color: #feffff"></i>
                                                                                                    Fermer
                                                                                                </button>
                                                                                            </div>

                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                                {{-- Fin details pour Atos --}}
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{ $personnelsAtos->links() }}
                                </div>
                                <div class="tab-pane fade" id="purchases" role="tabpanel" aria-labelledby="admin-tab">
                                    <div class="row">
                                        <div class="col-md-12 stretch-card">
                                            <div class="card">
                                                <div class="card-body">
                                                    <p class="card-title">
                                                        Liste des Administrateurs
                                                    </p>
                                                    <div class="table-responsive">
                                                        <table id="recent-purchases-listing" class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>Photo</th>
                                                                    <th>Matricule</th>
                                                                    <th>Noms Prénom</th>
                                                                    <th>Numéros</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                {{-- reccuper les details d'un adminEnseignant  --}}
                                                                @foreach ($adminsEnseignants as $adminEnseignant)
                                                                    <tr>
                                                                        <td>
                                                                            @if ($adminEnseignant->Photo)
                                                                                <img src="{{ $adminEnseignant->photoUrl() }}"
                                                                                    alt="">
                                                                            @endif
                                                                        </td>
                                                                        <td>{{ $adminEnseignant->Matricule }} </td>
                                                                        <td>{{ $adminEnseignant->Nom }}
                                                                            {{ $adminEnseignant->Prenom }}</td>
                                                                        <td>{{ $adminEnseignant->Telephone }} </td>

                                                                        <td>
                                                                            <a href="#"
                                                                                class="btn btn-outline-primary"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#exampleModalDetailAdminEnseignant_{{ $adminEnseignant->Matricule }}"
                                                                                title="Cliquez ici pour voir les details">
                                                                                Détail
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach

                                                                {{-- reccuper les details d'un adminAtos  --}}
                                                                @foreach ($adminsAtos as $adminAtos)
                                                                    <tr>
                                                                        <td>
                                                                            @if ($adminAtos->Photo)
                                                                                <img src="{{ $adminAtos->photoUrl() }}"
                                                                                    alt="">
                                                                            @endif
                                                                        </td>
                                                                        <td>{{ $adminAtos->Matricule }} </td>
                                                                        <td>{{ $adminAtos->Nom }}
                                                                            {{ $adminAtos->Prenom }}</td>
                                                                        <td>{{ $adminAtos->Telephone }} </td>

                                                                        <td>
                                                                            <a href="#"
                                                                                class="btn btn-outline-primary"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#exampleModalDetailAdminAtos_{{ $adminAtos->Matricule }}"
                                                                                title="Cliquez ici pour voir les details">
                                                                                Détail
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                                {{-- reccuper les details d'un adminEnseignant lorsqu'on clic sur le button detail --}}
                                                                <div>
                                                                    @foreach ($adminsEnseignants as $adminEnseignant)
                                                                        <div class="modal fade"
                                                                            id="exampleModalDetailAdminEnseignant_{{ $adminEnseignant->Matricule }}"
                                                                            tabindex="-1"
                                                                            aria-labelledby="exampleModalLabel"
                                                                            aria-hidden="true">
                                                                            <div class="modal-dialog">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h5 class="modal-title"
                                                                                            id="exampleModalLabel"
                                                                                            style="color: blue">
                                                                                            Detail de AdminEnseignant
                                                                                            {{ $adminEnseignant->Nom }}
                                                                                            {{ $adminEnseignant->Prenom }}

                                                                                            @if ($adminEnseignant->Photo)
                                                                                                <img src="{{ $adminEnseignant->photoUrl() }}"
                                                                                                    alt=""
                                                                                                    class="rounded-circle ms-5"
                                                                                                    style="width: 50px; height: 50px;">
                                                                                            @endif
                                                                                        </h5>
                                                                                        <button type="button"
                                                                                            class="btn-close"
                                                                                            data-bs-dismiss="modal"
                                                                                            aria-label="Close"></button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <form action=""
                                                                                            method="POST"
                                                                                            enctype="multipart/form-data">
                                                                                            <div class="">
                                                                                                <label for="recipient-name"
                                                                                                    class="col-form-label">
                                                                                                    Nom et prénom :
                                                                                                    <strong>{{ $adminEnseignant->Nom }}
                                                                                                        {{ $adminEnseignant->Prenom }}</strong>
                                                                                                </label>
                                                                                            </div>

                                                                                            <div class="">
                                                                                                <label for="recipient-name"
                                                                                                    class="col-form-label">
                                                                                                    Genre :
                                                                                                    <strong>{{ $adminEnseignant->Genre }}</strong>
                                                                                                </label>
                                                                                            </div>

                                                                                            <div class="">
                                                                                                <label for="recipient-name"
                                                                                                    class="col-form-label">
                                                                                                    Adresse mail :
                                                                                                    <strong>{{ $adminEnseignant->Email }}</strong>
                                                                                                </label>
                                                                                            </div>

                                                                                            <div class="">
                                                                                                <label for="recipient-name"
                                                                                                    class="col-form-label">
                                                                                                    Numéro :
                                                                                                    <strong>{{ $adminEnseignant->Telephone }}</strong>
                                                                                                </label>
                                                                                            </div>

                                                                                            <div class="">
                                                                                                <label
                                                                                                    for="recipient-name"class="col-form-label">
                                                                                                    Titre :
                                                                                                    <strong>{{ $adminEnseignant->titre->Nom }}</strong>
                                                                                                </label>
                                                                                            </div>

                                                                                            <div class="">
                                                                                                <label
                                                                                                    for="recipient-name"class="col-form-label">
                                                                                                    Grade :
                                                                                                    <strong>{{ $adminEnseignant->grade->Nom }}</strong>
                                                                                                </label>
                                                                                            </div>

                                                                                            <div class="">
                                                                                                <label for="recipient-name"
                                                                                                    class="col-form-label">
                                                                                                    Fonction :
                                                                                                    <strong>{{ $adminEnseignant->fonction->Nom }}</strong>
                                                                                                </label>
                                                                                            </div>

                                                                                            <div class="">
                                                                                                <label for="recipient-name"
                                                                                                    class="col-form-label">
                                                                                                    Ufr :
                                                                                                    <strong>{{ $adminEnseignant->ufr->Nom }}</strong>
                                                                                                </label>
                                                                                            </div>

                                                                                            <div class="">
                                                                                                <label for="recipient-name"
                                                                                                    class="col-form-label">
                                                                                                    Departement :
                                                                                                    <strong>
                                                                                                            {{ $adminEnseignant->departement->Nom }}.
                                                                                                    </strong>
                                                                                                </label>
                                                                                            </div>

                                                                                            <div class="">
                                                                                                <label for="recipient-file"
                                                                                                    class="col-form-label">
                                                                                                    Date d'inscription :
                                                                                                    <strong>
                                                                                                        {{ $adminEnseignant->created_at }}
                                                                                                    </strong>
                                                                                                </label>
                                                                                            </div>

                                                                                            <div class="modal-footer row">
                                                                                                <button type="button"
                                                                                                    class="btn btn-secondary col-lg-4 col-md-12 col-sm-12"
                                                                                                    style="color: #feffff; width: 120px"
                                                                                                    data-bs-dismiss="modal">
                                                                                                    <i class="fa-solid fa-xmark"
                                                                                                        style="color: #feffff"></i>
                                                                                                    Fermer
                                                                                                </button>
                                                                                            </div>

                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endforeach
                                                                    {{-- reccuper les details d'un adminAtos lorsqu'on clic sur le button detail --}}
                                                                    @foreach ($adminsAtos as $adminAtos)
                                                                        <div class="modal fade"
                                                                            id="exampleModalDetailAdminAtos_{{ $adminAtos->Matricule }}"
                                                                            tabindex="-1"
                                                                            aria-labelledby="exampleModalLabel"
                                                                            aria-hidden="true">
                                                                            <div class="modal-dialog">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h5 class="modal-title"
                                                                                            id="exampleModalLabel"
                                                                                            style="color: blue">
                                                                                            Detail AdminAtos
                                                                                            {{ $adminAtos->Nom }}
                                                                                            {{ $adminAtos->Prenom }}

                                                                                            @if ($adminAtos->Photo)
                                                                                                <img src="{{ $adminAtos->photoUrl() }}"
                                                                                                    alt=""
                                                                                                    class="rounded-circle ms-5"
                                                                                                    style="width: 50px; height: 50px;">
                                                                                            @endif
                                                                                        </h5>
                                                                                        <button type="button"
                                                                                            class="btn-close"
                                                                                            data-bs-dismiss="modal"
                                                                                            aria-label="Close"></button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <form action=""
                                                                                            method="POST"
                                                                                            enctype="multipart/form-data">
                                                                                            <div class="">
                                                                                                <label for="recipient-name"
                                                                                                    class="col-form-label">
                                                                                                    Nom et prénom :
                                                                                                    <strong>{{ $adminAtos->Nom }}
                                                                                                        {{ $adminAtos->Prenom }}</strong>
                                                                                                </label>
                                                                                            </div>

                                                                                            <div class="">
                                                                                                <label for="recipient-name"
                                                                                                    class="col-form-label">
                                                                                                    Genre :
                                                                                                    <strong>{{ $adminAtos->Genre }}</strong>
                                                                                                </label>
                                                                                            </div>

                                                                                            <div class="">
                                                                                                <label for="recipient-name"
                                                                                                    class="col-form-label">
                                                                                                    Adresse mail :
                                                                                                    <strong>{{ $adminAtos->Email }}</strong>
                                                                                                </label>
                                                                                            </div>

                                                                                            <div class="">
                                                                                                <label for="recipient-name"
                                                                                                    class="col-form-label">
                                                                                                    Numéro :
                                                                                                    <strong>{{ $adminAtos->Telephone }}</strong>
                                                                                                </label>
                                                                                            </div>

                                                                                            <div class="">
                                                                                                <label
                                                                                                    for="recipient-name"class="col-form-label">
                                                                                                    Emploi :
                                                                                                    <strong>{{ $adminAtos->emploi->Nom }}</strong>
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="">
                                                                                                <label for="recipient-name"
                                                                                                    class="col-form-label">
                                                                                                    Structure :
                                                                                                    <strong>{{ $adminAtos->structure->Nom }}</strong>
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="">
                                                                                                <label for="recipient-name"
                                                                                                    class="col-form-label">
                                                                                                    Fonction Administrative
                                                                                                    Occupée :
                                                                                                    <strong>{{ $adminAtos->fao->Nom }}</strong>
                                                                                                </label>
                                                                                            </div>

                                                                                            <div class="">
                                                                                                <label for="recipient-file"
                                                                                                    class="col-form-label">
                                                                                                    Date d'inscription :
                                                                                                    <strong>
                                                                                                        {{ $adminAtos->created_at }}
                                                                                                    </strong>
                                                                                                </label>
                                                                                            </div>

                                                                                            <div class="modal-footer row">
                                                                                                <button type="button"
                                                                                                    class="btn btn-secondary col-lg-4 col-md-12 col-sm-12"
                                                                                                    style="color: #feffff; width: 120px"
                                                                                                    data-bs-dismiss="modal">
                                                                                                    <i class="fa-solid fa-xmark"
                                                                                                        style="color: #feffff"></i>
                                                                                                    Fermer
                                                                                                </button>
                                                                                            </div>

                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                            </tbody>
                                                        </table>
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
            </div>

            <!-- fin de bienvenue -->

            <!-- main-panel ends -->
        </div>
    </div>
@endsection
