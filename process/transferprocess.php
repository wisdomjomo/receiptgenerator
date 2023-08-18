<?php

$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	require_once("../configuration/class.php");
    $sc = new confi();
    trim($sc->setsendername($_POST['sendername']));
    trim($sc->setamount($_POST['amount']));
    trim($sc->setreceivername($_POST['receivername']));
    trim($sc->setaccountnumber($_POST['accountnumber']));
    trim($sc->setbank($_POST['bank']));
    trim($sc->setstatus($_POST['status']));
    trim($sc->setdate($_POST['date']));
    trim($sc->settime($_POST['time']));
    trim($sc->setnaration($_POST['naration']));
    trim($sc->settransferid($_POST['transferid']));

	require('../authencation/controller.php');


}


?>