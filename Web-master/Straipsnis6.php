<?php 
	session_start();
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
    <main role="main" class="m straipsnio-fonas6">
      
      <!-- Section 4 --> 
	  
	
	  <article>
			<div class="data melyna" >2017-01-28</div>
			<p><h1 class="pavadinimas">Ne visiems žinomi įdomūs faktai apie G. Ritchie: genialus disleksikas, turintis du juodus diržus</h1></p>
		  
			<p><img src="img/guy.jpg" class="AntrastesNuotrauka"/> Guy Ritchie labiausiai išgarsėjo dėl dviejų dalykų: santuokos su popmuzikos karaliene Madonna bei kaip kino chuliganas, pristatęs tokius didžiųjų ekranų šedevrus, kaip „Lok, stok arba šauk“, „Šerlokas Holmsas“, „Vagišiai“ bei jau šį savaitgalį pasirodysiantį naująjį trilerį „Karalius Artūras: kalavijo legenda“. Tačiau ar žinojote, jog režisierius serga disleksija, penkiolikos buvo išmestas iš mokyklos ir turi dziudo juodąjį diržą? Artėjant naujausiai režisieriaus premjerai, kviečiame su juo susipažinti artimiau.

			<p> – G. Ritchie serga disleksija. Tai yra specifinis skaitymo sutrikimas. Tokiems žmonėms pasitaiko ir atminties sutrikimų, sunku sukoncentruoti dėmesį.

		        – Guy ir Madonna susipažino atlikėjo Stingo ir jo žmonos namuose. Vėliau pastarieji tapo jų sūnaus Rocco krikštatėviu.

				– G. Ritchie ir Madonnos vestuvėse vyriausiuoju pabroliu buvo prodiuseris bei režisierius Matthew Vaughnas, vyriausia pamerge – Gwyneth Paltrow.

				– Būsimojo režisieriaus tėvai išsiskyrė, kai jam tebuvo penkeri.

				– Penkiolikmetis G. Ritchie buvo pašalintas iš mokyklos už narkotikų vartojimą. 

				– Robbie Williamso daina „She’s Madonna“ yra apie tai, kaip G. Ritchie paliko savo buvusią merginą, kad galėtų susitikinėti su Madonna.

				– Madonną jis meiliai vadindavo „missus“ (liet. poniute), taip ją įvardindavo ir spaudai duodamuose interviu.

				– Tiek jo pirmasis sūnus Rocco, tiek sūnus Rafaelis, kurio jis susilaukė su dabartine žmona Jacqui Ainsley, gimė skubiai atlikus Cezario pjūvio operaciją.

				– Turi penkis vaikus, iš kurių vienas, Davidas Banda, yra įvaikintas drauge su Madonna.

				– Skyrybas su Madonna vyras vis dar įvardija kaip savo mirtį.

				– G. Ritchie yra didžiulis futbolo klubo „Chelsea“ fanas.

				– 2000 metais Guy buvo suimtas už tai, kad prie savo namų užpuolė ir sužalojo 20-metį vyrą. 

				– Turi juodus dziudo ir braziliškojo džiudžitsu diržus.</p>

		 <p> Naujausioje G. Ritchie režisuotoje istorinėje dramoje „Karalius Artūras: kalavijo legenda“ bus pasakojama intriguojanti istorija apie jaunuolį Artūrą (aktorius Charlie Hunnamas), kuris net nenutuokia apie savo karališką kilmę, kol vieną dieną prisiliečia prie užburtojo Ekskaliburo. Legenda byloja, kad akmenyje įkalintą kardą ištraukti gali tik karalius. Visų nuostabai, tai pavyksta padaryti būtent Artūrui. Prie vaikino ima burtis piktojo valdovo Vortigerno (aktorius Jude’as Law) nukamuoti žmonės. Sukilimo nuojauta atkreipia Vortigerno, kažkada nužudžiusio Artūro tėvus ir užgrobusio sostą, dėmesį. Tuo tarpu jaunąjį Artūrą užgriūva atsakomybės našta, tačiau jam dar teks įrodyti, kad yra vertas karaliaus sosto.Intriguojantis naujausias režisieriaus filmas „Karalius Artūras: kalavijo legenda“ ekranuose pasirodys jau gegužės 12 dieną ir papasakos žinomą legendą visiškai kitaip. Taip, kaip ir priklauso kino chuliganu vadinamam G. Ritchie.</p><hr/>
		 
		 <p>Straipsnis yra paimtas iš <a href="http://www.forumcinemas.lt/">ForumCinemas.lt</a> portalo<br>
			<a href="http://www.forumcinemas.lt/News/1005-Kino-naujienos/2017-05-10/3099/Ne-visiems-zinomi-idomus-faktai-apie-G-Ritchie-genialus-disleksikas-turintis-du-juodus-dirzus/">Prieiga prie straipsnio per internetą.</a></p>
			
	    
    </main>
			
	</article>
    
    <!-- FOOTER -->
    <footer>
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
            
            <!-- Collumn 3 -->
            <div class="s-12 m-12 l-4">
              <h4 class="text-uppercase text-strong">Siūskite žinutę mums</h4>
              <form class="customform text-white" method="post" action="insert.php">
                <div class="line">
                  <div class="margin">
                    <div class="s-12 m-12 l-6">
                      <input title="Your e-mail"  name="email" class="required email border-radius" placeholder="Jūsų el-paštas" required  type="text" />
                    </div>
                    <div class="s-12 m-12 l-6">
                      <input name="name" class="name border-radius" placeholder="Jūsų vardas" title="Your name" type="text" />
                    </div>
                  </div>
                </div>
                <div class="s-12">
                  <textarea name="message" class="required message border-radius" placeholder="Jūsų pranešimas"  required rows="3"></textarea>
                </div>
                <div class="s-12"><button  type="submit">Siūsti</button></div>
      </section>
      <hr class="break margin-top-bottom-0" style="border-color: rgba(0, 38, 51, 0.80);">
      
      
    </footer>
    <script type="text/javascript" src="js/responsee.js"></script>
    <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/template-scripts.js"></script>   
   </body>
</html>