<?php
$data = new login();
  $id = $_SESSION['page'];
$data->setid($_SESSION['page']);
  if(isset(($_POST['update']))) {
    trim($name = $_POST['name']);
    trim($email = $_POST['email']);
      if(!empty($_POST['password'])) {
        trim($password = $_POST['password']);
  }
      // Update the database
      echo $data->updatedetails($name, $email, $password, $id);
  header("location:../assest/index.php");
  die();

  }
$record= $data->fetchdetails();
$dis = $record;


?>