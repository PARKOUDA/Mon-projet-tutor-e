<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Connexion</title>
      <link rel="stylesheet" href="{{asset('assets/css/style1.css')}}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
      <div class="center">
         <input type="checkbox" id="show">
         @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
               {{ session('success') }}
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
         @endif
         <div class="container">
            <div class="text">
               Connexion
            </div>
            @if($errors->has('login'))
                    <div class="alert alert-danger form-login">
                        {{ $errors->first('login') }}
                    </div>
                    @endif
            <form action="{{route('connexion-user-action')}}" method="POST">
               @csrf
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
               {{-- <div class="forgot-pass">
                  <a href="#">Mot de passe?</a>
               </div> --}}
               <div class="btn">
                  <div class="inner"></div>
                  <button type="submit">Se connecter</button>
               </div>
               <div class="signup-link">
                  Avez-vous un compte? <a href="{{route('inscription-user')}}">S'incrire</a>
               </div>
            </form>
         </div>
      </div>
   </body>
</html>