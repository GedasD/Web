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
    <main role="main" class="straipsnio-fonas5">
      
      <!-- Section 4 --> 
	  
	
	  <article>
			<div class="data melyna" >2017-04-02</div>
			<p><h1 class="pavadinimas">Filmas „Ratas“ atskleis tamsiausią socialinių tinklų pusę: apie ką net nepagalvojame kaskart atsidarydami „Facebook“?</h1></p>
		  
			<p><img src="img/filmasratas.jpg" class="AntrastesNuotrauka"/> Kas tu esi? Ką mėgsti? Ir ko nekenti? „Ratas“ žino viską. Jau šį savaitgalį mūsų šalies kino teatruose pasirodys įtampos kupinas ir susimąstyti verčiantis išmanusis naujos kartos technologijų trileris „Ratas“, pramintas „vienu didžiausių šių metų „Facebook“ ir „Google“ galvos skausmų“.Kas tu esi? Ką mėgsti? Ir ko nekenti? „Ratas“ žino viską. Jau šį savaitgalį mūsų šalies kino teatruose pasirodys įtampos kupinas ir susimąstyti verčiantis išmanusis naujos kartos technologijų trileris „Ratas“, pramintas „vienu didžiausių šių metų „Facebook“ ir „Google“ galvos skausmų“.<p>

			<p>Filmas, kuriame pagrindinius vaidmenis atliko „Hario Poterio“ bei „Gražuolė ir pabaisa“ žvaigždė Emma Watson bei Holivudo kino grandas Tomas Hanksas, ketina pažadinti visus interneto vartotojus ir priminti, jog socialiniai tinklai yra ne tik pramoga. Jie turi itin pavojingą tamsiąją pusę, apie kurią dažnas net nesusimąsto.</p>	

			<p>Premjeros Lietuvoje proga pateikiame mokslininkų išskirtus pavojingiausius socialinių tinklų naudojimosi minusus (be to, kad tai labai nesaugu), turinčius įtakos ne tik mūsų elgsenai, bet ir smegenims:1) Socialiniai tinklai priverčia jus išleisti daugiau pinigų. Naujausi tyrimai atskleidžia, jog žmonės ima mažiau kontroliuoti ir apgalvoti savo veiksmus,  todėl tampa išlaidesni. Socialiniuose tinkluose aktyviai veikia reklamos specialistai, atsiranda vis daugiau užslėptos reklamos.2) Socialiniai tinklai gali turėti įtakos jūsų svoriui. Ne tik dėl to, jog ilgiau sėdite prie kompiuterio ir mažiau judate. Taip vadinamos „food porn” nuotraukos, pasak „Women’s Health” tyrimų, veikia smegenų centrus, susijusius su alkio jausmu ir jį padidina. Nustatyta, jog net sočiai pavalgius, gražios patiekalų nuotraukos ir vėl gali priversti jus pasijusti alkanu.3) Socialiniai tinklai mažina sugebėjimą mąstyti savarankiškai. Dažniausiai tam įtakos turi nuomonių formuotojais vadinami įžymūs žmonės, kurių palankumą pelnyti norintys gerbėjai ima mąstyti bei elgtis panašiai.  4) Du Vokietijos universitetai darė tyrimą, kaip iš tiesų jaučiasi socialinių tinklų vartotojas. Galiausiai paaiškėjo, jog vienas iš trijų internautų, prisijungęs prie tinklo, jaučiasi blogai (vienišas, susierzinęs, piktas). Šie jausmai atsiranda, nes net to nenorėdamas, imi lyginti save su kitais.5) Ir bene pats pavojingiausias socialinių tinklų aspektas – vartotojai praranda sugebėjimą normaliai bendrauti su žmonėmis akis į akį.</p>

			<p>Išmanusis technologijų trileris „Ratas“ – tai juosta apie jauną programuotoja Mei, kuriai pasiūlomas darbas vienoje didžiausių pasaulio technologijų bendrovių „Ratas“. Netrukus mergina tampa naujos technologijos bandytoja-savanore. Tai – visą vartotojo gyvenimą fiksuojanti mini kamera, susieta su socialiniais tinklais. Kitaip tariant, nenutrūkstamas realybės šou. Netikėtai Mei tampa interneto žvaigžde ir ima pažinti kitą technologijų pusę.</p><hr/>
			
			<p>Straipsnis yra paimtas iš <a href="http://www.forumcinemas.lt/">ForumCinemas.lt</a> portalo<br>
			<a href="http://www.forumcinemas.lt/News/1005-Kino-naujienos/2017-05-17/3107/Filmas-Ratas-atskleis-tamsiausia-socialiniu-tinklu-puse-apie-ka-net-nepagalvojame-kaskart-atsidarydami-Facebook/">Prieiga prie straipsnio per internetą.</a></p>


			    
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