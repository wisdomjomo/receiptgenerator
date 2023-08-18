<?php
session_start();
require_once("config.php");
$home = new login();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
trim($email = $_POST["email"]);
trim($password = $_POST["password"]);
$page = $home->loginpage($email, $password);
if($page) {
$_SESSION['page'] = $page;
header('location:../assest/index.php');
}
else {
echo '<script>
alert("login failed: Invalid email or password") </script>';
}
}

?>