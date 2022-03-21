<?php
header('Content-Type: text/html; charset=UTF-8');
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  if (!empty($_GET['save'])) {
    print('Сохранено');
  }
  include('form.php');
  exit();
}


$errors = FALSE;
if (empty($_POST['fio'])) {
  print('Заполните имя.<br/>');
  $errors = TRUE;
}
if (empty($_POST['birthday'])) {
  print('Заполните год рождения.<br/>');
  $errors = TRUE;
}
if (!isset($_POST['radio2'])) {
  print('Выберите пол.<br/>');
  $errors = TRUE;
}
if (!isset($_POST['radio1'])) {
  print('Выберите количество конечностей.<br/>');
  $errors = TRUE;
}
if (!isset($_POST['checkbox'])) {
  print('Подтвердить<br/>');
  $errors = TRUE;
}


if ($errors) {
  exit();
}


$user = 'u24314';
$pass = '3346673';
$db = new PDO('mysql:host=localhost;dbname=u24314', $user, $pass, array(PDO::ATTR_PERSISTENT => true));



$stmt = $db->prepare("INSERT INTO form (name, year,email,gender,limb,bio,checkbox) VALUES (:fio, :birthday,:email,:gender,:limb,:bio,:checkbox)");
$stmt -> execute(array('fio'=>$_POST['fio'], 'birthday'=>$_POST['birthday'],'email'=>$_POST['email'],'gender'=>$_POST['radio2'],'limb'=>$_POST['radio1'],'bio'=>$_POST['textarea1'],'checkbox'=>$_POST['checkbox']));


$stmt=$db->prepare("INSERT INTO all_abilities(ability_god,ability_through_walls,ability_levitation,ability_brain,ability_power) VALUES(:god,:wall,:levity,:brain,:power)");
$myselect=$_POST['select1'];
for($i=0;$i<5;$i++)
{
  if($myselect[$i]!=1)
  {
    $myselect[$i]=0;
  }
}
$stmt->execute(array('god'=>$myselect[0],'wall'=>$myselect[1],'levitation'=>$myselect[2],'brain'=>$myselect[3],'power'=>$myselect[4]));


header('Location: ?save=1');
