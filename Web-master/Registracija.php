<?php
	session_start();
?>
<!DTYPE html>
<html>
	<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registracija</title>
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/responsee.css">
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">
    <!-- CUSTOM STYLE -->
    <link rel="stylesheet" href="css/template-style.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/MUSUSTILIUS.css">
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>    
    <script type="text/javascript" src="js/validation.js"></script> 
	<style>
		#registracija{
			
			margin-top:50px;
			border:2px solid #b70303;
			margin-left: 30%;
			border-radius: 5px;
			padding: 25px 25px;
			margin-bottom: 100px;
			
		}	
		.logo-dydis{
			margin-top:6px;
			border: 2px solid white;
			padding: 3px 6px;
			border-radius: 7px;
			border-color: #b70303;
		}
		.form-name{
			margin-bottom: 20px;
		}
		.form-field-spacing{
			margin-top: 10px;
		}
		footer{
			margin-top: 500px;
		}
		
		
	</style>
	
  </head>  
	<body class="size-1140 pilka">
    <!-- HEADER -->	
		<header role="banner">    
		   <!-- Top Navigation -->
	<div>
      <nav class="melyna padding">
        <div class="line">
          <div class="s-12 l-2">
            <a href="index.php" class="Logo logo2"><img src="img/logo.png" alt="" class="logoDydis"></a>
          </div>
		  
          <div class="top-nav s-12 l-10">
            <p class="nav-text"></p>
            <ul class="right chevron hoverRaudona nav-butt">
				<li><a>Paskyra</a>
					<ul>
						<?php 
						if(!isset($_SESSION['vart_num'])){ 
								echo'
								<li class="hoverRaudona nav-butt">
									  <a href="Prisijungimas.php" class="nav-butt">Prisijungti</a>
								 </li>
								 <li class="hoverRaudona">
									  <a href="Registracija.php">Registruotis</a>
								</li>';
						 } 
						 else{
							 echo'
								<li class="hoverRaudona nav-butt pilka">
									  <a href="Logout.php">Atsijungti</a>
								 </li>';
						 }
						 ?>
					</ul>
				</li>
				<li class="hoverRaudona"><a href="index.php" >Pagrindis</a></li>
				<li class="hoverRaudona"><a>TOP10</a>
					<ul>
						<li class="hoverRaudona"><a href="TOP10.php">TOP10 filmai 2017</a>
						</li>
					</ul>
				</li>
              <li class="hoverRaudona"><a href="gallery.php">Galerija</a></li>
              <li class="hoverRaudona"><a href="about.php">Apie mus</a></li>
              <li class="hoverRaudona"><a href="contact.php">Kontaktinė informacija</a></li>
            </ul>
          </div>
        </div>
      </nav>
	  </div>
    </header>
		
		<div class="section raudona text-center">
			<h1 class="text-white margin-bottom-0 text-size-50 text-thin text-line-height-1" style="color: white">Registracija</h1>
		</div>
	
		 <!-- Reg form -->
		<div class="s-12 m-12 l-4 pilka" id="registracija">
              <h4 class="text-uppercase text-strong form-name">Registruokitės</h4>
				<form class="customform black-text" method="post" action="Register.php">
					<div class="s-12 m-12">
					  <input title="Your name"  name="RegName" class="border-radius" placeholder="Vardas" required  type="text" />
					</div>
					<div class="s-12 m-12 form-field-spacing">
					  <input title="Your e-mail"  name="RegEmail" class="border-radius" placeholder="El.Paštas" required  type="text" />
					</div>
					<div class="s-12 m-12 form-field-spacing">
					  <input title="Your password"  name="RegPassword" class="border-radius" placeholder="Slaptažodis" required  type="password" />
					</div>
					<div class="s-12"><button class=" form-butt"  type="submit" id="lol">Registruotis</button></div>
				</form>
		</div>
		
		<footer>
      <!-- Social -->
      <div class="raudona padding text-center">
        <a href="https://www.facebook.com/"><i class="icon-facebook_circle icon2x text-white"></i></a> 
        <a href="https://twitter.com/"><i class="icon-twitter_circle icon2x text-white"></i></a>
        <a href="https://plus.google.com/"><i class="icon-google_plus_circle icon2x text-white"></i></a>
        <a href="https://www.instagram.com/?hl=en/"><i class="icon-instagram_circle icon2x text-white"></i></a>                                                                        
      </div>
	  </footer>
		
		
		
		
	<script>
		var getUrlParameter = function getUrlParameter(sParam) {
		var sPageURL = decodeURIComponent(window.location.search.substring(1)),
			sURLVariables = sPageURL.split('&'),
			sParameterName,
			i;

		for (i = 0; i < sURLVariables.length; i++) {
			sParameterName = sURLVariables[i].split('=');

			if (sParameterName[0] === sParam) {
				return sParameterName[1] === undefined ? true : sParameterName[1];
			}
		}
		};
		var error = getUrlParameter('error');
		
		 if(error=="vardas"){
		 alert('Vartotojo vardas jau naudojamas');
		 }
		 else if (error=="email"){
			alert('El.Paštas jau naudojamas');
		 }
	</script>
		
	<script type="text/javascript" src="js/responsee.js"></script>
    <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/template-scripts.js"></script> 
	</body>
</html>