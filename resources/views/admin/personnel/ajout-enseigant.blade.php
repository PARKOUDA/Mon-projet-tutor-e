@extends('admin.layouts.app')

@section('titre', "Ajout d'un Enseignant")

@section('contenu')
<div class="main-panel">
    <div class="container-fluid m-3">
        <form class="row g-3" action="" method="post" enctype="multipart/form-data">
            @csrf
            <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="" class="form-label">Nom</label>
                <input type="text" placeholder="Nom" name="Nom" class="form-control" value="{{old('Nom')}}">

                @error('Nom')
                    <div class="text-danger">{{$message}} </div>
                @enderror
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="" class="form-label">Prénom</label>
                <input type="text" placeholder="Prénom" name="Prenom" class="form-control" value="{{old('Prenom')}}">

                @error('Prenom')
                    <div class="text-danger">{{$message}} </div>
                @enderror
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <label for="" class="form-label">Matricule</label>
                <input type="text" placeholder="Matricule" name="Matricule" class="form-control" value="{{old('Matricule')}}">

                @error('Matricule')
                    <div class="text-danger">{{$message}} </div>
                @enderror
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <label for="" class="form-label">Email</label>
                <input type="text" placeholder="Matricule" name="Email" class="form-control" value="{{old('Email')}}">

                @error('Email')
                    <div class="text-danger">{{$message}} </div>
                @enderror
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="" class="form-label">Mot de passe</label>
                <input type="password" placeholder="Mot de passe" name="password" class="form-control">

                @error('Mot de passe')
                    <div class="text-danger">{{$message}} </div>
                @enderror
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="" class="form-label">Répetez votre mot de passe</label>
                <input type="password" placeholder="Répetez votre mot de passe" name="password_confirmation" class="form-control">

                @if ($errors->has('password_confirmation'))
                    <span class="text-danger">{{  $errors->first('password_confirmation') }}</span>
                    @endif
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="" class="form-label">Téléphone</label>
                <input type="text" placeholder="Téléphone" name="Telephone" class="form-control" value="{{old('Telephone')}}">

                @error('Telephone')
                    <div class="text-danger">{{$message}} </div>
                @enderror
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="" class="form-label">Genre</label>
                <input type="text" placeholder="Genre" name="Genre" class="form-control" value="{{old('Genre')}}">

                @error('Genre')
                    <div class="text-danger">{{$message}} </div>
                @enderror
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <select name="titre_id" class="form-select">
                    <option>Veuillez choisir un titre</option>
                    @foreach ($titres as $titre)
                        <option value="{{$titre->id}}">{{$titre->Nom}}</option>
                    @endforeach
                </select>

                @error('titre_id')
                    <div class="text-danger">{{$message}} </div>
                @enderror
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <select name="grade_id" class="form-select">
                    <option>Veuillez choisir une grade</option>
                    @foreach ($grades as $grade)
                    <option value="{{$grade->id}}">{{$grade->Nom}}</option>
                    @endforeach
                </select>

                @error('grade_id')
                    <div class="text-danger">{{$message}} </div>
                @enderror
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <select name="fonction_id" class="form-select">
                    <option>Veuillez choisir un fonction</option>
                    @foreach ($fonctions as $fonction)
                        <option value="{{$fonction->id}}">{{$fonction->Nom}}</option>
                    @endforeach
                </select>

                @error('fonction_id')
                    <div class="text-danger">{{$message}} </div>
                @enderror
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <label for="" class="form-label">Photo</label>
                <input type="file" name="Photo" class="form-control">

                @error('Photo')
                    <div class="text-danger">{{$message}} </div>
                @enderror
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <select name="ufr_id" class="form-select">
                    <option>Veuillez choisir une ufr</option>
                    @foreach ($ufrs as $ufr)
                        <option value="{{$ufr->id}}">{{$ufr->Nom}}</option>
                    @endforeach
                </select>

                @error('ufr_id')
                    <div class="text-danger">{{$message}} </div>
                @enderror
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <select name="role" class="form-select">
                    <option>Veuillez choisir un role</option>
                    <option value="admin">Administrateur</option>
                    <option value="user">Utilisateur</option>
                </select>

                @error('role')
                    <div class="text-danger">{{$message}} </div>
                @enderror
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                {{-- <select name="departement_id" class="form-select" multiple>
                    <option>Veuillez choisir un departement</option>
                    @foreach ($departements as $id => $nom)
                        <option value="{{$id}}">{{$nom}}</option>
                    @endforeach
                </select> --}}

                <select name="departement_id" class="form-select">
                    <option>Veuillez choisir un departement</option>
                    @foreach ($departements as $departement)
                        <option value="{{$departement->id}}">{{$departement->Nom}}</option>
                    @endforeach
                </select>

                @error('departement_id')
                    <div class="text-danger">{{$message}} </div>
                @enderror
            </div>
            <input type="submit" value="Ajouter" class="form-control btn btn-primary text-white">
        </form>
    </div>
</div>
@endsection

@section("scripts")
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var ufrSelect = document.querySelector('select[name="ufr_id"]');
        var departementSelect = document.querySelector('select[name="departement_id"]');

        ufrSelect.addEventListener('change', function() {
            var ufrId = this.value;

            axios.get('/get-departements/' + ufrId)
                .then(function(response) {
                    var departements = response.data.departements;

                    // Effacement des options existantes
                    departementSelect.innerHTML = '<option>Veuillez choisir un departement</option>';

                    // Ajout des nouvelles options basées sur les départements récupérés
                    departements.forEach(function(departement) {
                        var option = document.createElement('option');
                        option.value = departement.id;
                        option.text = departement.Nom;
                        departementSelect.appendChild(option);
                    });
                })
                .catch(function(error) {
                    console.error('Une erreur s\'est produite :', error);
                });
        });
    });
</script>
@endsection