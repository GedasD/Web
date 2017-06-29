<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TOP10</title>
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
		.raides-spalva{
			color:#b70303;
		}
		.remelis{
			border: solid 2px #b70303;
		}
		.fono-spalva{
			background-image:url("img/fonas3.jpg");
			background-size: cover;                      
			background-repeat: no-repeat center center fixed;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
			background-position: center center;
			background-color:#b70303;
			}
		.x11{
			background-color:rgba(255,255,255, 0.5);
			}

	</style>
	
  </head>  
  
  <body class="size-1140 ">
  
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
    <main role="main" >
      
      
      <!-- TOP10 Lentele --> 
      <section class="section  pilka">
        <div class="line">
          <h2 class="text-thin headline text-center text-s-size-30 margin-bottom-50">TOP10 <span class="raides-spalva">Cinema<span calss="raides-spalva"></span></h2>
          <div>
						<table class="x11 remelis">
						   <tr>
								<th>Nuotrauka</th>
								<th>Aprašymas</th>
								<th>Pristatymo video</th>
						   </tr>
						   <tr>
						 
								<td><img src="img/alien1.jpg" alt=""/></td>
								<td><p>Alien:Coventant: </p>Erdvėlaivio „Covenant“ įgula skrieja link tolimos, vienišos planetos, kurioje tikisi rasti užuominų apie prieš kelerius metus dingusį kosminį laivą „Prometėjas“. Artėjant prie kelionės tikslo, įgula kiekvieną dieną vis labiau žavisi didėjančiu planetos vaizdu. Iš kosminio laivo planeta atrodo tikras rojus. Tačiau nusileidus ant jos paviršiaus, pirmasis įspūdis greitai ima sklaidytis. Pirmu didžiuliu sukrėtimu įgulai tampa planetoje gyvenantis sintetinis robotas Deividas (aktorius Michael‘as Fassbender‘is) – vienintelis likęs „gyvas“ „Prometėjo“ įgulos narys. „Covenant“ įgula dabar tikrai žino, kad „Prometėją“ ištiko katastrofa. Sveikas protas pataria kuo greičiau dingti iš planetos, tačiau smalsumas nugali. Žmonės ima tyrinėti planetą. Tai, ką jie atranda, pranoksta bet kokį košmarą.</td>
								<td><video width="400" controls><source src="video/alien.mp4" type="video/mp4"></video></td>
						   </tr>
						   <tr>
								<td><img src="img/dunkir1.jpg" alt=""/></td>
								<td> Dunkirk:Filmas pasakoja apie karių evakuaciją iš Šiaurės Prancūzijos.Pirmasis filmas nuo 1958-ųjų, vaizduojantis „mažųjų laivų stebuklu“ vadinamą įvykį, kuomet 300 tūkstančių kareivių 1940 metais buvo gelbėjami po staigios vokiečių atakos. Jame pasirodys jau ankstesniuose Nolano filmuose vaidinę aktoriai Tomas Hardy ir Cillian Murphy. Filme taip pat vaidins pernai „Oskarą“ už geriausią antraplanį vaidmenį filme „Šnipų tiltas“ (Bridge of Spies, 2015) gavęs Markas Rylance.</td>
								<td><video width="400" controls><source src="video/dunkirk.mp4" type="video/mp4"></video></td>
						   </tr>
						    <tr>
								<td><img src="img/logan8.jpg" alt=""/></td>
								<td>Logan:Tai – jau dešimtasis „Iksmenų“ serijos filmas ir trečioji bei paskutinė „Ernio“ trilogijos dalis, kurioje pasaulis bus visiškai nebe toks, o pagrindinis herojus – pasenęs, nusilpęs ir neryžtingas. „Iksmenų“ gerbėjai gali būti ramūs – į filmo režisieriaus kėdę sėdo patyręs šių filmų meistras – Jamesas Mangoldas, prieš tai režisavęs „Ernį“. Pagrindinis vaidmuo vėl buvo patikėtas Hughui Jackmanui, filme taip pat vaidina Patrickas Stewartas, Richardas E. Grantas, Elise Neal, Elizabeth Rodriguez ir kiti. </td>
								<td><video width="400" controls><source src="video/logan.mp4" type="video/mp4"></video></td>
						   </tr>
						   <tr>
								<td><img src="img/rings2.jpg" alt=""/></td>
								<td>Rings:Jauna moteris dėl prakeikimo atsiduria nepavydėtinoje situacijoje - dėl prakeikimo, jai grasinama mirtimi, kuri ateis po 7 dienų. </td>
								<td><video width="400" controls><source src="video/rings.mp4" type="video/mp4"></video></td>
						   </tr>
						   <tr>
								<td><img src="img/war3.jpg" alt=""/></td>
								<td>War for the Planet of the Apes:Viskas parsidėjo prieš daugybę metų, kai nepavykusio eksperimento metu patys žmonės neįtikėtinai padidino beždžionių intelektą. Pasiekusios žmogaus lygį ir nebesitenkindamos antrarūšių gyvenimu, vieną dieną beždžionės sukilo. Taip prasidėjo ilgus metus trunkantis karas, kurio nenumalšino net trumpam įsivyraudavusi trapi taika. </td>
								<td><video width="400" controls><source src="video/apes.mp4" type="video/mp4"></video></td>
						   </tr>
						   <tr>
								<td><img src="img/furious6.jpg" alt=""/></td>
								<td>The Fate of the Furious:Po paskutinių Domo (Vin‘as Diesel‘is) ir kompanijos nuotykių, kurių metu buvo supakuotas ir į kalėjimą patupdytas Dekardas Šo (Jason‘as Statham‘as), automobilius dievinantys herojai apsiramino. Domas ir Letė (Michelle Rodriguez) mėgaujasi medaus mėnesiu, kiti kompanijos nariai irgi išsiskirstė kas sau.  </td>
								<td><video width="400" controls><source src="video/furios.mp4" type="video/mp4"></video></td>
						   </tr>
						    <tr>
								<td><img src="img/circle.jpg" alt=""/></td>
								<td>The Circle: Jauna programuotoja Mei (aktorė Emma Watson) „ištraukia laimingą bilietą“: jai pasiūlomas darbas vienoje didžiausių pasaulio technologijų bendrovių „Ratas“. Nespėjusi atsitokėti iš netikėtumo, Mei pradeda darbuotis naujoje vietoje ir netrukus, laimingai susiklosčiusių aplinkybių dėka, sėkmė jai nusišypso dar kartą. Merginai pasiūloma tapti naujos technologijos bandytoja-savanore. Naujoji „Ratas“ technologija – visą vartotojo gyvenimą fiksuojanti mini kamera, susieta su socialiniais tinklais. Kitaip tariant, nenutrūkstamas realybės šou. Netikėtai Mei tampa interneto žvaigžde ir ima pažinti kitą technologijų pusę </td>
								<td><video width="400" controls><source src="video/circle.mp4" type="video/mp4"></video></td>
						   </tr>
						  <tr>
								<td><img src="img/king.jpg" alt=""/></td>
								<td>King Arthur. Legend of the Sword:Žavingasis britų kino chuliganas Guy Ritchie („Šerlokas Holmsas“, „Vagišiai“, „Stok, lok arba šauk“) sugrįžta! Ir šįkart imasi istorinės temos – karaliaus Artūro legendos. Tačiau net ir istorinį epą režisierius pasakoja savaip – dinamiškai, įžūliai ir nenuobodžiai. </td>
								<td><video width="400" controls><source src="video/king.mp4" type="video/mp4"></video></td>
						   </tr>
						    <tr>
								<td><img src="img/woman.jpg" alt=""/></td>
								<td>Wonder woman:XX a. pradžia. Nuošalioje, su išorės pasauliu ryšių neturinčioje Amazonės saloje gyvena žavingų ir nuožmių amazonių gentis. Nuo pat mažų dienų mergaitės imamos mokyti karo paslapčių, kad taptų nenugalimomis kovotojomis. Karalienės duktė Diana – viena iš jų. Princesė turi ypatingų galių, apie kurias kol kas ir pati nenutuokia.   </td>
								<td><video width="400" controls><source src="video/woman.mp4" type="video/mp4"></video></td>
						   </tr>
						   <tr>
								<td><img src="img/karibu.jpg" alt=""/></td>
								<td>Pirates of the Caribbean: Dead Men Tell No Tales:Džeko Sparou (akt. Johnny Depp) seno priešo – kraupiojo kapitono Salazaro (akt. Javier Bardem), kuris kone vienintelis gyvas ištrūko iš Bermudų trikampio, dar vadinamo Velnio trikampiu, troškimas ir tikslas – nužudyti kiekvieną jūra plaukiantį piratą, įskaitant ir Džeką. Todėl piktasis Salazaras ant jų užsiundo mirtį nešančią piratų vaiduoklių armiją. Galimybė išvengti šių šmėklų kalavijų itin menka. </td>
								<td><video width="400" controls><source src="video/pirates.mp4" type="video/mp4"></video></td>
						   </tr>
						   
						   
						   
						   
						   
					   </table>    
                
      
    </main>
    
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
				<?php 
					if(!isset($_SESSION['vart_num'])){
						echo'
						<div class="s-12"><button  onclick=redir();>Siūsti</button></div>';
					}
					else{
						echo'
						<div class="s-12"><button  type="submit";>Siūsti</button></div>';
					}
				?>
      </section>
      <hr class="break margin-top-bottom-0" style="border-color: rgba(0, 38, 51, 0.80);">
      
    
    </footer>
    <script type="text/javascript" src="js/responsee.js"></script>
    <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/template-scripts.js"></script>   
   </body>
</html>