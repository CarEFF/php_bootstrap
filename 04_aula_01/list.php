<?php

include('conn.php');

//preparar 
$stmt = $conn->prepare("select * from clients");



//executar
$stmt->execute();



//listar

//$result = $stmt->fetch(PDO::FETCH_ASSOC);

//print_r($results);

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

//var_dump($results);

foreach($results as $row) {
	//var_dump($row);
	foreach($row as $key => $value){
		echo "$key - $value <br>";
	}
	echo "------------------<br>";
}
