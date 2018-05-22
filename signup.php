<?php
    session_start();
    require_once 'Database.php';
    require_once 'my_functions/signup_func.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>World of Quest</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
   integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="login.css">

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
   integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
  integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
  integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

  <link rel="icon" href="img/game.png" />

</head>
<body>
	<div class="container">
		<img src="img/title.png" class="size">
    <img src="img/game.png" class="sizelogo">
		<form class="form-group" action="signup.php" method="POST">
      <h2>Créer son compte</h2>
      <img src="img/gon.jpg">
      <input type="radio" name="image" value="gon.jpg" checked/>Gon<br>
      <img src="img/hisoka.jpg">
       <input type="radio" name="image" value="hisoka.jpg" />Hisoka<br>
       <img src="img/netero.jpg">
       <input type="radio" name="image" value="netero.jpg" />Netero<br>
        <div class="input-group">
          <div class="input-group-text"><i class="fa fa-user-circle fa-lg" aria-hiden="true"></i></div>
          <input class="form-control" type="pseudo" name="pseudo" placeholder="pseudo"/>
          </div>
		  	<div class="input-group">
		  		<div class="input-group-text"><i class="fa fa-lock fa-lg" aria-hiden="true"></i></div>
		    	  <input class="form-control" type="password" name="password" placeholder="password"/>
		  	</div>
        <div class="input-group">
          <div class="input-group-text"><i class="fa fa-lock fa-lg" aria-hiden="true"></i></div>
            <input class="form-control" type="password" name="password1" placeholder="Comfirm password"/>
        </div>
		  		<button class="btn btn-primary" type="submit" name="forminscription">Créer</button>
		</form>
	</div>
</body>
</html>
