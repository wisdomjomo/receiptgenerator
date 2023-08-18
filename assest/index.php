<?php
require('header.php');

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style2.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.1/jspdf.umd.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<title>Home</title>
</head>
<body>
	
	<div class="background">
		<div class="white">
			<h2>All Transactions</h2>
		</div>
		<div class="black">
			<div style="overflow-x:auto;">
  <table>
    <tr>
    	<th>#</th>
      <th>Account Number</th>
      <th>Status</th>
      <th>Print as PDF</th>
      <th>Downlaod as Image</th>
      <th>Delete</th>
    </tr>
	<?php
		$counter = 1;
			foreach($all as $key=>$dis) {
				?>
     <tr>
      <td style="color:#fff; font-weight:bold;"><?= $counter; ?></td>
      <td style="color:#fff; font-weight:bold;"><?= $dis['accountnumber']; ?></td>
      <td style="color:#fff; font-weight:bold;"><?= $dis['status']; ?></td>
      <td><a href="../generate_pdf.php?id=<?=$dis['id']?>" target=”_blank”><button style="background-color: #bcbcbc; cursor: pointer; width: 110px; height: 45px; border: none;">Print Reciept</button></a></td>
      <!-- <td><button style="background-color: #6fa8dc; cursor: pointer; width: 130px; height: 45px; border: none; color:#fff; font-weight: bold;">Update Receipt</button></td> -->
	  <td><a href="../transfer.php?id=<?=$dis['id']?>" target=”_blank”><button style="background-color: #bcbcbc; cursor: pointer; width: 110px; height: 45px; border: none;">Download</button></a></td>
	  <td><a href="../delete/deletegenerator.php?id=<?=$dis['id']?>&reg=delete"><button style="background-color: #eb5959; width: 100px; height: 45px; border: none; color:#fff; font-weight: bold; cursor: pointer;">Delete</button></a></td>
	  <?php
	  	$counter++;
	  ?>
	  <?php
			}
		?>
    </tr> 
  </table>
</div>
		</div>
	</div>
	<footer style="text-align: center; margin-top: 20px;position: absolute;
     bottom: 0; padding: 10px; background-color: #f2f2f2; width:100%;">
    <p>© 2023 Your Website. All rights reserved.</p>
  </footer>
	<script type="text/javascript" src="../assest/index.js"></script>
</body>
</html>