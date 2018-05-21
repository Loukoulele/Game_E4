<?php



if (isset($_POST['forminscription']))
{
  $pseudo = htmlspecialchars($_POST['pseudo']);
  $password = sha1($_POST['password']);
  $password1 = sha1($_POST['password1']);
  $image = $_POST['image'];

  if (!empty($_POST['pseudo']) AND !empty($_POST['password']) AND !empty(($_POST['password1'])))
  {
    $db = Database::connect();
    $check_pseudo = $db->prepare("SELECT pseudo FROM joueurs WHERE pseudo = ?");
    $check_pseudo->execute(array($pseudo));
    if ($check_pseudo->rowCount() == 0)
    {
      if($password == $password1)
      {
        $insertuser = $db->prepare("INSERT INTO joueurs (pseudo, password, image) values(?, ?, ?)");
        $insertuser->execute(array($pseudo, $password, $image));
        Database::disconnect();
        header('Location: index.php');
      }
      else
      {
        $error ="Les mots de passes ne correspondent pas !";
      }
    }
    else {
      $error ="Pseudo deja existant";
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
