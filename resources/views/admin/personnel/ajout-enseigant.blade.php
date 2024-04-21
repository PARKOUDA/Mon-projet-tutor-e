@extends('admin.layouts.app')

@section('titre', "Ajout d'un Enseignant")

@section('contenu')
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
            <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="" class="form-label">Téléphone</label>
                <input type="text" placeholder="Téléphone" name="Telephone" class="form-control" value="{{old('Telephone')}}">

                @error('Telephone')
                    <div class="text-danger">{{$message}} </div>
                @enderror
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="" class="form-label">Mot de passe</label>
                <input type="password" placeholder="Mot de passe" name="Mot de passe" class="form-control">

                @error('Mot de passe')
                    <div class="text-danger">{{$message}} </div>
                @enderror
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <label for="" class="form-label">Email</label>
                <input type="text" placeholder="Email" name="Email" class="form-control" value="{{old('Email')}}">

                @error('Email')
                    <div class="text-danger">{{$message}} </div>
                @enderror
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <select name="titre_id" class="form-select">
                    <option>Veuillez choisir un titre</option>
                    @foreach ($titres as $id => $nom)
                        <option value="{{$id}}">{{$nom}}</option>
                    @endforeach
                </select>

                @error('titre_id')
                    <div class="text-danger">{{$message}} </div>
                @enderror
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <select name="grade_id" class="form-select">
                    <option>Veuillez choisir une grade</option>
                    @foreach ($grades as $id => $nom)
                        <option value="{{$id}}">{{$nom}}</option>
                    @endforeach
                </select>

                @error('grade_id')
                    <div class="text-danger">{{$message}} </div>
                @enderror
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <select name="fonction_id" class="form-select">
                    <option>Veuillez choisir un fonction</option>
                    @foreach ($fonctions as $id => $nom)
                        <option value="{{$id}}">{{$nom}}</option>
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
                    @foreach ($ufrs as $id => $nom)
                        <option value="{{$id}}">{{$nom}}</option>
                    @endforeach
                </select>

                @error('ufr_id')
                    <div class="text-danger">{{$message}} </div>
                @enderror
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <select name="role_id" class="form-select">
                    <option>Veuillez choisir un role</option>
                    @foreach ($roles as $id => $nom)
                        <option value="{{$id}}">{{$nom}}</option>
                    @endforeach
                </select>

                @error('role_id')
                    <div class="text-danger">{{$message}} </div>
                @enderror
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <select name="departement[]" class="form-select" multiple>
                    <option>Veuillez choisir un departement</option>
                    @foreach ($departements as $id => $nom)
                        <option value="{{$id}}">{{$nom}}</option>
                    @endforeach
                </select>

                @error('departement')
                    <div class="text-danger">{{$message}} </div>
                @enderror
            </div>
            <input type="submit" value="Ajouter" class="form-control btn btn-primary text-white">
        </form>
    </div>
@endsection
