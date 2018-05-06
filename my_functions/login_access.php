<?php


if (isset($_POST) AND !empty($_POST))
{
  if (!empty(htmlspecialchars($_POST['username'])) AND !empty(htmlspecialchars($_POST['password'])))
  {
    $req = $db->prepare('SELECT * FROM users WHERE username = :username AND password = :password');
    $req->execute([
      'username' => $_POST['username'],
      'password' => $_POST['password']
    ]);

    $user = $req->fetchObject(); // exe ma req

    if ($user)
    {
              $_SESSION['admin'] = $_POST['username'];
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
