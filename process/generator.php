<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../assest/style2.css">
	<title>Transfer Money</title>
	<style>
        /* Style for the alert container */
        .alert-container {
            position: fixed;
            top: 15%;
            right: 4%;
			width:300px;
            /* transform: translate(-50%, -50%); */
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ddd;
			border-radius:20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            font-size: 16px;
        }

        /* Style for the close button */
        .close-button {
            cursor: pointer;
            color: #888;
			padding-right: 10px;
            font-weight: bold;
            position: absolute;
            top: 5px;
            right: 10px;
        }
	
		button{
			width: 70px;
			background-color: #674ea7;
			color:#fff;
			border:none;
			cursor: pointer;
		}
		@media only screen and (max-width: 600px) {
			.alert-container{
    			background-color: lightblue;
				width: 80%;
				margin:auto;
				top:17%;
				left:0;
				right:0;
				border-radius:15px;
 			 }
			  .alert-container p{
				font-size:14px;
			  }
		}
    </style>
</head>
<body>
<div class="alert-container">
    <span class="close-button" onclick="closeAlert()">X</span>
	<h5 style="text-align:center; color:darkblue;"><b>NOTICE</b></h5>
    <p style=“font-size:25px”>Please don't forget to add country code when adding phone number for SMS Alert e.g 23490763569, 15550132, 441632960642. Note, You do not add + to the country code</p>
	<p>Phone Numbers Above, are of different countries. Nigeria, USA and UK. As you see, no + sign was used. So, when adding phone number, add the country code but don't include the + or sign</p>
	<button onclick="closeAlert()">OK</button>
</div>

<script>
    function closeAlert() {
        document.querySelector('.alert-container').style.display = 'none';
    }
</script>
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
		 <label>Phone Number</label> <br>
		<input type="number" name="phonenumber" value="<?php echo isset($_POST['phonenumber']) ? $_POST['phonenumber'] : ''; ?>" placeholder="Include country code e.g 234. Don't add +"><br>
		 <?php if (!empty($errors["phonenumber"])) { echo "<span style='color:red;'>{$errors["phonenumber"]}</span>"; } ?> <br> <br>
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