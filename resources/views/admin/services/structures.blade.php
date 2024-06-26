@extends('admin.layouts.app')

@section('titre', 'Les structures')

@php
    $recherche = 'une structure';
    $name = 'Structure';
@endphp

@section('contenu')
    <div class="main-panel">
        <div class="content-wrapper">

            {{-- ajouter avec succes --}}
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }} </div>
            @endif
                <h2>Gestion des structures</h2>
            {{-- bouton de l'ajout  --}}
            <div class="d-flex justify-content-end">
                <a href="#" class="btn btn-outline-primary" data-bs-toggle="modal"
                    data-bs-target="#exampleModalEditionStructure" title="Cliquez ici pour ajouter une structure">
                    Ajouter une structure
                </a>
            </div>
            {{-- fin du botton --}}

            {{-- l'affichage du formulaire lorsqu'on appuis sur le button ajouter --}}
            <div class="modal fade" id="exampleModalEditionStructure" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel" style="color: blue">
                                Ajouter une structure
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="POST">
                                @csrf
                                <div class="col-12">
                                    <label for="" class="form-label">Nom</label>
                                    <input type="text" placeholder="Nom" name="Nom" class="form-control"
                                        value="{{ old('Nom') }}">

                                    @error('Nom')
                                        <div class="text-danger">{{ $message }} </div>
                                    @enderror
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success btn-cool" style="color: #feffff">
                                        <i class="fa-sharp fa-plus" style="color: #feffff"></i>
                                        Valider
                                    </button>
                                    <button type="button" class="btn btn-secondary" style="color: #feffff"
                                        data-bs-dismiss="modal">
                                        <i class="fa-solid fa-xmark" style="color: #feffff"></i>
                                        Fermer
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{-- fin de l'affichage du formulaire --}}

            <div class="row">
                <table class="table m-5">
                    <thead class="table-dark">
                        <tr>
                            <th>Nom</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($structures as $structure)
                        <tr>
                            <th>{{ $structure->Nom }}</th>
                            <th>
                                <div class="d-flex justify-content-center">
                                    <a href="{{route('admin.structure.modifier', $structure)}}" class="btn btn-success col-4 text-white" style="margin-right: 10px; width: 124px">
                                        Modifier
                                    </a>
                                    <form action="{{route('admin.structure.supprimer', $structure)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-warning text-white" style="margin-left: 10px">
                                            Supprimer
                                        </button>
                                    </form>
                                </div>
                            </th>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
