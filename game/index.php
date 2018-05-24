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
<body>
  <?php
  include 'header/header.php';
  include 'calldb.php';
  ?>

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
<?php
include 'side_menu/side_menu.php';
 ?>
 <a href="quete.php"><button class="btn btn-primary padright">Jouer au Quizz</button></a>
 <div class="card col-sm-10">
   <div class="card-body">
     <h3 class="center">Bienvenue sur World Of Quest</h3>
   </div>
 </div>
 <br/></br>
 <section class="bg-darkblue">
  <div class="d-flex justify-content-start">
   <div class="card col-sm-5">
     <div class="card-body">
       <h3 style="font-size:3em"><stong>JOUER GRATUITEMENT</stong></h3>
       <br/><br/>
        <h2>REPONDEZ JUSTE !</h2>
          <br/>
        <h2>GAGNE DE L'EXPERRIENCE !</h2>
          <br/>
        <h3>MONTEZ EN NIVEAU !</h3>
        <div class="d-flex justify-content-end">
          <img class="leftico" src="../img/ico.png" width="200" height="200">
      </div>
    </div>
  </div>
    <div class="card marginleft col-sm-5">
       <div class="card-body">
        <img src="../img/lancer.png" width="500" height="100">
        <br/><br/>
        <h2><strong>COMMENT JOUER</strong> <i class="fa fa-question" aria-hidden="true"></i></h2>
        <p><strong>Appuyez sur le boutton JOUER AU QUIZZ  pour accéder aux questions de culture générale.
        <br/>Répondez aux questions et gagner de l'experience. Il n'y a que une seul bonne reponse par question.
        <br/>TOUVEZ LA ET COCHER !</strong><p>
          <br/>
          <hr/>
          <img src="../img/question.png" width="400" height="90">
          <br/>
           <a href="documents.php"><button class="btn btn-primary">en savoir plus</button></a>
       </div>
    </div>
 </div>
</section>

<section class="bg-lightbleu">
<div class="d-flex justify-content-start">
<div class="card col-sm-5">
  <div class="card-body">
     <h3 style="font-size:3em"><stong>MEILLEURS JOUEURS</stong></h3>
    <br/><br/>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">PSEUDO</th>
      <th scope="col">NIVEAU</th>
      <th scope="col">EXPERIENCE</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Loukoulele</td>
      <td>1</td>
      <td>0</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Julien</td>
      <td>1</td>
      <td>0</td>
    </tr>
  </tbody>
</table>
  </div>
</div>
  <div class="card marginleft col-sm-5">
     <div class="card-body">
      <img class="mobilemargin" src="../img/mobile.png" width="795" height="200">
      <br/><br/>
      <h4>Une version mobile de World Of Quest est prévu pour <br/><br/><span class="center">SEPTEMBRE 2018 !</span></h4>
  </div>
</div>
</section>

</body>
