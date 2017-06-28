<?php 
	
	
	
		function setComments($conn){
			
			if(isset($_POST['commentSubmit'])){
			
				$sql = "INSERT INTO komentarai(vartotojo_vardas,laikas,komentaras
				
				)
				values(
						'".$_POST["vartotojoVardas"]."',
						now(),
						'".$_POST["lol"]."'
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
			
			$sql = "Select * from komentarai";
			$res = mysqli_query($conn, $sql);
			while($row = mysqli_fetch_assoc($res)){
				echo '<div class="comm-box">';
					echo'<p class="comm-vart">'.$row['Vartotojo_vardas'].'</p>';
					echo '<p class="comm-date">'.$row['Laikas'].'</p>';
					echo '<p><div class="comm-text">'.nl2br($row['Komentaras']).'</div>
					<form  method="post" action="commentedit.php">
						<input type="hidden" name="id" value="'.$row['id'].'"/>
						<input type="hidden" name="vartotojoVardas" value="'.$row['Vartotojo_vardas'].'"/>
						<input type="hidden" name="data" value="'.$row['Laikas'].'"/>
						<input type="hidden" name="Komentaras" value="'.$row['Komentaras'].'"/>
						<button class="comm-edit-button" style="margin-top:10px; margin-left: 5px; width: 90px; height: 25px; border:0; background-color: black; color:white; position: absolute; top:0px; right:0px;">Koreguoti</button>
					</form>
					</p>';
				echo '</div>';
			}
		}	
	
		
		
	
	
	
	
?>