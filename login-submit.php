<?php
session_start();

require_once 'config/config.php';

$email = htmlentities($_POST['email']);
$pass = htmlentities($_POST['password1']);

$x = hash('md5','salt');

$salt = $x;

$pass = $salt.$pass.$salt;


if($_POST['login-token'] === $_SESSION['login-token'] and isset($_POST['submit'])){

  $sql = 'SELECT * FROM users
      WHERE email = ?
    ';
    $prepare = $db->prepare($sql);

  $prepare->bind_param_debug('s', $email);
  $result = $prepare->execute();
  $data = $result->fetchArray();
  if($data['email']==NULL){
    $_SESSION['login-errorE'] = 'Email not Registered';

    if($_POST['loginPage']==1)
    header('Location:login.php');
  else{
    header('Location:index2.php');
  }
}
if($data['pass']==$pass){



unset($_SESSION['login-token']);
$_SESSION['name'] = $data['user'];
header('Location: welcome.php' );
exit();

}

else {
  $_SESSION['login-errorE'] = 'Password Doesn\'t matched!';

  if($_POST['loginPage']==1)
    header('Location:login.php');
  else{
    header('Location:index2.php');
}


}
}
if ($_POST['login-token'] != $_SESSION['login-token'] || !isset($_POST['submit'])) {

  if($_POST['loginPage']==1)
    header('Location:login.php');
  else{
    header('Location:index2.php');
}

}



?>
