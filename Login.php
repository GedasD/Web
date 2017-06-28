<?php
	session_start();
	include 'dbh.php';
	
	if($conn->connect_error){
		die("connection failed:" . $conn->connect_error);
	}
	
	
	$RegName = $_POST["LogName"];
	$RegPass = $_POST["LogPassword"];
	
	$reg = "SELECT slaptazodis from registruotivart WHERE vardas='".$RegName."' ";
	$res = mysqli_query($conn, $reg);
	$row = mysqli_fetch_assoc($res);
	$hash_RegPass = $row["slaptazodis"];
	$dehash = password_verify($RegPass, $hash_RegPass);
	
	if($dehash == 0){
		header('Location: Prisijungimas.php?error=invalidlogin');
	}
	else{
		
		$reg = "Select * from registruotivart WHERE vardas='".$RegName."' and slaptazodis='".$hash_RegPass."' ";
		$res=mysqli_query($conn, $reg);
			
		if(!$row = mysqli_fetch_assoc($res)){
			echo "ERROR";
		}
		else{
			$_SESSION['vart_num'] = $reg['vart_num'];
			header('Location: index.php');	
		}
		$conn->close();
	}
?>