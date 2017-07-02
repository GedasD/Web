<?php 
include'dbh.php';

	
	
		function setComments($conn){
			
			if(isset($_POST['commentSubmit'])){
			
				$sql = "INSERT INTO komentarai(laikas,komentaras, vartot_num
				
				)
				values(
						now(),
						'".$_POST["lol"]."',
						'".$_POST["vartotojoNumeris"]."'
						)";
		
				$res = mysqli_query($conn, $sql);
				
				if($res===TRUE){
				

				}
				else{
					echo "Error: ".$sql. "<br>" .$conn->error;
				}
			}
			
			
		}
	
		function getComments($conn){
			
			$sql = "Select * from komentarai order by laikas desc";
			$res = mysqli_query($conn, $sql);
			
			
			while($row = mysqli_fetch_assoc($res)){
				
				$sql2 = "Select * from registruotivart where vart_num = '".$row['vartot_num']."' ";
				$res2 = mysqli_query($conn, $sql2);
				
				if($row2 = mysqli_fetch_assoc($res2)){
				
				echo '<div class="comm-box">';
					echo'<p class="comm-vart">'.$row2['Vardas'].'</p>';
					echo '<p class="comm-date">'.$row['Laikas'].'</p>';
					echo '<p><div class="comm-text">'.nl2br($row['Komentaras']).'</div>';
					
						if(isset($_SESSION['vart_num']) && $_SESSION['vart_num'] == $row['vartot_num']){
						echo'	
						<form  method="post" action="commentedit.php">
							<input type="hidden" name="id" value="'.$row['id'].'"/>
							<input type="hidden" name="vartotojoVardas" value="'.$row['Vartotojo_vardas'].'"/>
							<input type="hidden" name="data" value="'.$row['Laikas'].'"/>
							<input type="hidden" name="Komentaras" value="'.$row['Komentaras'].'"/>
							<button class="comm-edit-button">Koreguoti</button>
						</form>';
						echo'
						<form method="post" action="'.deleteComment($conn).'">
							<input type="hidden" name="id" value="'.$row['id'].'"/>
							<button type="submit" name="commentDelete" class="comm-dell-button" onClick="window.location.reload();" >Ištrinti</button>
						</form>';
					}
				echo '</p>';
				echo '</div>';
				}
			}
		}	
		
		
		function editComments($conn){
			
			if(isset($_POST['commentSubmit'])){
			
				$sql = "UPDATE komentarai SET komentaras = '".$_POST["tekstas"]."' WHERE id = '".$_POST['id']."'";
				
		
				$res = mysqli_query($conn, $sql);
				
				if($res===TRUE){
					?>
					<script type="text/javascript">
					window.location.href = 'straipsnis1.php';
					</script>
					
					<?php
				}
				else{
					echo "Error: ".$sql. "<br>" .$conn->error;
				}
			}
			
		}
		function deleteComment($conn){
			
			if(isset($_POST['commentDelete'])){
			
				$sql = "DELETE from komentarai WHERE id = '".$_POST["id"]."'";
				
		
				$res = mysqli_query($conn, $sql);
				
				if($res===TRUE){
					?>
					<script type="text/javascript">
					window.location.href = 'straipsnis1.php';
					</script>
					
					<?php
				}
				else{
					echo "Error: ".$sql. "<br>" .$conn->error;
				}
			}
		}
		
		function getArticles($conn){
			
			if(isset($_POST['commentDelete'])){
			
				$sql = "Select tekstas FROM straipsniai";
				
		
				$res = mysqli_query($conn, $sql);
				
				if($res===TRUE){
					echo $res;
				}
				else{
					echo "Error: ".$sql. "<br>" .$conn->error;
				}
			}
			
			
		}
	
		
			
	
		
		
	
	
	
	
?>