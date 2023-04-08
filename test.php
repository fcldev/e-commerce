<?php
session_start();
// $_SESSION['userInfo'] = '1';
require("./controlleur/client/clientControlleur.php");
// ($fName,$lName,$adress1,$adress2,$city,$phone,$email,$note,$idUser,$date,$paiment,$total)
confirmOrder('aa','aa','aa','aa','aa','aa','aa','aa',15,'2023-2-2','paypal',200);
// changeCartQuantity(15,9,3);

?>