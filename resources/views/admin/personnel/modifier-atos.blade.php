@extends('admin.layouts.app')

@section('titre', 'Modifier un atos')

@section('contenu')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="container-fluid m-3">
            <form class="row g-3" action="{{route('admin.atos.sauvegarde-atos', $atos)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="" class="form-label">Nom</label>
                    <input type="text" placeholder="Nom" name="Nom" class="form-control" value="{{$atos->Nom}}">
    
                    @error('Nom')
                        <div class="text-danger">{{$message}} </div>
                    @enderror
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="" class="form-label">Prénom</label>
                    <input type="text" placeholder="Prénom" name="Prenom" class="form-control" value="{{$atos->Prenom}}">
    
                    @error('Prenom')
                        <div class="text-danger">{{$message}} </div>
                    @enderror
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <label for="" class="form-label">Matricule</label>
                    <input type="text" placeholder="Matricule" name="Matricule" class="form-control" value="{{$atos->Matricule}}">
    
                    @error('Matricule')
                        <div class="text-danger">{{$message}} </div>
                    @enderror
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <label for="" class="form-label">Email</label>
                    <input type="email" placeholder="Email" name="Email" class="form-control" value="{{$atos->Email}}">
    
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
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="" class="form-label">Téléphone</label>
                    <input type="text" placeholder="Téléphone" name="Telephone" class="form-control" value="{{$atos->Telephone}}">
    
                    @error('Telephone')
                        <div class="text-danger">{{$message}} </div>
                    @enderror
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="" class="form-label">Genre</label>
                    <input type="text" placeholder="Genre" name="Genre" class="form-control" value="{{$atos->Genre}}">
    
                    @error('Genre')
                        <div class="text-danger">{{$message}} </div>
                    @enderror
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="" class="form-label">Emploi</label>
                    <select name="emploi_id" class="form-select">
                        @foreach ($emplois as $id => $nom)
                            <option value="{{$id}}" {{ $atos->emploi_id == $id ? 'selected' : '' }}>{{$nom}}</option>
                        @endforeach
                    </select>
    
                    @error('emploi_id')
                        <div class="text-danger">{{$message}} </div>
                    @enderror
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="" class="form-label">Structure</label>
                    <select name="structure_id" class="form-select">
                        @foreach ($structure as $id => $nom)
                            <option value="{{$id}}" {{ $atos->structure_id == $id ? 'selected' : '' }}>{{$nom}}</option>
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
                    <label for="" class="form-label">Role</label>
                    <select name="role_id" class="form-select">
                        @foreach ($roles as $id => $nom)
                            <option value="{{$id}}" {{ $atos->role_id == $id ? 'selected' : '' }}>{{$nom}}</option>
                        @endforeach
                    </select>
    
                    @error('role_id')
                        <div class="text-danger">{{$message}} </div>
                    @enderror
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="" class="form-label">Fonction</label>
                    <select name="fao_id" class="form-select">
                        @foreach ($faos as $id => $nom)
                            <option value="{{$id}}" {{ $atos->fao_id == $id ? 'selected' : '' }}>{{$nom}}</option>
                        @endforeach
                    </select>
    
                    @error('fao_id')
                        <div class="text-danger">{{$message}} </div>
                    @enderror
                </div>
                <input type="submit" value="Modifier" class="form-control btn btn-primary text-white">
            </form>
        </div>
    </div>
</div>
@endsection