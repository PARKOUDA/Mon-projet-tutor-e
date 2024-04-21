@extends('admin.layouts.app')

@section('titre', 'Modifier une structure')

@section('contenu')
<div class="main-panel">
    <div class="content-wrapper">
        <form action="{{route('admin.structure.modifier-sauvegarde', $structure)}}" method="post">
            @csrf
            @method('put')
            <div class="col-12 mb-3">
                <label for="" class="form-label">Nom</label>
                <input type="text" placeholder="Nom" name="Nom" class="form-control" value="{{$structure->Nom}}">
                
                @error('Nom')
                    <div class="text-danger">{{ $message }} </div>
                @enderror
            </div>
    
            <button class="btn btn-primary">Modifier</button>
        </form>
    </div>
</div>
@endsection