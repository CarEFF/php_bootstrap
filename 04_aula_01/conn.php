<?php 


$host = "localhost";
$db = "aula04";
$user = "root";
$password = "";



try {
	$conn = new PDO("mysql:host={$host};dbname={$db}", $user, $password);

} catch (PDOException $err) {
	echo "Ocorreu um erro: <p> $err </p>";
}


 ?>