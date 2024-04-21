@extends('admin.layouts.app')

@section('titre', 'Les fonctions administrative occupés')

@php
    $recherche = 'une fonction administrative occupé';
    $name = 'Fao';
@endphp

@section('contenu')
    <div class="main-panel">
        <div class="content-wrapper">

            {{-- ajouter avec succes --}}
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }} </div>
            @endif

            {{-- bouton de l'ajout  --}}
            <div class="d-flex justify-content-end">
                <a href="#" class="btn btn-outline-primary" data-bs-toggle="modal"
                    data-bs-target="#exampleModalEditionFao" title="Cliquez ici pour ajouter une fonction administrative">
                    Ajouter une fonction administrative
                </a>
            </div>
            {{-- fin du botton --}}

            {{-- l'affichage du formulaire lorsqu'on appuis sur le button ajouter --}}
            <div class="modal fade" id="exampleModalEditionFao" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel" style="color: blue">
                                Ajouter une fonction administrative
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
                        @foreach ($faos as $fao)
                        <tr>
                            <th>{{ $fao->Nom }}</th>
                            <th>
                                <div class="d-flex justify-content-center">
                                    <a href="{{route('admin.fao.modifier', $fao)}}" class="btn btn-success col-4 text-white" style="margin-right: 10px; width: 124px">
                                        Modifier
                                    </a>
                                    <form action="{{route('admin.fao.supprimer', $fao)}}" method="POST">
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
