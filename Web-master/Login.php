<?php
	include 'dbh.php';
	session_start();
	
	if($conn->connect_error){
		die("connection failed:" . $conn->connect_error);
	}
	
	
	$RegName = mysqli_real_escape_string($conn, $_POST["LogName"]);
	$RegPass = mysqli_real_escape_string($conn, $_POST["LogPassword"]);
	
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
			$uid = "Select vart_num from registruotivart WHERE vardas='".$RegName."' and slaptazodis='".$hash_RegPass."' ";
			$res2 = mysqli_query($conn, $uid);
			$reg3 = mysqli_fetch_array($res2);
			
			$_SESSION['vart_num'] = $reg3['vart_num'];
			
			
			header('Location: index.php');
		}
		$conn->close();
	}
?>