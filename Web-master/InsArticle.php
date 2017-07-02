<?php
	function getArticle($conn){
			
			$sql = "Select * from Straipsniai";
			$res = mysqli_query($conn, $sql);
			while($row = mysqli_fetch_assoc($res)){
					echo'<p class="">'.$row['Autorius'].'</p>';
					echo '<p class="">'.$row['Data'].'</p>';
					echo'<p class="">'.$row['Antraste'].'</p>';
					echo '<p><div class="">'.nl2br($row['Tekstas']).'</div> </p>';
				echo '</div>';
			}
		}	

?>