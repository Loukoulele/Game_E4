<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>World of Quest</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
   integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="style.css">

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
   integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
  integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
  integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

  <link rel="icon" href="../img/game.png" />
  <audio src="song/song1.mp3" autoplay loop></audio>

</head>
<?php
include 'header/header.php';
include 'calldb.php'

 ?>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand"><img src="<?php echo'../img/' . $joueurs['image']; ?>" class="rounded mx-auto d-block" alt="..." width="55" heigh="55"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link"><strong><?php echo ' ' . $joueurs['pseudo']; ?></p><span class="sr-only">(current)</span></strong></a>
      </li>
      <li class="nav-item">
        <a class="nav-link">Niveau : <?php echo ' ' . $joueurs['niveau']; ?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link">Expérience : <?php echo ' ' . $joueurs['experience_joueurs']; ?></a>
      </li>
    </ul>
  </div>
</nav>
<?php include 'side_menu/side_menu.php'; ?>
<div class="card col-sm-10">
 <img src="../img/zelda.gif" class="rounded mx-auto d-block">
 <h3 class="text-center">Question : </h3>
  <h4 class="text-center">Quel est le jeu top 1 du moment ?</h4>
</br/>
 <table>
    <tr>
      <th><input type="radio" name="quizz" value="id1" checked> Réponse 1</th>
      <th><input type="radio" name="quizz" value="id1"> Réponse 2</th>
      <th><input type="radio" name="quizz" value="id1"> Réponse 3</th>
      <th><input type="radio" name="quizz" value="id1"> Réponse 4</th>
    </tr>
    <tr>
      <td>League of Legends</td>
      <td>Mario Sunshine</td>
      <td>Fortnite</td>
      <td>Smite</td>
      <td><input class="btn btn-primary" type="submit" value="Valider"></td>
    </tr>
  </table>
  <hr/>
  <br/>
</card>
</body>