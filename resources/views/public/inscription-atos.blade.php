<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Inscription Atos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style2.css') }}">

</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="container">
        <div class="text">
            Inscription Atos
        </div>
        <div style="display: flex; justify-content: center;">
            <a href="/">
                <img src="{{asset('assets/images/logo-unz.jpg')}}" alt="logo de unz" width="100px">
            </a>
        </div><br><br>
        <div style="text-align:center;font-size: 30px;">
            Veuillez vous inscrire
        </div>
        <form action="{{route('inscription-atos-action')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="input-data">
                    <input type="text" name="Nom" required placeholder="Entrez votre nom">
                    <div class="underline"></div>
                    {{-- <label for="">Nom</label> --}}
                    @if ($errors->has('Nom'))
                    <span class="text-danger">{{  $errors->first('Nom') }}</span>
                    @endif
                </div>
                <div class="input-data">
                    <input type="text" name="Prenom" required placeholder="Entrez votre prenom">
            
                    <div class="underline"></div>
                    {{-- <label for="">Prénom</label> --}}
                    @if ($errors->has('Prenom'))
                    <span class="text-danger">{{  $errors->first('Prenom') }}</span>
                    @endif
                </div>
            </div>

            <div class="form-row">
                <div class="input-data">
                    <input type="text" name="Matricule" required placeholder="Entrez votre matricule">
                    <div class="underline"></div>
                    {{-- <label for="">Matricule</label> --}}
                    @if ($errors->has('Matricule'))
                    <span class="text-danger">{{  $errors->first('Matricule') }}</span>
                    @endif
                </div>
            </div>

            <div class="form-row">
                <div class="input-data">
                    <input type="email" name="Email" required placeholder="Entrez votre email">
                    <div class="underline"></div>
                    {{-- <label for="">Matricule</label> --}}
                    @if ($errors->has('Email'))
                    <span class="text-danger">{{  $errors->first('Email') }}</span>
                    @endif
                </div>
            </div>

            <div class="form-row">
                <div class="input-data">
                    <input type="password" name="Mot_de_passe" required placeholder="Entrez votre Mot de passe">
                    <div class="underline"></div>
                    {{-- <label for="">Email</label> --}}
                    @if ($errors->has('Mot_de_passe'))
                    <span class="text-danger">{{  $errors->first('Mot_de_passe') }}</span>
                    @endif
                </div>

                <div class="input-data">
                    <input type="password" name="Mot_de_passe_confirmation" required placeholder="Répétez votre mot de passe">
                    <div class="underline"></div>
                    {{-- <label for="">Mot de passe</label> --}}
                    @if ($errors->has('Mot_de_passe_confirmation'))
                    <span class="text-danger">{{  $errors->first('Mot_de_passe_confirmation') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-row">
                <div class="input-data">
                    <input type="text" name="Telephone" required placeholder="Entrez votre telephone">
            
                    <div class="underline"></div>
                    {{-- <label for="">Télephone</label> --}}
                    @if ($errors->has('Telephone'))
                    <span class="text-danger">{{  $errors->first('Telephone') }}</span>
                    @endif
                </div>
                <div class="input-data">
                    <div class="underline"></div>
                    <select name="Genre" required >
                        <option value="" disabled selected hidden>Selectionner votre sexe</option>
                        <option value="masculin">Masculin</option>
                        <option value="feminin">Feminin</option>
                    </select>
                    {{-- <label for="">Genre</label> --}}
                    @if ($errors->has('Genre'))
                    <span class="text-danger">{{  $errors->first('Genre') }}</span>
                    @endif
                </div>
            </div>

            <div class="form-row">
                <div class="input-data">
                    <select name="emploi_id" required>
                        <option value="" disabled selected hidden>Selectionnez votre emploi</option>
                        @foreach ($emplois as $emploi)
                        <option value="{{$emploi->id}}">{{$emploi->Nom}}</option>
                        @endforeach
                    </select>
                    <div class="underline"></div>
                    {{-- <label for="">Emploi</label> --}}
                    @if ($errors->has('emploi_id'))
                    <span class="text-danger">{{  $errors->first('emploi_id') }}</span>
                    @endif
                </div>
                <div class="input-data">
                    <select name="structure_id" required>
                        <option value="" disabled selected hidden>Selectionnez votre structure</option>
                        @foreach ($structures as $structure)
                        <option value="{{$structure->id}}">{{$structure->Nom}}</option>
                        @endforeach
                    </select>
                    <div class="underline"></div>
                    {{-- <label for="">Structure</label> --}}
                    @if ($errors->has('structure_id'))
                    <span class="text-danger">{{  $errors->first('structure_id') }}</span>
                    @endif
                </div>
            </div>
            <div class="photo" style="">
                <label for="fileInput">Votre photo ici</label>
            </div>
            <div class="form-row">
                <div class="input-data">
                    <input type="file" name="Photo" id="fileInput" accept=".jpg, .jpeg, .png">
                    <div class="underline"></div>
                    @if ($errors->has('Photo'))
                    <span class="text-danger">{{  $errors->first('Photo') }}</span>
                    @endif
                    {{-- <label for="fileInput">Sélectionnez une photo</label> --}}
                </div>
            </div>
            
            <div class="form-row">
                <div class="input-data">
                    <select name="fao_id" required>
                        <option value="" disabled selected hidden>Selectionnez votre fonction</option>
                        @foreach ($faos as $fao)
                        <option value="{{$fao->id}}">{{$fao->Nom}}</option>
                        @endforeach
                    </select>
                    <div class="underline"></div>
                    {{-- <label for="">Fonction Administrative Occupé</label> --}}
                    @if ($errors->has('fao_id'))
                    <span class="text-danger">{{  $errors->first('fao_id') }}</span>
                    @endif
                </div>
                {{-- <div class="input-data">
                    <select name="role" required>
                        <option value="" disabled selected hidden></option>
                        <option value="user" selected>Utilisateur</option>
                    </select>
                    <div class="underline"></div>
                    <label for="">Rôle</label>
                    @if ($errors->has('role'))
                    <span class="text-danger">{{  $errors->first('role') }}</span>
                    @endif
                </div> --}}
            </div>
            <div style="display: flex; justify-content: center;">
                <button class="submit" style="background-color: #3498db; padding: 10px; border-radius: 10px; border:none; color:white; cursor: pointer; font-size:15px">Je m'inscris</button>
            </div>
            <br>
            <div style="display: flex; justify-content: center;">
                <a href="{{route('inscription-enseignant')}}" style="margin-bottom: 5px;">Inscription Enseignant</a> &nbsp;
                <a href="{{route('connexion-option')}}">Option de connexion</a>
            </div>

        </form>
    </div>
    <!-- partial -->

</body>

</html>
