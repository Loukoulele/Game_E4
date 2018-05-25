<?php
  session_start();
  include 'quizz.php';

  $quizz_return = $_SESSION['question'];
  var_dump($quizz_return);
  die;


 ?>
