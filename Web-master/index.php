<?php 
	session_start();
?>


<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pagrindinis</title>
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
		.reg{
			position:relative;
			left:150px;
			top:12px;
		}
		.link-style{
			color:white;
		}
		.link-style:hover{
			color:red;
		}
		.balta1{
			color: white !important;
		}
		
	</style>
	<link rel="stylesheet" href="css/MUSUSTILIUS.css">
  </head>  
  
  <body class="size-1140">
  
    <!-- HEADER -->
    <header role="banner">    
      <!-- Top Bar -->
	  <div class="Antraste">
      
	  
	  </div>
      
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
    <main role="main">
      <!-- Main Carousel -->
      <section class="pilka" id="y">
        <div class="line" id="pav">
          <div class="carousel-fade-transition owl-carousel carousel-main carousel-nav-white carousel-wide-arrows itemSize">
            <div class="item caruselImage">
              <div class="s-12 center">
                <img src="img/it2.jpg" alt="" class="redBorder caruselImage" >
                <div class="carousel-content" >
                  <div class="padding-2x">
                    <div class="s-12 m-12 l-8"  >
                      <p class="text-white text-s-size-20 text-m-size-40 text-l-size-60 margin-bottom-40 text-thin text-line-height-1"></p>
                      <p class="text-white text-size-16 margin-bottom-40 balta" id="pav" style=" color: white;"> Filmas "It" netrukus pasieks Jūsų plačiuosius ekranus“</p>  
                    </div>                  
                  </div>
                </div>
              </div>
            </div>
            <div class="item caruselImage">
              <div class="s-12 center">
                <img src="img/logan3.jpg" alt="" class="redBorder">
                <div class="carousel-content">
                  <div class="padding-2x">
                    <div class="s-12 m-12 l-8">
                      <p class=" text-s-size-20 text-m-size-40 text-l-size-60 margin-bottom-40 text-thin text-line-height-1"></p>
                      <p class=" balta text-size-16 margin-bottom-30">"Logan":Tai – jau dešimtasis „Iksmenų“ serijos filmas ir trečioji bei paskutinė „Ernio“ trilogijos dalis</p>    
                    </div>                  
                  </div>
                </div>
              </div>
            </div>
          </div>  
        </div>
      </section>
      
      <section id="pagrindiniaiStr">
      <!-- Section 4 --> 
	  
			<div id="x">
			<div class="pagrindinisarticle firstRow" >
			
						  <div class="pa" >
							<div class="data melyna">2017-05-09</div>
							<h3><a class="text-dark  pavadinimas hoverRaudona" href="straipsnis1.php">Gryno testosterono filmų aktorius Gerard Butler debiutuoja dramoje „Šeimos žmogus“</a></h3>
							<p class="pastraipa" ><img src="img/familyman.jpg" class="an"/>Tapti suaugusiu reiškia išmokti surasti pusiausvyrą tarp šeimos gyvenimo ir karjeros. Elektroninis paštas, išmanieji telefonai bei socialiniai tinklai šią liniją dar labiau ištirpdo. Naujausias režisieriaus Mark Williams filmas „Šeimos žmogus“ (angl. „A Family Man“) pasakoja istoriją, kurią esame girdėję daug kartų, tačiau tai paliečia vis daugiau ir daugiau šiuolaikinių darboholikų...</p>
							<a class="text-more-info text-primary-hover" href="straipsnis1.php">Skaityti daugiau</a>
						  </div>
			</div>  
			
			<div class="pagrindinisarticle secondRow">
						  <div class="pa">
							<div class="data melyna">2017-05-20</div>
							<h3><a class="text-dark hoverRaudona" href="straipsnis2.php">Į kino ekranus grįžta kultiniai „Gelbėtojai“</a></h3>
							<p class="pastraipa" ><img src="img/article2.jpg" class="an"/>90-ųjų vidurys daugelio vartotojų sąmonėje siejasi su kultiniu televizijos serialu „Gelbėtojai“ (angl. „Baywatch“). Sėkmingiausiu visų laikų kūriniu apie gelbėtojus buvęs ir dešimtmetį rodytas serialas savo laiku buvo tikrų tikriausia sensacija – į raudonas glaudes ir maudymosi kostiumėlį dėvinčius Davidą Hasselhoffą ir Pamelą Anderson kiekvieną savaitę žiūrėdavo daugiau nei 1,1 mlrd. žiūrovų iš 158 pasaulio šalių... </p>
							<a class="text-more-info text-primary-hover" href="straipsnis2.php">Skaityti daugiau</a>
						  </div>
			</div>  
			
			<div class="pagrindinisarticle firstRow" >
						  <div class="pa" >
							<div class="data melyna">2017-03-18</div>
							<h3><a class="text-dark hoverRaudona pavadinimas" href="straipsnis3.php">Oskarui nominuota makiažo meistrė atskleidžia filmo „Mumija“ užkulisius</a></h3>
							<p class="pastraipa" ><img src="img/mummy.jpg" class="an"/>Kol vieni tikina, jog „nauja - tai seniai pamiršta sena“, kiti semiasi įkvėpimo iš madų šou matytų pasirodymų bei raudonojo kilimo. Karščiausias tendencijas makiažo ir šukuosenų srityje diktuoja ir kinas - garsios makiažo specialistės ir blogerės neretai kine matytų personažų makiažą išbando savo kailiu ir sekėjams dalina patarimus kaip atrodyti tarsi nužengus iš filmo.....</p>
							<a class="text-more-info text-primary-hover" href="straipsnis3.php">Skaityti daugiau</a>
						  </div>
			</div>
						  
			<div class="pagrindinisarticle thirdRow" >
						  <div class="pa" >
							<div class="data melyna">2017-02-21</div>
							<h3><a class="text-dark hoverRaudona pavadinimas" href="straipsnis4.php">Jaudinanti drama „Pažadas“: meilės trikampis Armėnų genocido siaube</a></h3>
							<p class="pastraipa" ><img src="img/v1.jpg" class="an"/>Režisieriaus Terry George istorinė drama „Pažadas“ (angl. „The Promise“) savo esme yra meilės istorija, tačiau jaudinančios kino juostos stiprumas slypi jos aplinkoje – daugiau nei vieno milijono armėnų išžudyme Turkijoje Pirmojo pasaulinio karo metu.......</p>
							<a class="text-more-info text-primary-hover" href="straipsnis4.php">Skaityti daugiau</a>
						  </div>
						  
			</div>  
			<div class="pagrindinisarticle firstRow" >
						  <div class="pa" >
							<div class="data melyna">2017-04-02</div>
							<h3><a class="text-dark hoverRaudona pavadinimas" href="straipsnis5.php">Filmas „Ratas“ atskleis tamsiausią socialinių tinklų pusę: apie ką net nepagalvojame kaskart atsidarydami „Facebook“?</a></h3>
							<p class="pastraipa" ><img src="img/filmasratas.jpg" class="an"/>Kas tu esi? Ką mėgsti? Ir ko nekenti? „Ratas“ žino viską. Jau šį savaitgalį mūsų šalies kino teatruose pasirodys įtampos kupinas ir susimąstyti verčiantis išmanusis naujos kartos technologijų trileris „Ratas“, pramintas „vienu didžiausių šių metų „Facebook“ ir „Google“ galvos skausmų“....</p>
							<a class="text-more-info text-primary-hover" href="straipsnis5.php">Skaityti daugiau</a>
						  </div>
			</div>
						  
			<div class="pagrindinisarticle thirdRow" >
						  <div class="pa" >
							<div class="data melyna">2017-01-28</div>
							<h3><a class="text-dark hoverRaudona pavadinimas" href="straipsnis6.php">Ne visiems žinomi įdomūs faktai apie G. Ritchie: genialus disleksikas, turintis du juodus diržus</a></h3>
							<p class="pastraipa" ><img src="img/guy.jpg" class="an"/>Guy Ritchie labiausiai išgarsėjo dėl dviejų dalykų: santuokos su popmuzikos karaliene Madonna bei kaip kino chuliganas, pristatęs tokius didžiųjų ekranų šedevrus, kaip „Lok, stok arba šauk“, „Šerlokas Holmsas“, „Vagišiai“ bei jau šį savaitgalį pasirodysiantį naująjį trilerį „Karalius Artūras: kalavijo legenda“...</p>
							<a class="text-more-info text-primary-hover" href="straipsnis6.php">Skaityti daugiau</a>
						  </div>
						  
			</div>  
			 
			</div>
			</div>
      </section>
      
    </main>
    
    <!-- FOOTER -->
    <footer>
      <!-- Social -->
	  
      <div class=" raudona padding text-center">
        <a href="https://www.facebook.com/"><i class="icon-facebook_circle icon2x text-white balta1"></i></a> 
        <a href="https://twitter.com/"><i class="icon-twitter_circle icon2x text-white balta1"></i></a>
        <a href="https://plus.google.com/"><i class="icon-google_plus_circle icon2x text-white balta1"></i></a>
        <a href="https://www.instagram.com/?hl=en/"><i class="icon-instagram_circle icon2x text-white balta1"></i></a>                                                                        
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
              <form class="customform" method="post" action="insert.php">
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
				<div class="s-12 pilka"><button  type="submit";>Siūsti</button></div>
				
      </section>
      <hr class="break margin-top-bottom-0" style="border-color: rgba(0, 38, 51, 0.80);">
      
      
    </footer>
    <script type="text/javascript" src="js/responsee.js"></script>
    <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/template-scripts.js"></script>   
    <script type="text/javascript" src="musujs.js"></script>   
	
   </body>
</html>