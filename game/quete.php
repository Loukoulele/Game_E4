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
include 'side_menu/side_menu.php';
 ?>
<body>
 <img src="../img/zelda.gif" class="rounded mx-auto d-block">
 <table style="width:100%">
  <tr>
    <th>Question</th>
    <th>Réponse 1</th>
    <th>Réponse 2</th>
    <th>Réponse 3</th>
    <th>Réponse 4</th>
  </tr>
  <tr>
    <td>Quel est le jeu top 1 du moment ?</td>
    <td><button type="button">League of Legends</button></td>
    <td>Mario Sunshine</td>
    <td>Fortnite</td>
    <td>Smite</td>
    <td>Valider</td>
  </tr>
</table>
</body>
