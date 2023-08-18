<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../assest/style2.css">
  <link rel="stylesheet" type="text/css" href="../assest/setting1.css">
  <title>Settings Page</title>
</head>
<body>
<?php
	require('../assest/header.php');
  require('settingprocess.php');
	?>
  <div class="container">
    <h1>Settings</h1>
    <form method="post" action="">
    <label for="name">Update Name:</label>
    <input type="text" id="name" name="name" placeholder="Enter your name" value="<?= $dis['name'];?>">
    <label for="email">Update Email:</label>
    <input type="email" id="email" name="email" placeholder="Enter your email address" value="<?= $dis['email'];?>">
    <label for="password">New Password:</label>
    <input type="password" id="password" name="password" placeholder="Enter a new password">
    <input type="submit" value="Save" name="update" id="sub">
</form>
  </div>

  <footer style="text-align: center; margin-top: 20px;position: absolute;
     bottom: 0; padding: 10px; background-color: #f2f2f2; width:100%;">
    <p>© 2023 Your Website. All rights reserved.</p>
  </footer>
</body>
</html>
