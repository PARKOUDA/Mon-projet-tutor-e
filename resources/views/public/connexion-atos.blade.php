<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Connexion Atos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style2.css') }}">

</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="container">
        <div class="text">
            Connexion Atos
        </div>
        <div style="display: flex; justify-content: center;">
            <img src="{{asset('assets/images/logo-unz.jpg')}}" alt="logo de unz" width="100px">
            @if($errors->has('login'))
            <div class="alert alert-danger form-login">
                {{ $errors->first('login') }}
            </div>
            @endif
        </div>
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
        </div>
        @endif
        <form action="{{route('connexion-atos-action')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="input-data">
                    <input type="text" name="email" required>
                    <div class="underline"></div>
                    <label for="">Email</label>
                    @if ($errors->has('email'))
                    <span class="text-danger">{{  $errors->first('email') }}</span>
                    @endif
                </div>
            </div>

            <div class="form-row">
                <div class="input-data">
                    <input type="password" name="password" required>
                    <div class="underline"></div>
                    <label for="">Mot de passe</label>
                    @if ($errors->has('password'))
                    <span class="text-danger">{{  $errors->first('password') }}</span>
                    @endif
                </div>
            </div>

            <div style="display: flex; justify-content: center;">
                <button class="submit" style="background-color: #3498db; padding: 10px; border-radius: 10px; border:none; color:white; cursor: pointer; font-size:15px">Connexion</button>
            </div>
            <br>
            <div style="display: flex; justify-content: center;">
                <a href="{{route('inscription-option')}}">Inscription option</a> &nbsp;
                <a href="{{route('connexion-enseignant')}}">Connexion Enseignant</a>
            </div>
        </form>
    </div>
    <!-- partial -->

</body>

</html>
