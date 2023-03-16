<?php

include('conn.php');

//preparar
$stmt = $conn->prepare("select * from clients order by nameClient");


//executar
$stmt->execute();


//listar
$result = $stmt->fetchALL(PDO::FETCH_ASSOC);


foreach ($result as $row) {
	echo $row['nameClient'] . " - " . $row['phoneCLient'] . "<br>";
}