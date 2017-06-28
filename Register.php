<?php
	include 'dbh.php';
	
	$RegName = $_POST["RegName"];
	$RegEmail = $_POST["RegEmail"];
	$RegPass = $_POST["RegPassword"];
	$Ip = $_SERVER['REMOTE_ADDR'];
	
	
	$name= "SELECT vardas FROM  registruotivart WHERE vardas = '".$RegName."'";
	$email= "SELECT el_pastas FROM  registruotivart WHERE el_pastas = '".$RegEmail."'";
	$pass= "SELECT slaptazodis FROM  registruotivart WHERE slaptazodis = '".$RegPass."'";
	
	$res1 = mysqli_query($conn, $name);
	$res2 = mysqli_query($conn, $email);
	$res3 = mysqli_query($conn, $pass);
	
	$checkName = mysqli_num_rows($res1);
	$checkEmail = mysqli_num_rows($res2);
	$checkPass = mysqli_num_rows($res3);
	
	
	if($checkName>0){
		header('Location: Registracija.php?error=vardas');
	}
	else if($checkEmail>0){
		header('Location: Registracija.php?error=email');
	}
	else{
	$encriptedPass = password_hash($RegPass, PASSWORD_DEFAULT);
	$reg = "INSERT INTO registruotivart(
		Vardas,
		El_pastas,
		Slaptazodis,
		Reg_data,
		Ip
	)
	VALUES(
		'".$RegName."',
		'".$RegEmail."',
		'".$encriptedPass."',
		now(),
		'".$_SERVER['REMOTE_ADDR']."'
		)";
	$result = mysqli_query($conn, $reg);
	if($result===TRUE){

		header('Location: index.php');
	}
	else{
		echo "Error: ".$reg. "<br>" .$conn->error;	
	}
	}
	$conn->close();
	
?>