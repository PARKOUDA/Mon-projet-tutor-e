<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Inscription Enseignant</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style2.css') }}">

</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="container">
        <div class="text">
            Inscription Enseignant
        </div>
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div style="display: flex; justify-content: center;">
            <a href="/">
                <img src="{{asset('assets/images/logo-unz.jpg')}}" alt="logo de unz" width="100px">
            </a>
        </div><br><br>
        <div style="text-align:center;font-size: 30px;">
            Veuillez vous inscrire
        </div>
        @if($errors->has('login'))
        <div class="alert alert-danger form-login">
          {{ $errors->first('login') }}
        </div>
        @endif
        <form action="{{route('inscription-enseignant-action')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="input-data">
                    <input type="text" name="Nom" required placeholder="Entrez votre nom" >
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
                    <select name="titre_id" required >
                        <option value="" disabled selected hidden>Selectionner votre titre</option>
                        @foreach ($titres as $titre)
                        <option value="{{$titre->id}}">{{$titre->Nom}}</option>
                        @endforeach
                    </select>
                    <div class="underline"></div>
                    {{-- <label for="">Titre</label> --}}
                    @if ($errors->has('titre_id'))
                    <span class="text-danger">{{  $errors->first('titre_id') }}</span>
                    @endif
                </div>
                <div class="input-data">
                    <select name="grade_id" required>
                        <option value="" disabled selected hidden>Selectionner votre grade</option>
                        <@foreach ($grades as $grade)
                        <option value="{{$grade->id}}">{{$grade->Nom}}</option>
                        @endforeach
                    </select>
                    <div class="underline"></div>
                    {{-- <label for="">Grade</label> --}}
                    @if ($errors->has('grade_id'))
                    <span class="text-danger">{{  $errors->first('grade_id') }}</span>
                    @endif
                </div>
            </div>

            <div class="photo" style="">
                <label for="fileInput">Votre photo ici</label>
            </div>
            <div class="form-row">
                <div class="input-data">
                    <input type="file" name="Photo" id="fileInput" 
                     accept=".jpg, .jpeg, .png" />
                    <div class="underline"></div>
                    @if ($errors->has('Photo'))
                    <span class="text-danger">{{  $errors->first('Photo') }}</span>
                    @endif
                </div>
            </div>
            
            <div class="form-row">
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
                <div class="input-data">
                    <select name="fonction_id" required >
                        <option value="" disabled selected hidden>Selectionnez votre fonction</option>
                        @foreach ($fonctions as $fonction)
                        <option value="{{$fonction->id}}">{{$fonction->Nom}}</option>
                        @endforeach
                    </select>
                    <div class="underline"></div>
                    {{-- <label for="">Fonction</label> --}}
                    @if ($errors->has('fonction_id'))
                    <span class="text-danger">{{  $errors->first('fonction_id') }}</span>
                    @endif
                </div>
                <div class="input-data">
                    <select name="ufr_id" required>
                        <option value="" disabled selected hidden>Selectionnez votre ufr</option>
                        @foreach ($ufrs as $ufr)
                        <option value="{{$ufr->id}}">{{$ufr->Nom}}</option>
                        @endforeach
                    </select>
                    <div class="underline"></div>
                    {{-- <label for="">Ufr/Institut</label> --}}
                    @if ($errors->has('ufr_id'))
                    <span class="text-danger">{{  $errors->first('ufr_id') }}</span>
                    @endif
                </div>
            </div>

            <div class="form-row">
                <div class="input-data">
                    <select name="departement_id" required >
                        <option value="" disabled selected hidden>Selectionnez votre departement</option>
                        @foreach ($departements as $departement)
                        <option value="{{$departement->id}}">{{$departement->Nom}}</option>
                        @endforeach
                    </select>
                    <div class="underline"></div>
                    {{-- <label for="">Département</label> --}}
                    @if ($errors->has('departement_id'))
                    <span class="text-danger">{{  $errors->first('departement_id') }}</span>
                    @endif
                </div>
            </div>

            <div style="display: flex; justify-content: center;">
                <button type="submit" class="submit" style="background-color: #3498db; padding: 10px; border-radius: 10px; border:none; color:white; cursor: pointer; font-size:15px">Je m'inscris.</button>
            </div>
            <br>
            <div style="display: flex; justify-content: center;">
                <a href="{{route('inscription-atos')}}" style="margin-bottom: 5px;">Inscription ATOS</a> &nbsp;
                <a href="{{route('connexion-option')}}">Option de connexion</a>
            </div>
            
        </form>
    </div>
    <!-- partial -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Sélection du champ de sélection de l'UFR
        var ufrSelect = document.querySelector('select[name="ufr_id"]');

        // Écoute de l'événement de changement sur le champ de sélection de l'UFR
        ufrSelect.addEventListener('change', function() {
            var ufrId = this.value;

            // Envoi d'une requête AJAX au serveur pour récupérer les départements associés à l'UFR sélectionnée
            axios.get('/get-departements/' + ufrId)
                .then(function(response) {
                    var departements = response.data.departements;
                    var departementSelect = document.querySelector('select[name="departement_id"]');

                    // Effacement des options existantes
                    departementSelect.innerHTML = '';

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

</body>

</html>
