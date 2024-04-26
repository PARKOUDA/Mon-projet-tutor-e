<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Connexion Enseignant</title>
      <link rel="stylesheet" href="{{asset('assets/css/style1.css')}}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
      <div class="center">
         <input type="checkbox" id="show">
         <div class="container">
            <div class="text">
               Connexion Enseignant
            </div>
            <form action="" method="POST">
               @csrf
               <div class="data">
                  <label>Email</label>
                  <input type="email" name="Email" required>

                  @error('Email')
                     <div style="color: red">{{$message}} </div>
                  @enderror
               </div>
               <div class="data">
                  <label>Mot de passe</label>
                  <input type="password" name="Mot_de_passe" required>
               </div>
               {{-- <div class="forgot-pass">
                  <a href="#">Mot de passe?</a>
               </div> --}}
               <div class="btn">
                  <div class="inner"></div>
                  <button type="submit">Se connecter</button>
               </div>
               <div class="signup-link">
                  Avez-vous un compte? <a href="#">S'incrire</a>
               </div>
            </form>
         </div>
      </div>
   </body>
</html>