<?php
  ini_set('display_error', 5);
  error_reporting(E_ALL);
  session_start();
?>

<html>
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
     <link href="css/main.css">
     <title>Motorclub 123></title>
   </head>

   <body>
       <div class="container">
         <div class="row">
          <div class="col-8 offset-2">
             <h1 class="text-center mt-2 pt-5 pb-2">Login leden</h1>
             <div class="row">
               <form action="Login/checkUser" method="POST" class="mb-3 pl-2 pr-2">
                 <div class="form-group">
                  <label for="email">Email adres</label>
                  <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" placeholder="Enter email">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                  <label for="password">Wachtwoord</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                <button type="nieuwlid" class="btn btn-primary">Nieuw lid</button>
               </form>
             </div>
           </div>
       </div>
     </div>
   </body>


</html>
