<?php

if (isset($_POST) AND !empty($_POST))
{
  if (!empty(htmlspecialchars($_POST['pseudo'])) AND !empty(htmlspecialchars($_POST['password'])))
  {
    $req = $db->prepare('SELECT pseudo, password FROM joueurs WHERE pseudo = ?');
    $req->execute([ $_POST['pseudo']]);

    $user = $req->fetch(); // exe ma req

    if ($user['password'] == sha1($_POST['password']))
    {
              $_SESSION['pseudo'] = $_POST['pseudo'];
              header('location: loading.php');
    }
    else
    {
      $error = "Identifiants incorrect";
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
