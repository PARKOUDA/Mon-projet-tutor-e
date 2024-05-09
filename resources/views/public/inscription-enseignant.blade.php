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
        <div style="display: flex; justify-content: center;">
            <img src="{{asset('assets/images/logo-unz.jpg')}}" alt="logo de unz" width="100px">
        </div>
        <form action="{{route('inscription-enseignant-action')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="input-data">
                    <input type="text" name="Nom" required>
                    <div class="underline"></div>
                    <label for="">Nom</label>
                </div>
                <div class="input-data">
                    <input type="text" name="Prenom" required>
                    <div class="underline"></div>
                    <label for="">Prénom</label>
                </div>
            </div>

            <div class="form-row">
                <div class="input-data">
                    <input type="text" name="Matricule" required>
                    <div class="underline"></div>
                    <label for="">Matricule</label>
                </div>
            </div>

            <div class="form-row">
                <div class="input-data">
                    <input type="text" name="Telephone" required>
                    <div class="underline"></div>
                    <label for="">Télephone</label>
                </div>
                <div class="input-data">
                    <input type="password" name="Mot_de_passe" required>
                    <div class="underline"></div>
                    <label for="">Mot de passe</label>
                </div>
            </div>
            <div class="form-row">
                <div class="input-data">
                    <input type="text" name="Email" required>
                    <div class="underline"></div>
                    <label for="">Email</label>
                </div>
                <div class="input-data">
                    <input type="text" name="Genre" required>
                    <div class="underline"></div>
                    <label for="">Genre</label>
                </div>
            </div>

            <div class="form-row">
                <div class="input-data">
                    <select name="titre_id" required>
                        <option value="" disabled selected hidden></option>
                        @foreach ($titres as $titre)
                        <option value="{{$titre->id}}">{{$titre->Nom}}</option>
                        @endforeach
                    </select>
                    <div class="underline"></div>
                    <label for="">Titre</label>
                </div>
                <div class="input-data">
                    <select name="grade_id" required>
                        <option value="" disabled selected hidden></option>
                        <@foreach ($grades as $grade)
                        <option value="{{$grade->id}}">{{$grade->Nom}}</option>
                        @endforeach
                    </select>
                    <div class="underline"></div>
                    <label for="">Grade</label>
                </div>
                <div class="input-data">
                    <select name="fonction_id" required>
                        <option value="" disabled selected hidden></option>
                        @foreach ($fonctions as $fonction)
                        <option value="{{$fonction->id}}">{{$fonction->Nom}}</option>
                        @endforeach
                    </select>
                    <div class="underline"></div>
                    <label for="">Fonction</label>
                </div>
            </div>

            <div class="form-row">
                <div class="input-data">
                    <input type="file" name="Photo" id="fileInput" accept=".jpg, .jpeg, .png">
                    <div class="underline"></div>
                    {{-- <label for="fileInput">Sélectionnez une photo</label> --}}
                </div>
            </div>
            
            <div class="form-row">
                <div class="input-data">
                    <select name="ufr_id" required>
                        <option value="" disabled selected hidden></option>
                        @foreach ($ufrs as $ufr)
                        <option value="{{$ufr->id}}">{{$ufr->Nom}}</option>
                        @endforeach
                    </select>
                    <div class="underline"></div>
                    <label for="">Ufr/Institut</label>
                </div>
                <div class="input-data">
                    <select name="role_id" required>
                        <option value="" disabled selected hidden></option>
                        <option value="Professeur" selected>Utlisateur</option>
                    </select>
                    <div class="underline"></div>
                    <label for="">Rôle</label>
                </div>
            </div>

            <div class="form-row">
                <div class="input-data">
                    <select name="departement_id" required>
                        <option value="" disabled selected hidden></option>
                        @foreach ($departements as $departement)
                        <option value="{{$departement->id}}">{{$departement->Nom}}</option>
                        @endforeach
                    </select>
                    <div class="underline"></div>
                    <label for="">Département</label>
                </div>
            </div>

            <div style="display: flex; justify-content: center;">
                <button class="submit" style="background-color: #3498db; padding: 10px; border-radius: 10px; border:none; color:white; cursor: pointer; font-size:15px">Je m'inscris</button>
            </div>
            
        </form>
    </div>
    <!-- partial -->

</body>

</html>
