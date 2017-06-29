<?php
	session_start();
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "manopuslapis";
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	if($conn->connect_error){
		die("connection failed:" . $conn->connect_error);
	}
	else{
		echo "Pasileido";
	}
	
	$sql = "INSERT INTO atsiliepimai1(
		e_mail,
		vardas,
		zinute,
		data,
		ip
		
	)
	VALUES(
		'".$_POST["email"]."',
		'".$_POST["name"]."',
		'".$_POST["message"]."',
		now(),
		'".$_SERVER['REMOTE_ADDR']."'
		)";
	if(isset($_SESSION['vart_num'])){
	if($conn->query($sql)===TRUE){

		header('Location: index.php?ok=1');
	}
	else{
		echo "Error: ".$sql. "<br>" .$conn->error;
	}
	$conn->close();
	}
	else{
		header('Location: prisijungimas.php');
	}
?>