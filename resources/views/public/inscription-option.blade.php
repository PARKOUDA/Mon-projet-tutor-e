<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Option d'inscription</title>
      <link rel="stylesheet" href="{{asset('assets/css/style1.css')}}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
      <div class="center">
         <input type="checkbox" id="show">
         <div class="container">
            <h3 class="text">
               Option d'insription
            </h3>
            <form>
               <div class="btn">
                  <div class="inner"></div>
                  <a href="{{ route('inscription-enseignant') }}" style="text-decoration: none">
                      <button type="button">Enseignant</button>
                  </a>
              </div>
              
               <div class="btn">
                  <div class="inner"></div>
                  <button><a href="" style="text-decoration: none">Atos</a></button>
               </div>
               <div class="signup-link">
                  J'ai déja un compte <a href="{{route('connexion-option')}}">Connexion</a>
               </div>
            </form>
         </div>
      </div>
   </body>
</html>