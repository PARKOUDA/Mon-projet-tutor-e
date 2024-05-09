<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Inscription user</title>
      <link rel="stylesheet" href="{{asset('assets/css/style1.css')}}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
      <div class="center">
         <input type="checkbox" id="show">
         <div class="container">
            <div class="text">
               Inscription User
            </div>
            <form action="{{route('inscription-user-action')}}" method="POST">
               @csrf
               <div class="data">
                <label>Nom prénom</label>
                <input type="text" name="name" placeholder="Entrez votre nom" required>

                @if ($errors->has('name'))
                     <span class="text-danger">{{ $errors->first('name') }}</span>
                  @endif
             </div>

               <div class="data">
                  <label>Email</label>
                  <input type="email" name="email" placeholder="Entrez votre email" required>

                  @if ($errors->has('email'))
                     <span class="text-danger">{{ $errors->first('email') }}</span>
                  @endif
               </div>
               <div class="data">
                  <label>Mot de passe</label>
                  <input type="password" name="password" placeholder="Entrez votre mot de passe" required>
                  @if ($errors->has('password'))
                     <span class="text-danger">{{ $errors->first('password') }}</span>
                  @endif
               </div>
               
               <div class="btn">
                  <div class="inner"></div>
                  <button type="submit">Je m'inscris</button>
               </div>
               <div class="signup-link">
                  Avez-vous un compte? <a href="{{route('connexion-user')}}">Se connecter</a>
               </div>
            </form>
         </div>
      </div>
   </body>
</html>