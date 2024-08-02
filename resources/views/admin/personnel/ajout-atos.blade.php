@extends('admin.layouts.app')

@section('titre', "Ajout d'un Atos")

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
                <input type="text" placeholder="Email" name="Email" class="form-control" value="{{old('Email')}}">

                @error('Email')
                    <div class="text-danger">{{$message}} </div>
                @enderror
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="" class="form-label">Mot de passe</label>
                <input type="password" placeholder="Mot de passe" name="Mot_de_passe" class="form-control">

                @error('Mot de passe')
                    <div class="text-danger">{{$message}} </div>
                @enderror
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="" class="form-label">Répetez votre mot de passe</label>
                <input type="password" placeholder="Répetez votre mot de passe" name="Mot_de_passe_confirmation" class="form-control">

                @if ($errors->has('Mot_de_passe_confirmation'))
                    <span class="text-danger">{{  $errors->first('Mot_de_passe_confirmation') }}</span>
                    @endif
                {{-- @error('Mot_de_passe_confirmation')
                    <div class="text-danger">{{$message}} </div>
                @enderror --}}
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="" class="form-label">Téléphone</label>
                <input type="text" placeholder="Téléphone" name="Telephone" class="form-control" value="{{old('Telephone')}}">
                
                @error('Telephone')
                    <div class="text-danger">{{$message}} </div>
                @enderror
            </div>
            
            {{-- <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="" class="form-label">Email</label>
                <input type="text" placeholder="Email" name="Email" class="form-control" value="{{old('Email')}}">

                @error('Email')
                    <div class="text-danger">{{$message}} </div>
                @enderror
            </div> --}}

            <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="" class="form-label">Genre</label>
                <input type="text" placeholder="Genre" name="Genre" class="form-control" value="{{old('Genre')}}">

                @error('Genre')
                    <div class="text-danger">{{$message}} </div>
                @enderror
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                <select name="emploi_id" class="form-select">
                    <option>Veuillez choisir un emploi</option>
                    @foreach ($emplois as $id => $nom)
                        <option value="{{$id}}">{{$nom}}</option>
                    @endforeach
                </select>

                @error('emploi_id')
                    <div class="text-danger">{{$message}} </div>
                @enderror
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <select name="structure_id" class="form-select">
                    <option>Veuillez choisir une structure</option>
                    @foreach ($structures as $id => $nom)
                        <option value="{{$id}}">{{$nom}}</option>
                    @endforeach
                </select>
                
                @error('structure_id')
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
                <select name="role" class="form-select">
                    <option>Veuillez choisir un role</option>
                    @foreach ($roles as $id => $nom)
                        <option value="{{$id}}">{{$nom}}</option>
                    @endforeach
                </select>

                @error('role')
                    <div class="text-danger">{{$message}} </div>
                @enderror
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                <select name="fao_id" class="form-select">
                    <option>Veuillez choisir une fonction </option>
                    @foreach ($faos as $id => $nom)
                        <option value="{{$id}}">{{$nom}}</option>
                    @endforeach
                </select>

                @error('fao_id')
                    <div class="text-danger">{{$message}} </div>
                @enderror
            </div>
            <input type="submit" value="Ajouter" class="form-control btn btn-primary text-white">
        </form>
    </div>
</div>
@endsection

