<?php

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
ob_start();  
include 'transfer.php';
$a = ob_get_clean();
$mpdf->WriteHTML($a);
$mpdf->Output();

?>
