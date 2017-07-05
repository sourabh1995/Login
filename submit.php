<?php
session_start();

require_once 'config/config.php';
$user = htmlentities($_POST['name']);
$email = htmlentities($_POST['email']);
$pass = htmlentities($_POST['password']);

$x = hash('md5','salt');

$salt = $x;

$pass = $salt.$pass.$salt;


if($_POST['token'] === $_SESSION['token'] and isset($_POST['submit'])){

  $sql = 'SELECT * FROM users
      WHERE email = ?
    ';
    $prepare = $db->prepare($sql);

  $prepare->bind_param_debug('s', $email);
  $result = $prepare->execute();
  $data = $result->fetchArray();
if($data['email']!=$email){



$query = 'INSERT INTO users SET  email = ?, pass = ?,user= ?';

$prepare = $db->prepare($query);
$user=$user;
$email = $email;
$pass = $pass;

$prepare->bind_param_debug('sss', $email, $pass,$user);

$prepare->execute();


unset($_SESSION['token']);

header('Location: login.php' );
exit();

}

else {
  $_SESSION['errorE'] = 'Email already Registered.';
  if($_POST['indexPage']==1)
    header('Location:index.php');
  else{
    header('Location:index2.php');
 }

}


}
if ($_POST['token'] != $_SESSION['token'] || !isset($_POST['submit'])) {

  if($_POST['indexPage']==1)
    header('Location:index.php');
  else{
    header('Location:index2.php');
  }
}





?>
