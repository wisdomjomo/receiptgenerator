<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../assest/style2.css">
	<title>Transfer Money</title>
</head>
<body>
	<?php
		require('../assest/header.php');
	?>
	<?php
	require('../process/transferprocess.php')
?>
	<div class="makeatransfer">
		<h5>Transfer Money</h5>
	</div>
	<form class="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		<label>Sender Name</label> <br>
		<input type="text" name="sendername" value="<?php echo isset($_POST['sendername']) ? $_POST['sendername'] : ''; ?>"> <br>
		 <?php if (!empty($errors["sendername"])) { echo "<span style='color:red;'>{$errors["sendername"]}</span>"; } ?><br> <br>
		<label>Amount</label> <br>
		<input type="number" name="amount" value="<?php echo isset($_POST['amount']) ? $_POST['amount'] : ''; ?>"> <br>
		 <?php if (!empty($errors["amount"])) { echo "<span style='color:red;'>{$errors["amount"]}</span>"; } ?><br> <br>
		<label>Receiver Name</label> <br>
		<input type="text" name="receivername" value="<?php echo isset($_POST['receivername']) ? $_POST['receivername'] : ''; ?>"><br>
		 <?php if (!empty($errors["receivername"])) { echo "<span style='color:red;'>{$errors["receivername"]}</span>"; } ?> <br> <br>
		<label>Receiver Account Number</label> <br>
		<input type="number" name="accountnumber" value="<?php echo isset($_POST['accountnumber']) ? $_POST['accountnumber'] : ''; ?>"><br>
		 <?php if (!empty($errors["accountnumber"])) { echo "<span style='color:red;'>{$errors["accountnumber"]}</span>"; } ?> <br> <br>
		<label>Destination Bank</label> <br>
		<input type="text" name="bank" value="<?php echo isset($_POST['bank']) ? $_POST['bank'] : ''; ?>"><br>
		 <?php if (!empty($errors["bank"])) { echo "<span style='color:red;'>{$errors["bank"]}</span>"; } ?> <br> <br>
		<label>Status</label> <br>
		<select name="status" value="<?php echo isset($_POST['status']) ? $_POST['status'] : ''; ?>">
			<option value="Pending">Pending</option>
			<option value="Successful">Successful</option>
			<option value="Failed">Failed</option>
		</select><br>
		 <?php if (!empty($errors["status"])) { echo "<span style='color:red;'>{$errors["status"]}</span>"; } ?> <br> <br>
		<label>Date</label> <br>
		<input type="date" name="date" value="<?php echo isset($_POST['date']) ? $_POST['date'] : ''; ?>"><br>
		 <?php if (!empty($errors["date"])) { echo "<span style='color:red;'>{$errors["date"]}</span>"; } ?> <br> <br>
		<label>Time</label> <br>
		<input type="time" name="time" value="<?php echo isset($_POST['time']) ? $_POST['time'] : ''; ?>"><br>
		 <?php if (!empty($errors["time"])) { echo "<span style='color:red;'>{$errors["time"]}</span>"; } ?> <br> <br>
		<label>Naration (Optional)</label> <br>
		<input type="text" name="naration"> <br> <br>
		<label>Transfer Reference</label> <br>
		<textarea style="border-top: none;
	border-left: none;
	border-right: none;
	width: 100%;
	padding-left: 10px;
	outline:none;
	height:35px;
	border-bottom: 1px solid green;" name="transferid">
<?php 
		function randnumber($min, $max) {
			return rand($min, $max);
		}
		for($i = 1; $i<=11; $i++) {
			echo randnumber(1, 11) . "";
		}
		?>
</textarea><br>
		 <?php if (!empty($errors["transferid"])) { echo "<span style='color:red;'>{$errors["transferid"]}</span>"; } ?>
<br> <br>
		<input type="submit" name="transfer" value="Transfer Money">
	</form>
	<footer style="text-align: center; margin-top: 20px; padding: 10px; background-color: #f2f2f2; width:100%;">
    <p>© 2023 Your Website. All rights reserved.</p>
  </footer>
</body>
</html>