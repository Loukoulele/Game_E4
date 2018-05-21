<?php
session_start();
?>
<?php
require_once '../Database.php';

if(!isset($_SESSION['pseudo']))
{
  header('location:../index.php');
}

 ?>
<style><?php include 'header.css'; ?></style>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-between">
  <a class="navbar-brand" href="index.php"><img src="../img/game.png" class="sizelogo"></a>
      <form class="" action="../my_functions/my_class.php" method="post">
      <button class="btn bg-dark" name="action"><i class="fa fa-power-off " aria-hidden="true"></i></button>
    </form>
  </div>
</nav>
