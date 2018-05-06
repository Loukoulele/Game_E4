<?php

if (isset($_POST['forminscription']))
{
  $pseudo = htmlspecialchars($_POST['pseudo']);
  $password = sha1($_POST['password']);
  $password1 = sha1($_POST['password1']);
  $image = $_POST['image'];

  if (!empty($_POST['pseudo']) AND !empty($_POST['password']) AND !empty(($_POST['password1'])))
  {
    if($password == $password1)
    {
      $insertuser = $db->prepare("INSERT INTO joueurs (pseudo, password, image) values(?, ?, ?)");
      $insertuser->execute(array($pseudo, $password, $image));
      header('Location: ../index.php');
    }
    else
    {
      $error ="Les mots de passes ne correspondent pas !";
    }
  }
  else
  {
      $error = 'Veuillez remplir tous les champs !';
  }
}
if (isset($error))
{
  echo '<div class="alert">'.$error.'</div>';
}
?>
