<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Option de connexion</title>
      <link rel="stylesheet" href="{{asset('assets/css/style1.css')}}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
      <div class="center">
         <input type="checkbox" id="show">
         <div class="container">
            <h3 class="text">
               Option de connexion
            </h3>
            <form>
               <div class="btn">
                  <div class="inner"></div>
                  <button><a href="{{route('connexion-enseignant')}}" style="text-decoration: none">Enseignant</a></button>
               </div>
               <div class="btn">
                  <div class="inner"></div>
                  <button><a href="{{route('connexion-atos')}}" style="text-decoration: none">Atos</a></button>
               </div>
               <div class="signup-link">
                  Je n'ai pas de compte <a href="{{route('inscription-option')}}">S'incrire</a>
               </div>
            </form>
         </div>
      </div>
   </body>
</html>