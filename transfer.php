<?php
session_start();
  require_once("configuration/class.php");
  $data = new confi();
	$id = $_GET['id'];
	$data->setid($id);;
  	$myrecord = $data->onetransfer($id);
	$dis = $myrecord;
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Payment</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		*{
	padding: 0;
	margin: 0;
	box-sizing: border-box;
}

.Confirmation{
	max-width: 600px;
	height: 40px;
    margin:auto;
	display: flex;
	align-items: center;
	background-color: darkblue;
	color: white;
	padding-left: 20px;
}

.from{
	max-width: 600px;
    margin:auto;
	padding-left: 20px;
	color: darkblue;
	margin-top: 10px;
	margin-bottom: 10px;
}

.mydetails{
	max-width: 600px;
	margin: auto;
	height: auto;
	border: 1px solid wheat;
	position: relative;
}

.data{
	position: absolute;
	background-color: green;
	height: 40px;
	width: 40px;
	margin-left: 7px;
	margin-top: 7px;
	border-radius: 50%;
}

.line{
	max-width: 600px;
	border: 1px solid wheat;
	margin-top: 20px;
}
.fa{
	position: absolute;
	right: 10px;
	bottom: 10px;
}
.h{
	position: absolute;
	right: 5px;
	bottom: 3px;
}
.thepayment{
	max-width: 600px;
	display: flex;
}

.pn{
	width: 50%;
	margin-left: 50px;
	margin-top: 7px;
}

.pn1{
	width: 50%;
	margin-left: 50px;
	margin-top: 7px;
}

.amount{
	max-width: 600px;
	height: 40px;
	color: white;
	display: flex;
	padding-left: 20px;
	margin-top: 10px;
	align-items: center;
	background-color: darkblue;
}

.avi{
	max-width: 600px;
	display: flex;
	margin-top: 15px;
	margin-bottom: 15px;
	padding-left: 20px;
	justify-content: space-between;
}

.aviam{
	padding-right: 100px;
}

.to{
	max-width: 600px;
    margin:auto;
	padding-left: 20px;
	color: darkblue;
	margin-top: 10px;
	margin-bottom: 10px;
}

.successful{
	max-width: 600px;
	height: 50px;
    margin: auto;
	margin-bottom: 0;
	margin-top: 10px;
	color: white;
	background-color: green;
	display: flex;
	align-items: center;
	padding-left: 20px;
}

/*.done{
	width: 40px;
	height: 40px;
	display: flex;
	justify-content: center;
	align-items: center;
	outline: 2px solid grey;
	font-size: 7px;
	font-weight: bolder;
	color: white;
	background-color: darkgray;
	border-radius: 50%;
	position: absolute;
	right: 5px;
}*/

@media only screen and (max-width: 900px){
	.pn1{
		font-size: 11px;
		padding-top: 10px;
	}
}
	</style>
</head>
<body>
	<div class="Confirmation">
		<h3>Confirmation</h3>
		<!-- <div class="done"><h2>DONE</h2></div> -->
	</div>
	<div class="from">
		<p>From</p>
	</div>
	<div class="mydetails">
		<div class="thepayment">
			<div class="data">
				<i class="fa fa-database" style="color:white; font-size: 20px;"></i>
			</div>
			<div class="pn">
				<span class="sp" style="font-weight: bold;"><?= $dis['sendername']; ?></span> <br>
				<span class="sp">084377***</span>
			</div>
		</div>
		<div class="amount">
			<h3>$<?= $dis['amount']; ?></h3>
		</div>
		<!-- <div class="avi">
			<div class="avi1">
				<span class="avi2">Available Balance</span>
			</div>
			<div class="aviam">
				<span class="theamt">$##,###.##</span>
			</div>
		</div> -->
	</div>
	<div class="to">
		<p class="top">To</p>
	</div>
	<div class="mydetails">
		<div class="thepayment">
			<div class="data">
				<i class="fa fa-check-circle-o h" style="color:white; font-size: 35px;"></i>
			</div>
			<div class="pn">
				<span class="sp" style="font-weight: bold;"><?= $dis['receivername']; ?></span> <br>
				<span class="sp"><?= $dis['accountnumber']; ?></span>
			</div>
		</div>
		<div class="line"></div>
		<div class="avi">
			<div class="avi1">
				<span class="avi2">Transaction ID</span>
			</div>
			<div class="aviam">
				<span class="theamt"><?= $dis['transferid']; ?></span>
			</div>
		</div>
		<div class="avi">
			<div class="avi1">
				<span class="avi2">Amount</span>
			</div>
			<div class="aviam">
				<span class="theamt">$<?= $dis['amount']; ?></span>
			</div>
		</div>
		<div class="avi">
			<div class="avi1">
				<span class="avi2">Bank</span>
			</div>
			<div class="aviam">
				<span class="theamt"><?= $dis['bank']; ?></span>
			</div>
		</div>
		<div class="avi">
			<div class="avi1">
				<span class="avi2">From reference</span>
			</div>
			<div class="aviam">
				<span class="theamt">Transfer</span>
			</div>
		</div>
		<div class="avi">
			<div class="avi1">
				<span class="avi2">Date</span>
			</div>
			<div class="aviam">
				<span class="theamt"><?= $dis['date']; ?></span>
			</div>
		</div>
		<div class="avi">
			<div class="avi1">
				<span class="avi2">Time</span>
			</div>
			<div class="aviam">
				<span class="theamt"><?= $dis['time']; ?></span>
			</div>
		</div>
		<div class="avi">
			<div class="avi1">
				<span class="avi2">Narration</span>
			</div>
			<div class="aviam">
				<span class="theamt"><?= $dis['naration']; ?></span>
			</div>
		</div>
	</div>
	<div class="successful">
		<p>Transfer <span><?= $dis['status']; ?></span></p>
	</div>	
</body>
</html>