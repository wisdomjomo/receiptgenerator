<?php
require_once("../configuration/class.php");
$myrecord = new confi();

if(isset($_GET['id']) && isset($_GET['reg'])) {
    if($_GET['reg'] == "delete") {
        $myrecord->setid($_GET['id']);
        $myrecord->delettransfer();
        header("location:../assest/index.php");
    
    }
}
?>