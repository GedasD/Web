<?php 
	
	include'dbh.php';
	include 'Komentarai.php';
	
?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Prospera Free - New Amazing HTML5 Template</title>
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
	<link rel="stylesheet" href="css/Straipsniai.css">
	
  </head>  
  
  <body class="size-1140">
  
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
    
    <!-- MAIN -->
    <main role="main" class="main-article-page">
      
      <!-- Section 4 --> 
		<div class="paveikslelis">
		</div>
		<div class="content">
			<article>
				<div class="data melyna" >2017-05-09</div>
				<p><h1 class="pavadinimas">Gryno testosterono filmų aktorius Gerard Butler debiutuoja dramoje „Šeimos žmogus“</h1></p>
			  
				<p><img src="img/familyman.jpg" class="AntrastesNuotrauka"/> Tapti suaugusiu reiškia išmokti surasti pusiausvyrą tarp šeimos gyvenimo ir karjeros. Elektroninis paštas, išmanieji telefonai bei socialiniai tinklai šią liniją dar labiau ištirpdo. Naujausias režisieriaus Mark Williams filmas „Šeimos žmogus“ (angl. „A Family Man“) pasakoja istoriją, kurią esame girdėję daug kartų, tačiau tai paliečia vis daugiau ir daugiau šiuolaikinių darboholikų.<p>

				<p>Įtaigioje dramoje „Šeimos žmogus“ pagrindinį karjeristo Deino vaidmenį atlieka aktorius Gerard Butler, išgarsėjęs tokiuose gryno testosterono veiksmo filmuose kaip „300“ ir „Olimpo apgultis“. Daugelis kino fanų išgirdę G. Butler vardą automatiškai tikisi dar vieno Amerikos herojaus filmo, tačiau kiekvienam aktoriui ateina metas parodyti savo aktorinius sugebėjimus jaudinančioje dramoje.</p>	

				<p>Filme pasakojama apie Deiną, kuris užuot leidęs laiką su šeima, mieliau renkasi darbą. Dirbdamas sėkmingoje Čikagos talentų paieškos kompanijoje, talentų medžiotojas siekia užimti kompanijos vadovo vairą. Tačiau viskas staiga pasikeičia, kai šį paaukštinimą aptemdo netikėta žinia iš namų.</p>

				<p>Filmas „Šeimos žmogus“ yra M. Williams, kaip režisieriaus, debiutas. Režisierius M. Williams išgarsėjo prodiusuodamas 2016 metų trilerį „Sąskaitininkas“ (vaidina Ben Affleck). Nenuostabu, kad į naują projektą kartu su savimi atsiviliojo ir „Sąskaitininko“ scenarijaus autorių Bill Dubuque. Filme taip pat vaidina Holivudo žvaigždės Willem Dafoe, Alison Brie, Gretchen Mol ir kiti.</p>

				<p>Jaudinanti drama „Šeimos žmogus“ kinuose nuo birželio 23 d.</p><hr/>
				<p>Straipsnis yra paimtas iš <a href="http://www.forumcinemas.lt/">ForumCinemas.lt</a> portalo<br>
				<a href="http://www.forumcinemas.lt/News/1005-Kino-naujienos/2017-05-19/3114/Gryno-testosterono-filmu-aktorius-Gerard-Butler-debiutuoja-dramoje-Seimos-zmogus/">Prieiga prie straipsnio per internetą.</a></p>    
				</article>
				
				<?php
					echo'
					<div class="comment-section">
					<h2 class = "komentaru-antraste">Komentarų skiltis</h2><hr/>
					<div class="s-12 m-12 l-4 comment-form">
					  <h4 class="text-uppercase text-strong">Rašykite komentarą:</h4>
					  <form id = "komentaras" class="customform" method="post" action="'.setComments($conn).'">
						<div class="s-12">
							<input type="hidden" name="vartotojoVardas" value="lol"/>
							<textarea name="lol" id="commentText" class="required message border-radius comment" placeholder="Jūsų komentaras" rows="3"></textarea>
						</div>
						<div class="s-12"><button  onclick="return laukoTikrinimas()" type="submit" name="commentSubmit">Komentuoti</button></div>
					  </form>
					  </div>
					<hr/>
					
					<div class="comm-text-area">';
					echo getComments($conn);	
					echo'</div>
					</div>';
					
				?>
		</div>
			
	</main>
    
    <!-- FOOTER -->
    <footer class="article-footer">
      <!-- Social -->
      <div class="raudona padding text-center">
        <a href="https://www.facebook.com/"><i class="icon-facebook_circle icon2x text-white"></i></a> 
        <a href="https://twitter.com/"><i class="icon-twitter_circle icon2x text-white"></i></a>
        <a href="https://plus.google.com/"><i class="icon-google_plus_circle icon2x text-white"></i></a>
        <a href="https://www.instagram.com/?hl=en/"><i class="icon-instagram_circle icon2x text-white"></i></a>                                                                        
      </div>
      
		<!-- Main Footer -->
      <section class="pilka section ">
        <div class="line">
          <div class="margin">
            <!-- Collumn 1 -->
            <div class="s-12 m-12 l-4 margin-m-bottom-2x">
              <h4 class="text-uppercase text-strong">Mūsų šūkis</h4>
              <p class="text-size-20"><em>Gyvenimas be filmų - neįmanomas.</em><p>
                            
              <div class="line">
                <h4 class="text-uppercase text-strong margin-top-30">Apie kompaniją</h4>
                <div class="margin">
                  <div class="s-12 m-12 l-4 margin-m-bottom">
                    <a class="image-hover-zoom" href="/"><img src="img/blog-04.jpg" alt=""></a>
                  </div>
                  <div class="s-12 m-12 l-8 margin-m-bottom">
                    <p>Per ilgą gyvavimo laika turime tukstančius patenkintų klientų.</p>
                    <a class="text-more-info text-primary-hover" href="/">Skaityti daugiau</a>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Collumn 2 -->
            <div class="s-12 m-12 l-4 margin-m-bottom-2x">
              <h4 class="text-uppercase text-strong">Susisiekite</h4>
              <div class="line">
                <div class="s-1 m-1 l-1 text-center">
                  <i class="icon-placepin text-primary text-size-12"></i>
                </div>
                <div class="s-11 m-11 l-11 margin-bottom-10">
                  <p><b>Adresas:</b> Ulonų g.5, Vilnius</p>
                </div>
              </div>
              <div class="line">
                <div class="s-1 m-1 l-1 text-center">
                  <i class="icon-mail text-primary text-size-12"></i>
                </div>
                <div class="s-11 m-11 l-11 margin-bottom-10">
                  <p><a href="/" class="text-primary-hover"><b>El.paštas:</b>info@lgd.lt</a></p>
                </div>
              </div>
              <div class="line">
                <div class="s-1 m-1 l-1 text-center">
                  <i class="icon-smartphone text-primary text-size-12"></i>
                </div>
                <div class="s-11 m-11 l-11 margin-bottom-10">
                  <p><b>Telefonas:</b>+37061234567</p>
                </div>
              </div>
              <div class="line">
                <div class="s-1 m-1 l-1 text-center">
                  <i class="icon-twitter text-primary text-size-12"></i>
                </div>
                <div class="s-11 m-11 l-11 margin-bottom-10">
                  <p><a href="/" class="text-primary-hover"><b>Twitter</b></a></p>
                </div>
              </div>
              <div class="line">
                <div class="s-1 m-1 l-1 text-center">
                  <i class="icon-facebook text-primary text-size-12"></i>
                </div>
                <div class="s-11 m-11 l-11">
                  <p><a href="/" class="text-primary-hover"><b>Facebook</b></a></p>
                </div>
              </div>
            </div>
            
      </section>
      <hr class="break margin-top-bottom-0" style="border-color: rgba(0, 38, 51, 0.80);">
      
      
    </footer>
    <script type="text/javascript" src="js/responsee.js"></script>
    <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/template-scripts.js"></script>   
	<script>
	function laukoTikrinimas(){
		var formosLaukas = document.getElementById("commentText");
		if(formosLaukas.value == ''){
			alert('Komentaro laukas tuscias');
			return false
		}
		else{
			return true;
		}
	}
	
	</script>
   </body>
</html>