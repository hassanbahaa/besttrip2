<?php

 session_start();




$dsn = 'mysql:host=localhost;dbname=besttrip';
$user = "root";
$pass = "";



try {
    $call = new PDO($dsn,$user,$pass);
    

}

catch(PDOException $e){
    echo "failed" . $e->getMessage();

}






$uName = $_POST['fullname'];
$uEmail = $_POST['email'];
$uPhone = $_POST['phone'];
$uMessage = $_POST['message'];
// $uhotel = $_POST['hotelname'];
$uSend = $_POST['send'];



$query = " INSERT INTO cmessages (Fullname,Email,Phone,mersal) VALUES ('$uName','$uEmail','$uPhone','$uMessage')  ";
$call->exec($query);


?>




<?php
header("Location: contact.php");
exit();
?>