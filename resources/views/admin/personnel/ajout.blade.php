@extends('admin.layouts.app')

@section('titre', "Ajout d'un personnel")

@section('contenu')
    <div class="main-panel">
        <div class="content-wrapper col-md-6 col-sm-12">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="d-flex justify-content-between flex-wrap">
                        <div class="d-flex align-items-end flex-wrap">
                            <div class="me-md-3 me-xl-5">
                                <h2>Ajout d'un personnel</h2>
                            </div>
                            <div class="d-flex">
                                <i class="mdi mdi-home text-muted hover-cursor"></i>
                                <p class="text-muted mb-0 hover-cursor">
                                    &nbsp;/&nbsp;Listes&nbsp;/Ajout
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center align-items-center" style="height: 60%;">
                <div class="card" style="width: auto;">
                    <div class="card-body">
                        <h5 class="card-title">Option de creation d'un personnel</h5>
                        {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                        <a href="{{ route('admin.listes.ajout-enseignant') }}" class="btn btn-primary">Enseignants</a>
                        <a href="{{ route('admin.listes.ajout-atos') }}" class="btn btn-warning">Personnels ATOS</a>
                    </div>
                </div>
            </div>
        </div>
    @endsection
