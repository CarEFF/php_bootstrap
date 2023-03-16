<?php 

include('conn.php');

$nameClient = $_POST['nameClient'];
$phoneCLient = $_POST['phoneCLient'];


echo "$nameClient: $phoneCLient"; 

$stmt = $conn->prepare("insert into clients (nameClient, phoneCLient) values (:nameC, :phoneC)"); 


$stmt->bindParam(':nameC', $nameClient);
$stmt->bindParam(':phoneC', $phoneCLient);


$stmt->execute();


 ?>