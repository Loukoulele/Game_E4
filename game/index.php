<?php

session_start();
require_once '../Database.php';

if(!isset($_SESSION['admin']))
{
  header('location:../index.php');
}

 ?>

 <form action="../my_functions/my_class.php" method="post">
   <button class="btn btn-primary logout" name="action"><i class="fas fa-sign-out-alt" aria-hidden="true"></i> Log out</button>
 </form>
