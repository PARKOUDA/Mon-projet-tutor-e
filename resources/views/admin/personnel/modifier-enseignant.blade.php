@extends('admin.layouts.app')

@section('titre', 'Modifier un enseignant')

@section('contenu')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="container-fluid m-3">
            <form class="row g-3" action="{{route('admin.enseignant.sauvegarde-enseignant', $enseignant)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="" class="form-label">Nom</label>
                    <input type="text" placeholder="Nom" name="Nom" class="form-control" value="{{$enseignant->Nom}}">
    
                    @error('Nom')
                        <div class="text-danger">{{$message}} </div>
                    @enderror
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="" class="form-label">Prénom</label>
                    <input type="text" placeholder="Prénom" name="Prenom" class="form-control" value="{{$enseignant->Prenom}}">
    
                    @error('Prenom')
                        <div class="text-danger">{{$message}} </div>
                    @enderror
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <label for="" class="form-label">Matricule</label>
                    <input type="text" placeholder="Matricule" name="Matricule" class="form-control" value="{{$enseignant->Matricule}}">
    
                    @error('Matricule')
                        <div class="text-danger">{{$message}} </div>
                    @enderror
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="" class="form-label">Téléphone</label>
                    <input type="text" placeholder="Téléphone" name="Telephone" class="form-control" value="{{$enseignant->Telephone}}">
    
                    @error('Telephone')
                        <div class="text-danger">{{$message}} </div>
                    @enderror
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <label for="" class="form-label">Email</label>
                    <input type="text" placeholder="Email" name="Email" class="form-control" value="{{$enseignant->Email}}">
    
                    @error('Email')
                        <div class="text-danger">{{$message}} </div>
                    @enderror
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <label for="" class="form-label">Titre</label>
                    <select name="titre_id" class="form-select">
                        @foreach ($titres as $id => $nom)
                            <option value="{{$id}}" {{ $enseignant->titre_id == $id ? 'selected' : '' }}>{{$nom}}</option>
                        @endforeach
                    </select>
    
                    @error('titre_id')
                        <div class="text-danger">{{$message}} </div>
                    @enderror
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <label for="" class="form-label">Grade</label>
                    <select name="grade_id" class="form-select">
                        @foreach ($grades as $id => $nom)
                            <option value="{{$id}}" {{ $enseignant->grade_id == $id ? 'selected' : '' }}>{{$nom}}</option>
                        @endforeach
                    </select>
    
                    @error('grade_id')
                        <div class="text-danger">{{$message}} </div>
                    @enderror
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <label for="" class="form-label">Fonction</label>
                    <select name="fonction_id" class="form-select">
                        @foreach ($fonctions as $id => $nom)
                            <option value="{{$id}}" {{ $enseignant->fonction_id == $id ? 'selected' : '' }}>{{$nom}}</option>
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
                    <label for="" class="form-label">Ufr</label>
                    <select name="ufr_id" class="form-select">
                        @foreach ($ufrs as $id => $nom)
                            <option value="{{$id}}" {{ $enseignant->ufr_id == $id ? 'selected' : '' }}>{{$nom}}</option>
                        @endforeach
                    </select>
    
                    @error('ufr_id')
                        <div class="text-danger">{{$message}} </div>
                    @enderror
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="" class="form-label">Role</label>
                    <select name="role_id" class="form-select">
                        @foreach ($roles as $id => $nom)
                            <option value="{{$id}}" {{ $enseignant->role_id == $id ? 'selected' : '' }}>{{$nom}}</option>
                        @endforeach
                    </select>
    
                    @error('role_id')
                        <div class="text-danger">{{$message}} </div>
                    @enderror
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <label for="" class="form-label">Departement</label>
                    <select name="departement[]" class="form-select" multiple>
                        @foreach ($departements as $id => $nom)
                            <option value="{{$id}}" {{ in_array($id, $enseignant->departement->pluck('id')->toArray()) ? 'selected' : '' }}>{{$nom}}</option>
                        @endforeach
                    </select>
    
                    @error('departement')
                        <div class="text-danger">{{$message}} </div>
                    @enderror
                </div>
                <input type="submit" value="Modifier" class="form-control btn btn-primary text-white">
            </form>
        </div>
    </div>
</div>
@endsection