<?php

    // Check if any field is empty
    if (empty($_POST["sendername"])) {
        $errors["sendername"] = "Sender Name is required.";
    }
    
    if (empty($_POST["amount"])) {
        $errors["amount"] = "Amount is required.";
    }

	if (empty($_POST["receivername"])) {
        $errors["receivername"] = "Receiver Name is required.";
    }

	if (empty($_POST["accountnumber"])) {
        $errors["accountnumber"] = "Account Number is required.";
    }

    if (empty($_POST["phonenumber"])) {
        $errors["phonenumber"] = "Phone Number is required For SMS Alert.";
    }

	if (empty($_POST["bank"])) {
        $errors["bank"] = "Bank is required.";
    }

	if (empty($_POST["status"])) {
        $errors["status"] = "Status is required.";
    }

	if (empty($_POST["date"])) {
        $errors["date"] = "Date is required.";
    }

	if (empty($_POST["time"])) {
        $errors["time"] = "Time is required.";
    }
    
	if (empty($_POST["transferid"])) {
        $errors["transferid"] = "Transfer id is required.";
    }

    // Add more fields here if needed
    
    // If there are no errors, process the form
    if (empty($errors)) {
       
        
        

    $sc->transfermoney();

		header("location:../assest/index.php");
        exit;
        
    }



?>