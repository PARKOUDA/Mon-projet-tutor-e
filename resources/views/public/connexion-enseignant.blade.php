<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>COnnexion Enseignant</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style2.css') }}">

</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="container">
        <div class="text">
            Connexion Enseignant
        </div>
        <div style="display: flex; justify-content: center;">
            <img src="{{asset('assets/images/logo-unz.jpg')}}" alt="logo de unz" width="100px">
        </div>
        <form action="{{route('inscription-enseignant-action')}}" method="POST" enctype="multipart/form-data">

            <div class="form-row">
                <div class="input-data">
                    <input type="text" name="email" required>
                    <div class="underline"></div>
                    <label for="">Email</label>
                </div>
            </div>

            <div class="form-row">
                <div class="input-data">
                    <input type="password" name="Mot_de_passe" required>
                    <div class="underline"></div>
                    <label for="">Mot de passe</label>
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
